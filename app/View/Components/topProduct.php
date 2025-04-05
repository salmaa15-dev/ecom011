<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class topProduct extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $data = Category::select('id', 'name')->where('etat', true)
        ->with([
            'products' => fn ($q) => $q->select('id', 'categorie_id', 'slug', 'image', 'description')->take(1)    
        ])
        ->take(6)
        ->get();
        return view('components.top-product', ['dbdata' => $data]);
    }
}
