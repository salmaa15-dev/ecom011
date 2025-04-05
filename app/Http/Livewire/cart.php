<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class cart extends Component
{
    public $cart = [];

    public $products = [];

    public $total = 0.00;

    protected $listeners = [
        'cartUpdated' => 'hydrate'
    ];

    public function hydrate(): void
    {
        $this->cart = cart()->all();

        $this->products = tap(
            $this->products(),
            fn(Collection $products) => $this->total = (int_to_decimal($products->sum('total')))
        )->toArray();
    }

    public function mount(): void
    {
        $this->hydrate();
    }

    public function products(): Collection
    {
        return Product::whereIn('id', array_keys($this->cart))
            ->get()
            ->map(function(Product $product){
                return (object) [
                    'id'    => $product->id,
                    'title'  =>  $product->title,
                    'description'  =>  $product->description,
                    'slug'  =>  $product->slug,
                    'price' =>  $product->price_net,
                    'qty'   =>  $qty = $this->cart[$product->id],
                    'total' => $product->price_net * $qty

                ];
            });
    }

    public function remove(int $id): void
    {
        try {
            cart()->remove($id);
            $this->update();
        
        } catch (\Exception $e) {
              //throw $th;
          }
    }

    private function update(): void
    {
        $this->emit('cartUpdated');
    }

    public function render(): View
    {
        return view('livewire.cart');
    }
}
