@extends('layouts.back-end')

@section('content')

<div class="card col-lg-6 mx-auto">

    <div class="card-body">        

        <h4 class="mt-0 header-title">Redaction Product</h4>

        <p class="text-muted mb-4">

        </p>

        {{-- start error message --}}

        @include('errors.error')

        {{-- end error message --}}



        <div class="toast fade show" style="max-width: 100%" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">

            <div class="toast-header">

                <img src="{{ $product->LogoUrls }}" alt="{{ $product->title}}" class="thumb-xs rounded-circle">

                <strong class="mr-auto">{{ $product->title }}</strong>

                <del class="text-danger text-right f-25 mb-0 font-weight-bold">{{ $product->price }} {{ $currency }}<i class="fas fa-times"></i></del>

            </div>

            <div class="toast-body">

                <form action="{{ route('admin.discount') }}" method="POST">

                @csrf

                @method('PATCH')

                <input type="hidden" name="id" value="{{ $product->id }}">

                    <div class="input-group">

                        <div class="input-group-prepend">

                            <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>

                        </div>

                        <input type="text" name="sale" class="form-control @error('sale') is-invalid @enderror" placeholder="Please enter a new sale ...">

                        @error('sale')

                            <span class="invalid-feedback" role="alert">

                                <strong class="h6">{{ $message }}</strong>

                            </span>

                        @enderror

                    </div>

                    <div class="float-right m-2">

                        <a href="{{ route('admin.products.index') }}" class="btn btn-danger btn-sm btn-round waves-effect waves-light"><i class="fas fa-times"></i> Cancel</a>

                        <button type="submit" class="btn btn-success btn-sm btn-round waves-effect waves-light"><i class="mdi mdi-check-all mr-2"></i>Save sale</button>

                    </div>

                </form>

            </div>

        </div> <!--end toast-->

    </div><!--end card-body-->

</div>

@endsection