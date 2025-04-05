<?php

namespace App\Support;



use App\Models\Product;

use Illuminate\Support\Collection;



class Shop {



    public static $cart = [];



    public static function total() {      

        return floatval(static::orders()->sum('total'));

    }



    public static function orders(): Collection

    {

        static::$cart = cart()->all();

        return Product::whereIn('id', array_keys(static::$cart))

            ->get()

            ->map(function(Product $product){
                return (object) [
                    'id' =>  $product->id,
                    'name' =>  $product->title,
                    'price' => $product->price_net,
                    'qty'   => $qty = static::$cart[$product->id],
                    'total' => $product->price_net * $qty
                ];
            });

    }



}