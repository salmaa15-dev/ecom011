<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Product extends Component
{
    public $amount = 2;
    public $data;
    protected $listeners = [
        'load-more' => 'load'
    ];

    public function render()
    {
        $data = Category::select('id', 'name', 'slug')->has('products');
        $categories = $data->with(['products'])->withCount('products')
        ->orderBy('products_count', 'desc')
        ->take($this->amount)
        ->get();
        
        return view('livewire.product', ['categories' => $categories, 'cat_count' => $data->count()]);
    }

    public function load()
    {
        $this->amount+= 1;
    }
}


