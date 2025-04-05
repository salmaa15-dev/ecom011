<?php

namespace App\Http\Controllers;

use App\Models\User;
use PayPal\Api\Item;
use App\Support\Shop;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use App\Models\Customer;
use PayPal\Api\ItemList;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use App\Notifications\shopNotification;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\customers\CustomerRequest;

class CheckoutController extends Controller
{
    private $apiContext;
    private $secret;
    private $clientId;
    public function __construct()
    { 
      $this->clientId = config('paypal.live_client_id');
      $this->secret = config('paypal.live_secret');

      $this->apiContext = new ApiContext(new OAuthTokenCredential($this->clientId, $this->secret));
      $this->apiContext->setConfig(config('paypal.settings'));
    }

    public function payment_with_transfer(CustomerRequest $request, $type = 'Telegraphic Transfer')
    {
      $this->payment($request, $type);
      return redirect()->route('home')->with(['success'=> 'Thank you, your order has been confirmed. Please wait within one hour or you will be notified later.'
      ,'data' => 'bien']);
    }

    public function payment($payment, $type)
    {
      $customer = Customer::create($payment->all() + [
        'total_orders' => Shop::total(),
        'type_payment' => $type,
        'etat_payment' => false,
        'properties' =>  ['customer' => 'New order','color'    => 'new-order']
      ]);
      
      foreach (Shop::orders() as $order) {
        $customer->orders()->attach($order->id, ['qty' => $order->qty]);
      }
      Notification::send(User::all(), new shopNotification($customer));
       session()->forget('cart');
       session()->save();
    }

    public function payment_with_paypal(CustomerRequest $request)
    { 
      session()->put([
        'customer' => [
        'name' => $request->name, 
        'mobile' => $request->mobile,
        'email' => $request->email,
        'address' => $request->address,
        'country' => $request->country,
        'state' => $request->state,
        'city' => $request->city,
        'zip_code' => $request->zip_code
        ]
      ]);
      session()->save();
 
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
	    $orderList = new ItemList();
	  
      foreach(Shop::orders() as $item) {
        $order = new Item();
        $order->setCurrency('EUR')
              ->setName($item->name)
              ->setQuantity($item->qty)
              ->setPrice($item->price);
        $orderList->addItem($order);
      }

	  $amount = new Amount();
      $amount->setCurrency("EUR")
        ->setTotal(Shop::total());
            
	  $transaction = new Transaction();
      $transaction->setAmount($amount)
        ->setItemList($orderList);

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(env('APP_URL').'status/')
            ->setCancelUrl(env('APP_URL').'canceled/');
  
        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));
			
			try {
					$payment->create($this->apiContext);
			} catch (\PayPal\Exception\PayPalConnectionException $ex) {
            return redirect()->back()->with('error', 'Payment Failed tray again !');
			}

      $paymentLink = $payment->getApprovalLink();
      return redirect($paymentLink);
    }
    public function status()
    { 
      try {
      
        if(empty(request()->input('PayerID')) || empty(request()->input('token'))) {
          return redirect()->route('checkout')->with('error', 'Payment Failed again');
        } elseif(session()->get('customer') == null) {

          return redirect()->route('checkout')->with('error', 'please check your information tray again !');

        } else {
          $paymentId = request()->get('paymentId');
          $payment = Payment::get($paymentId, $this->apiContext);
          $execution = new PaymentExecution();
          $execution->setPayerId(request()->input('PayerID'));
          $result = $payment->execute($execution, $this->apiContext);

          if($result->getState() == 'approved') {
              $customer = Customer::create([
                'name'          => session()->get('customer.name'),
                'mobile'        => session()->get('customer.mobile'),
                'email'         => session()->get('customer.email'),
                'address'       => session()->get('customer.address'),
                'country'       => session()->get('customer.country'),
                'state'         => session()->get('customer.state'),
                'city'          => session()->get('customer.city'),
                'zip_code'      => session()->get('customer.zip_code'),
                'total_orders'  => Shop::total(),
                'etat_payment'  => true,
                'type_payment'  => 'PayPal'
              ]);
              foreach (Shop::orders() as $order) {
                $customer->orders()->attach($order->id, ['qty' => $order->qty]);
              }
            Notification::send(User::all(), new shopNotification($customer));
            session()->forget(['customer', 'cart']);
            session()->save();
            return redirect(env('APP_URL'))->with('success', 'Thank you, your order has been confirmed. Please wait within one hour or you will be notified later.');
          }
        }
        
      } catch (\Throwable $th) {
        return redirect()->back()->with('error', 'Payment Failed tray again !');
      }
    }

   public function pay(CustomerRequest $request)
    { 
      session()->put([
        'customer' => [
        'name' => $request->name, 
        'mobile' => $request->mobile,
        'email' => $request->email,
        'address' => $request->address,
        'country' => $request->country,
        'state' => $request->state,
        'city' => $request->city,
        'zip_code' => $request->zip_code
        ]
      ]);
        session()->save();
          $customer = Customer::create([
            'name'          => session()->get('customer.name'),
            'mobile'        => session()->get('customer.mobile'),
            'email'         => session()->get('customer.email'),
            'address'       => session()->get('customer.address'),
            'country'       => session()->get('customer.country'),
            'state'         => session()->get('customer.state'),
            'city'          => session()->get('customer.city'),
            'zip_code'      => session()->get('customer.zip_code'),
            'total_orders'  => Shop::total(),
            'etat_payment'  => true,
            'type_payment'  => 'PayPal'
          ]);
          foreach (Shop::orders() as $order) {
            $customer->orders()->attach($order->id, ['qty' => $order->qty]);
          }
        Notification::send(User::all(), new shopNotification($customer));
        session()->forget(['customer', 'cart']);
        session()->save();
        return redirect(env('APP_URL'))->with('success', 'Thank you, your order has been confirmed. Please wait within one hour or you will be notified later.');

    }
    public function canceled()
    {
      return redirect()->route('checkout')->with('error', 'Payment canceled. No Worries');
    }
}