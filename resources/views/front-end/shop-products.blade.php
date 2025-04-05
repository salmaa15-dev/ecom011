@extends('layouts.front-end')
@section('title', $product->title.', Price '.$product->price_net.' '.$currency)
@section('image', $product->LogoUrls)
@section('description', $product->description)
@section('content')
<div class="pa-breadcrumb">
    <div class="container-fluid">
        <div class="pa-breadcrumb-box">
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>Shop {{ $product->title }}</li>
            </ul>
        </div>
    </div>
</div>

<!-- breadcrumb end -->
<!-- product single start -->
<div class="pa-product-single spacer-top">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="text-center">
                            <img src="{{ $logo }}" data-original="{{ $product->LogoUrls }}" alt="{{ $product->title }}" class="lazy image-fluid-product"/>
                            {{-- <div class="preview-pic tab-content">
                                <div class="tab-pane active"><img id="authorImage" style="height: 350px; width: 100%; object-fit: contain;" src="https://argan-cosemitc.com/public/storage/packs-picture/HaT6JEaxZZexGJbCImWXbYKKY22wZIYtwDROkD5u.png"/></div>
                            </div>
                            <ul class="preview-thumbnail nav nav-tabs">
                                <li class="active"><img class="clickable-img" src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" /></li>
                                <li><img class="clickable-img" src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" /></li>
                            </ul> --}}
                        </div>
                    </div>
            
                    <div class="col-sm-5">
                        <div class="pa-prod-content">
                            <a href="#" class="title-pack">{{ $product->title }}</a>
                            @if ($product->etat_sale)
                                <p class="text-danger">
                                    <span class="pa-prod-price">Price: {{ int_to_decimal($product->sale) }} {{ $currency }} </span>
                                    <del>{{ int_to_decimal($product->price) }} {{ $currency }}</del> 
                                    <span class="pa-prod-price text-danger" style="font-size: 15px">{!! $product->percent !!}</span>
                                </p>
                                @else
                                <p class="pa-prod-price">Price:<span> {{ int_to_decimal($product->price)}} {{ $currency }}</span></p>
                            @endif
                            @if ($product->category)
                                <a href="#" class="pa-prod-category"><span>Category:</span> {{ $product->category->name }}</a>                                
                            @endif
                            <p class="pa-rating">
                                {{ $product->view }} <i class="fas fa-eye text-info"></i> views
                            </p>
                            
                            <livewire:add-to-cart-button :product-id="$product->id"/>
                            <h4>Description</h4>
                            <div class="pa-prod-content">
                                <p class="text-muted">{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                @include('front-end.partials.categorys')
            </div>
        </div>
         <!-- product start -->
         <div class="pa-related-product">
            <div class="container">
                <div class="pa-heading">
                    @if($Related_products->count())
                        <h3>Produits connexes</h3>
                    @endif
                </div>
                <div class="row">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($Related_products as $item)
                                <div class="swiper-slide">
                                    <div class="pa-product-box" onclick="location.href='{{ route('details', ['slug' => $item->slug]) }}'">
                                        <div class="pa-product-img">
                                            <a href="{{ route('details', ['slug' => $item->slug]) }}">
                                                <img src="{{ $logo }}" data-original="{{ $item->LogoUrls }}" alt="{{$item->title}}" class="lazy img-fluid"/>
                                            </a>
                                        </div>
                                        <div class="pa-product-content">
                                            <h4><a href="{{ route('details', ['slug' => $item->slug]) }}">{{ $item->title }}</a></h4>
                                            <p class="pa-product-rating">
                                                <strong class="text-dark">{{ $item->view }}</strong> <i class="fas fa-eye text-dark"></i> <strong>views</strong>
                                            </p>
                                            @if ($item->etat_sale)
                                                <p class="pa-prod-price"><span><del>{{ int_to_decimal($item->price) }} {{ $currency }}</del></span>{{ int_to_decimal($item->sale) }} {{ $currency }}</p><span class="text-danger">{!! $item->percent !!}</span>
                                            @else
                                                <p class="pa-prod-price"><span> {{ int_to_decimal($item->price)}} {{ $currency }}</span></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product end -->
    </div>
</div>
<script>
    // JavaScript to change the author's image when any of the clickable images are clicked
    const clickableImages = document.querySelectorAll('.clickable-img'); // Get all images with class 'clickable-img'
    const authorImage = document.getElementById('authorImage'); // Get the author's main image

    clickableImages.forEach(img => {
        img.addEventListener('click', function() {
            // Set the src of the author's image to the src of the clicked image
            authorImage.src = this.src;
        });
    });
</script>
@endsection