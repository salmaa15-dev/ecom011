<?php



namespace App\Http\Controllers\Admin;



use App\Models\Customer;

use App\Http\Controllers\Controller;



class CustomerController extends Controller

{
    public function index()
    { 
        return view('back-end.customers.list-customers');
    }

    public function orderByCustomer(int $id, string $name)
    {

        $customer = Customer::where(['id' => $id, 'name' => $name ])->select('id', 'name', 'created_at')
            ->with(['orders' => fn($query) 
                => $query->select(
                    'product_id',
                    'slug',
                    'pack',
                    'price',
                    'sale',
                    'etat_sale',
                    'image',
                    'description',
                    'title')
            ])->firstOrFail();

        return view('back-end.customers.orders.list-orders', ['customer' => $customer]);

    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        $customer->orders()->detach();

        $customer->delete();

        return redirect()->route('admin.customers')->with('success', 'remove this '. $customer->name.' successfully with orders');

    }

}

