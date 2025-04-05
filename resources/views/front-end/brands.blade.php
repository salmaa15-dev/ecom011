@extends('layouts.front-end')
@section('title', 'Brands')
@section('content')
<div class="pa-medicine mt-3">
    <div class="container">
        <div class="cards mb-2">
            @foreach ($categorys as $category)
                <div class="pa-medicine-box"  onclick="location.href='{{ route('productByCategory', ['productBycategory' => $category->slug]) }}'">
                    <div class="pa-medi-icon">
                        <a href="{{ route('productByCategory', ['productBycategory' => $category->slug]) }}">
                            <img src="{{ $logo }}" data-original="{{ $category->logo_urls }}" alt="{{ $category->name }}" class="lazy img-fluid">
                         </a>
                    </div>
                    <h2><a href="{{ route('productByCategory', ['productBycategory' => $category->slug]) }}">{{ $category->name }}</a></h2>  
                    <p class="f-12">{{ $category->description }}</p>     
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection