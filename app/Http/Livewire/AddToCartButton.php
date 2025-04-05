<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\View\View;

class AddToCartButton extends Component
{

    public $qty = 1;

    public $productId;

    public $cart = [];

    public $currentQyt = 0;

    public function mount(int $productId): void
    {
        $this->productId = $productId;
    }

    public function hydrate(): void
    {
        $this->currentQyt = cart()->getCurrentQty($this->productId);
    }

    public function plus(): void
    {
        $this->qty++;
    }

    public function sub(): void
    {
        if($this->qty <= 1) {
            return;
        }
        $this->qty--;
    }
    
    public function add(): void
    {
      try {
        $qty = $this->currentQyt + (int) $this->qty;
       
        if($qty < 1 || $qty >= 300) {
            return;
        }
         cart()->add($this->productId, $qty);
         $this->qty = 1;
         $this->emit('cartUpdated');
      } catch (\Exception $e) {
          //throw $th;
      }
    }

    public function render(): View
    {
        return view('livewire.add-to-cart-button');
    }
}
