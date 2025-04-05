<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    const TYPES = [
        'label' => [
            'label' => 'label 2',
            'color' => '#f00'
        ],
        [
            'label' => 'label 2',
            'color' => '#f00'
        ],
    ];

    protected $appends = ['total_order'];
    protected $casts = [
        'properties' => 'array'
    ];
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'address',
        'country',
        'state',
        'city',
        'zip_code',
        'etat_payment',
        'type_payment',
        'properties'
    ];

    public function orders()
    {
        return $this->belongsToMany(Product::class, 'orders', 'customer_id', 'product_id')
            ->withTimestamps()
            ->withPivot('qty');
    }

    public function getTotalOrderAttribute()
    {
        return $this->orders->sum(function ($product){
            return $product->price_net * $product->pivot->qty;
        });
    }
}
