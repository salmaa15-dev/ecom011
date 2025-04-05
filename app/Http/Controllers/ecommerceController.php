<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\User;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use App\Models\Countrie;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use App\Notifications\ContactNewNotification;
use App\Http\Requests\Contact\SotreContactRequest;

class ecommerceController extends Controller
{
 
    public function Home()
    {
        // dd(Route::getRoutes());
       
      $totalProducts_AND_totalCustomer = DB::query()
        ->selectRaw('(SELECT COUNT(*) FROM customers WHERE JSON_EXTRACT(properties, "$.customer") = "Paid") AS total_customer')
        ->selectRaw('(SELECT COUNT(*) FROM products) AS total_products')
        ->first();
        $agent = new Agent();
        $products = Category::select('id', 'name', 'slug')
        ->where('etat', true)
        ->has('products')
        ->with([
            'products' => fn ($q) => $q->select('id', 'categorie_id', 'slug', 'image', 'title', 'price', 'sale', 'view', 'etat_sale')
                ->where('remove', false)
                ->orderBy('price', 'ASC')
                ->orderBy('sale', 'ASC')
                ->take($agent->isPhone() ? 2 : 4)
                
        ])
        ->withCount('products')
        ->orderBy('products_count', 'DESC')
        ->take(20)
        ->get();
        
        return view('front-end.home', [
            'agent' => $agent,
            'categorys' => Category::select('name', 'slug', 'logo')->where('etat', true),
            'sales'     => Product::sale(),
            'categories' => $products,
            'packs' => Product::Pack(),
            'totalProducts_AND_totalCustomer' => $totalProducts_AND_totalCustomer,
        ]);
    }

    public function about()
    {
      return view('front-end.about');
    }

    public function contact()
    {
      return view('front-end.contact');
    }

    public function cart()
    {
      return view('front-end.cart-shopping');
    }


    public function checkout()
    {
      return view('front-end.checkout', [
        'countries' => Countrie::select('country')
          ->where('active', true)
          ->get()
        ]);
    }

    public function create(SotreContactRequest $request)
    {
      $contact = Contact::create($request->all());
      Notification::send(User::all(), new ContactNewNotification($contact));
      return redirect()
        ->back()
        ->with('success', 'send message success');
    }

    public function page($slug)
    {
      return view('front-end.aprops', ['page' => Page::where('slug', $slug)->select('content', 'slug')->firstOrFail()]);
    }
}