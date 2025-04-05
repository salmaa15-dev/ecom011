@extends('layouts.front-end')
@section('title', 'Packs')
@section('content')
    <!-- breadcrumb start -->
    <div class="pa-breadcrumb">
        <div class="container-fluid">
            <div class="pa-breadcrumb-box">
                <h1>Shop</h1>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Offres</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <!-- product start -->
    <div class="pa-product-shop spacer-top spacer-bottom">
        <div class="container">
            <div class="row">
                @forelse($packs as $pack)
                    <div class="col-lg-4">
                        <div class="pa-blog-box">
                            <a href="{{ route('details', ['slug' => $pack->slug]) }}">
                                <img src="{{ $logo}}" data-original="{{ $pack->LogoUrls }}" alt="{{ $pack->title }}" class="lazy image-fluid">
                            </a>  
                            <div class="pa-blog-title">
                                <strong class="text-danger float-right">{!! $pack->percent !!}</strong>
                                <h6><a href="{{ route('details', ['slug' => $pack->slug]) }}">{{ $pack->title }}</a></h6>
                                    <strong>{{ int_to_decimal($pack->price) }} {{ $currency}}</strong>
                                    <strong class="float-right">{{ $pack->view }} <i class="fas fa-eye text-info"></i> views</strong>
                            </div>
                            <livewire:shop :product-id="$pack->id"/>
                        </div>
                    </div>
                    @empty
                        <div class="col-lg-12 text-center">
                            <a href="javascript:void(0);" class="f-25">There's no packs yet</a>
                        </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- product end -->
@endsection