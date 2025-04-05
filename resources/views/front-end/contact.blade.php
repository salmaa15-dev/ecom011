@extends('layouts.front-end')

@section('title', 'Contact us')

@section('content')

      <!-- breadcrumb start -->

    <div class="pa-breadcrumb">

        <div class="container-fluid">

            <div class="pa-breadcrumb-box">

                <h1>CONTACTEZ-NOUS</h1>

                <ul>

                    <li><a href="{{ route('home') }}">Accueil</a></li>

                    <li>CONTACTEZ-NOUS</li>

                </ul>

            </div>

        </div>

    </div>

    <!-- breadcrumb end -->



    <!-- contact detail start -->

    <div class="pa-contact-detail">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6">

                    <div class="pa-contact-box">

                        <h4>Address</h4>

                        <p>{{ $adresse }}</p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="pa-contact-box">

                        <h4>Contact us</h4>

                        <p>{{ $phone  }}</p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="pa-contact-box">

                        <h4>Email</h4>

                        <p>{{ $email }}</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- contact detail end -->



    <!-- contact start -->

    <div class="pa-contact">

        <div class="container">

            <div class="row">

                @if($map)

                    <div class="col-md-7">

                        <div class="pa-contact-map">

                            <iframe src="{{ $map }}" aria-hidden="false" tabindex="0"></iframe>

                        </div>

                    </div>

                @endif

                <div class="col-md-{{ $map ? 5 : 12 }}">

                    <div class="{{ $map ? 'pa-contact-form' : '' }}">

                        @include('success.success')

                        <form action="{{ route('create') }}" method="POST">

                            @csrf

                            <input type="text" placeholder="Entrez votre nom" name="name" class="mt-2 form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"/>

                            @error('name')

                                <span class="invalid-feedback mt-1" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror

                            <input type="text"  placeholder="Entrez votre e-mail" name="email" class="mt-2 form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"/>

                            @error('email')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror

                            <input type="text" placeholder="Entrez votre sujet" name="subject" class="mt-2 form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}"/>

                            @error('subject')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror

                            <textarea placeholder="Message ici" rows="10" name="message" class="mt-2 form-control @error('email') is-invalid @enderror">{{ old('message') }}</textarea>

                            @error('message')

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6">{{ $message }}</strong>

                                </span>

                            @enderror

                            <button type="submit" class="pa-btn submitForm mt-2 {{ !$map ? 'btn-block': '' }} ">Envoyer</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- contact end -->

@endsection