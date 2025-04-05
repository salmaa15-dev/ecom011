<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    public function detailsProduct($slug)
    {
        Product::view($slug);
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('front-end.shop-products',[
            'product' => $product,
            'Related_products' =>  Product::select(['image', 'slug', 'title', 'price', 'sale', 'etat_sale', 'view'])->where('slug', '!=', $slug)->where('remove', false)->where('categorie_id', $product->categorie_id)->get()
        ]);
       
    }

    public function productByCategory($productBycategory)
    {  
        $category = Category::where('slug', $productBycategory)->firstOrFail();
        return view('front-end.productByCategory', [
            'category'=> $category
            ]);
    }

    public function packs()
    {  
        $packs = Product::pack()->take(20)->get();
        return view('front-end.packs', ['packs'=> $packs]);
    }
    
    public function sales()
    {  
        $sales = Product::select('id', 'image', 'price', 'sale', 'title', 'slug', 'etat_sale', 'view')->where('etat_sale', true)->where('remove', false)->orderby('sale', 'ASC')->get();
        return view('front-end.sales', ['sales'=> $sales]);
    }
}
