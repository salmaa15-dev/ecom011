@extends('layouts.front-end')



@section('content')

     <!-- breadcrumb start -->

     <div class="pa-breadcrumb">

        <div class="container-fluid">

            <div class="pa-breadcrumb-box">

                <h1>Paniers de caisse</h1>

                <ul>

                    <li><a href="{{ route('home') }}">Accueil</a></li>

                    <li>paniers de caisse</li>

                </ul>

            </div>

        </div>

    </div>

    <!-- breadcrumb end -->
    <!-- checkout start -->

    <div class="pa-checkout spacer-bottom">

        <div class="container">

            @include('success.success')

            @include('errors.error') 

            

            <form method="POST">

                @csrf

                <div class="row">

                    <div class="col-lg-5">

                        <div class="pa-bill-form">

                            <label class="pa-bill-title">Détails de la facturation</label>

                            <input type="text" name="name" class="mb-2 @error('name') is-invalid @enderror" required value="{{ old('name') }}" placeholder="full name."/>

                            @error('name')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror

                            <input type="tel" name="mobile" class="mb-2 @error('mobile') is-invalid @enderror" required value="{{ old('mobile') }}" placeholder="phone"/>

                            @error('mobile')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror

                            <input type="email" name="email" class="mb-2 @error('email') is-invalid @enderror" required value="{{ old('email') }}" placeholder="email"/>

                            @error('email')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror

                            <textarea type="text" name="address" class="textareacheckout mb-2 text-center @error('address') is-invalid @enderror" rows="5" required placeholder="Adresse de livraison">{{ old('address') }}</textarea>

                            @error('address')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror

                            <input type="text" name="country" list="Nationalite" class="mb-2 @error('country') is-invalid @enderror" required value="{{ old('country') }}" placeholder="country" id="nationalite">

                            @error('country')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror

                                <datalist id="Nationalite">

                                    @foreach ($countries as $item)

                                        <option value="{{ $item->country }}">

                                    @endforeach

                                </datalist>
                            
                            <input type="state" name="state" class="mb-2 @error('state') is-invalid @enderror" required value="{{ old('state') }}" placeholder="state"/>

                            @error('state')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror
                        
                            <input type="City" name="city" class="mb-2 @error('city') is-invalid @enderror" required value="{{ old('city') }}" placeholder="city"/>

                            @error('city')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror
                        
                            <input type="zip_code" name="zip_code" class="mb-2 @error('zip_code') is-invalid @enderror" required value="{{ old('zip_code') }}" placeholder="zip code"/>

                            @error('zip_code')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror

                        </div>

                    </div>

                    <div class="col-lg-7">

                        <livewire:cart/>

                        <div class="pa-place-order-btn text-center">

                            <a href="{{ route('cart') }}" class="btn btn-link m-2">Continuer vos achats</a>
                           
                            <button type="submit"  formaction="{{ route('payment_with_transfer') }}"  class="pa-btn submitForm m-2"> Confirmer la commande <i class="fas fa-money-bill-wave"></i> </button>
                           
                            <button type="submit"  formaction="{{ route('payment_with_paypal') }}" class="pa-btn-pay submitForm m-2"> pay with Paypal <i class="fas fa-money-bill-wave"></i> </button>

                        </div>
                            <div class="pa-contact-map">
                                <iframe src="{{ $map }}" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                    </div>

                </div>

            </form>

        </div>

    </div>

    <!-- checkout end -->

@endsection