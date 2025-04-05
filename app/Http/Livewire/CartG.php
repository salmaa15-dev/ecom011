<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class CartG extends Component
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
        if(empty($this->cart)) {
            return new Collection;
        }
        
        return Product::whereIn('id', array_keys($this->cart))
            ->get()
            ->map(function(Product $product){
                return (object) [
                    'id'    =>     $product->id,
                    'description' =>  $product->description,
                    'image' =>  $product->logo_urls,
                    'slug'  =>  $product->slug,
                    'price' =>  $product->price_net,
                    'qty'   =>  $qty = $this->cart[$product->id],
                    'total' => $product->price_net * $qty

                ];
            });
    }

    public function remove(int $id): void
    {
        try{
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

    public function increase(int $id): void
    {
        try {
           $qty = $this->cart[$id];
            if($qty >= 300) {
                $this->remove($id);
            } else {
                cart()->add($id, $this->cart[$id] + 1);
                $this->update();
            }
        } catch (\Exception $e) {
            //throw $th;
        }
    }

    public function decrease(int $id): void
    {
        try {
            $qty = ($this->cart[$id] - 1);
            if($qty < 1) {
                $this->remove($id);
            } else {
                cart()->add($id, $qty);
                $this->update();
            }
        } catch (\Exception $e) {
            //throw $th;
        }
    }

    public function remove_data()
    {
        cart()->drop_cart();
        $this->update();
    }

    public function render(): View
    {
        return view('livewire.cart-g');
    }
}
