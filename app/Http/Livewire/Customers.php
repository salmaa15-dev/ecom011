<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;

class Customers extends Component
{
    public $type = [];

    public function change($id, $type) {
        Customer::whereId($id)->update([
            'properties'  => $type
        ]);
    }

    public function all()
    {
        $this->type = [];
    }
    
    public function render() {
        $customers = Customer::with(['orders' => fn($query) => $query->select('product_id', 'price', 'image')])
            ->orderby('id', 'DESC')
            ->when($this->type, fn($query) => $query->whereIn('properties->customer', $this->type))
            ->get();
        return view('livewire.customers', ['customers' => $customers]);
    }
}
