<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\product\discount;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\product\StoreProductRequest;
use App\Http\Requests\product\UpdateProductRequest;

class ProductController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()
    {
        return view('back-end.products.list-products', ['products' => Product::type(false)->where('remove', false)->with('category')->paginate(10)]);
    }
    
    public function products_removed()

    {
        // dd(Product::where('remove', true)->get());

        return view('back-end.products.list-products-removed', ['products' => Product::where('remove', true)->get()]);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('back-end.products.create-product', ['categorys' => Category::all('name','id')]);

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\StoreProductRequest  $request

     * @return \Illuminate\Http\Response

     */

    public function store(StoreProductRequest $request)

    {   

        if((is_null($request->sale) && $request->etat_sale) || ($request->price <= $request->sale)) {

            return redirect()->back()->withError('The discount is greater than the price <strong>Or</strong> Enter the discount if you want to activate a discount');

        } else { 

            if($request->hasFile('image')) {

                $image = $request->file('image')->store('products-picture', 'public');

            }

            Product::create([

                'title'       => $request->input('title'),

                'categorie_id' => $request->input('categorie_id'),

                'description' => $request->input('description'),

                'slug'        => Str::slug($request->title),

                'image'       => $image,

                'price'       => $request->input('price'),

                'sale'        => $request->input('sale'),

                'etat_sale'   => $request->etat_sale ? true: false

            ]);



            return redirect()->route('admin.products.index')->with('success', 'Added successfully');

        }

    }



    /**

     * Display the specified resource.

     *

     * @param  string  $slug

     * @return \Illuminate\Http\Response

     */

    public function show($slug)

    {           

        return view('back-end.products.show-product', ['product' => Product::where('slug', $slug)->Type(false)->firstOrFail()]);

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  string  $slug

     * @return \Illuminate\Http\Response

     */

    public function edit($slug)

    {

        return view('back-end.products.edit-product', ['product' => Product::where('slug', $slug)->Type(false)->firstOrFail(), 'categorys' => Category::all('name','id')]);

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\UpdateProductRequest  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(UpdateProductRequest $request, $id)

    {

        $product = Product::findOrFail($id);

        if((is_null($request->sale) && $request->etat_sale) || ($request->price <= $request->sale)) {

            return redirect()->back()->withError('The discount is greater than the price <strong>Or</strong> Enter the discount if you want to activate a discount');

        } else {

            $product->title = $request->input('title');

            $product->slug = Str::slug($request->title);

            $product->description = $request->input('description');

            $product->categorie_id = $request->input('categorie_id');

            $product->price = $request->input('price');

            $product->sale = $request->input('sale');

            $product->etat_sale = $request->input('etat_sale') ? true : false;

            $product->view = $request->input('view');

            

            if($request->hasFile('image')) {

                Storage::disk('public')->delete($product->image);

                $product->image = $request->file('image')->store('products-picture', 'public');

            }

            $product->save();

            return redirect()->route('admin.products.index')->with('success', 'This information changes successfully');

        }

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {
        $product = Product::findOrFail($id);
        $product->remove = true;
        $product->save();
        
        return redirect()->route('admin.products.index')->with('success', 'Product delete successfully');
        // $product = Product::findOrFail($id);

        // $product->delete($id);

        // Storage::disk('public')->delete($product->image);

        // return redirect()->route('admin.products.index')->with('success', 'Product delete successfully');

    }

    public function product_restart($id){
        
        $product = Product::findOrFail($id);
        $product->remove = false;
        $product->save();
        return view('back-end.products.show-product', ['product' => Product::where('slug',  $product->slug)->Type(false)->firstOrFail()]);
    }


    public function active_discount(Request $request)

    {

        $product = Product::find($request->id);



        if($product->sale <= 0) 

        {

            return view('back-end/products/discount-product', ['product'=> $product]);

        } else {

            $product->etat_sale = $request->etat_sale ? true: false;

            $product->save();

            return redirect()->back()->with('success', 'This discount for '.$product->title.' <strong>'.$product->EtatDiscount.'</strong>');

        }

    }



    public function discount(discount $request)

    {

        $product = Product::find($request->id);

        $discount = false;

        if(($product->price <= $request->sale)) 

        {

            return redirect()->back()->withError('The discount is greater than the price <strong>Or</strong> Equal !!');

            $discount = false;

        } else {

            $discount = true;

            $product->sale = $request->sale;

            $product->etat_sale = $discount;

            $product->save();

            return redirect()->route('admin.products.index')->with('success', 'This price change successfully');

        }

    }

}

