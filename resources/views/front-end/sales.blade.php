@extends('layouts.front-end')
@section('title', 'Sales')
@section('content')
    <!-- breadcrumb start -->
    <div class="pa-breadcrumb">
        <div class="container-fluid">
            <div class="pa-breadcrumb-box">
                <h1>Shop</h1>
                <ul>
                    <li><a href="{{ route('home') }}">home</a></li>
                    <li>sales</li>

                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <!-- product start -->
        <div class="pa-product-shop spacer-top">
        <div class="container">
            <div class="cards">
                @foreach($sales as $product)
                    <div class="pa-blog-box">
                        <a href="{{ route('details', ['slug' => $product->slug]) }}">
                            <img src="{{ $logo }}" data-original="{{ $product->LogoUrls }}" alt="{{ $product->title }}" class="lazy image-fluid"/>
                        </a>  
                        <div class="pa-blog-title">
                            <strong class="text-danger float-right">{!! $product->percent !!}</strong>
                            <strong><a  href="{{ route('details', ['slug' => $product->slug]) }}">{{ $product->title }}</a></strong>
                            <br>
                            @if ($product->etat_sale)
                                <strong>{{ int_to_decimal($product->sale) }} {{ $currency }}</strong>
                                &nbsp;
                                <del class="text-danger">{{ int_to_decimal($product->price) }} {{ $currency }}</del>
                            @else
                                <strong>{{ int_to_decimal($product->price) }} {{ $currency }}</strong>
                            @endif
                            <br>
                            <strong class="float-right">{{ $product->view }} <i class="fas fa-eye text-info"></i> views</strong>
                        </div>
                        <livewire:shop :product-id="$product->id"/>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- product end -->
@endsection