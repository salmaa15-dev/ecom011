@extends('layouts.front-end')

@section('content')

<div class="pa-breadcrumb">

    <div class="container-fluid">

        <div class="pa-breadcrumb-box">

            <ul>

                <li><a href="{{ route('home') }}">Accueil</a></li>

                <li>Panier</li>

            </ul>

        </div>

    </div>

</div>

<!-- breadcrumb end -->

<!-- product single start -->

<div class="pa-product-single spacer-top">

    <div class="container">

        <livewire:cart-g/>

    </div>

</div>

@endsection

