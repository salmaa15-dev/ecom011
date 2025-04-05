<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class CartButton extends Component
{
   public $qty = 0;

   protected $listeners = ['cartUpdated' => 'update'];

   public function mount(): void
   {
       try{
        $this->update();
       } catch (\Exception $e) {
              //throw $th;
          }
   }

   public function update(): void
   {
       try {
        $this->qty = array_sum(cart()->all());
        
       } catch (\Exception $e) {
          //throw $th;
      }
   }

   public function render(): View
   {
      return view('livewire.cart-button');
   }
}
