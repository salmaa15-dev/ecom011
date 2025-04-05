<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\View\View;

class Shop extends Component
{

    public $qty = 1;

    public $productId;

    public $currentQyt = 0;

    public function mount(int $productId): void
    {
        $this->productId = $productId;
    }

    public function hydrate(): void
    {
        $this->currentQyt = cart()->getCurrentQty($this->productId);
    }

    public function shop(): void
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
        return view('livewire.shop');
    }
}
