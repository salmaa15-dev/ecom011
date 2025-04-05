<?php

namespace App\Http\Controllers;

use App\Models\Category;

class BrandController extends Controller
{
    public function categorys()
    {
      return view('front-end.brands', [
        'categorys' => Category::select('name', 'slug', 'logo', 'description')->get()
      ]);
    }
}
