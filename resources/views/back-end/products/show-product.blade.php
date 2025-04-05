@extends('layouts.back-end')

@section('content')

<div class="card">

        <div class="m-2">

            <strong class="badge badge-pill badge-dark"> Date creation{{ Carbon\Carbon::parse($product->created_at)->toFormattedDateString() }}</strong>

            <strong class="badge badge-pill badge-info mr-2">Date the last update{{ Carbon\Carbon::parse($product->updated_at)->toFormattedDateString() }}</strong>

        </div>

    <div class="card-body">   

        <div class="row">

            <div class="col-lg-6 mt-5">

                <img src="{{ $product->LogoUrls }}" alt="{{ $product->slug }}" class="img-fluid">

            </div><!--end col-->

            <div class="col-lg-6 align-self-center">

                <div class="single-pro-detail">

                    <p class="mb-1">Category : {{ $product->category->name }}</p>

                    <div class="custom-border"></div>

                    <h3 class="pro-title">{{ $product->title }}</h3>

                    @if ($product->etat_sale && $product->sale > 0)

                        <h2 class="pro-price"> {{ $product->sale }} {{ $currency }}</h2> 

                        <strong class="float-right"> {!! $product->Percent !!} Off</strong>

                    <br>

                        <del class="text-danger float-right">{{ $product->price}} {{ $currency }}<i class="fas fa-times"></i></del>

                    @else

                        <h2 class="pro-price">{{ $product->price }} {{ $currency }}</h2> 

                    @endif

                    <div class="row">

                        <div class="col-md-6">

                            <form action="{{ route('admin.active.discount') }}" method="GET">

                                <div class="switchToggle p-0">

                                    <input type="hidden" name="id" value="{{ $product->id}}">

                                    <input type="checkbox" class="mt-1" id="etat_sale" name="etat_sale" {{ $product->etat_sale ? 'checked' : ''  }} onchange="this.form.submit();">

                                    <label for="etat_sale">Toggle</label> 

                                </div>

                            </form>

                        </div>

                        <div class="col-md-6">

                            <strong>reviews : ({{ $product->view }} <i class="far fa-eye text-primary"></i>)</strong>

                        </div>

                    </div>

                    <h6 class="text-muted font-13">Description :</h6> 

                    <p class="text-muted mb-2">{{ $product->description }}</p>                                                               

                </div>

                <a href="{{ route('admin.products.edit', ['product' => $product->slug]) }}" class="btn btn-soft-warning btn-block btn-round waves-effect waves-light"><i class="far fa-edit"></i> Edit</a>

                

                <form id="remove" action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="POST">

                    @csrf

                    @method('DELETE')

                    <button type="submit"  class="btn btn-soft-danger btn-block btn-round waves-effect waves-light mt-2" onclick="return confirm('Are you sure you want to remove this product {{ $product->title }}')">remove product</button>

                </form>
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary btn-block report-btn float-right mf-5 mt-5"><i aria-hidden="true" class="fas fa-fast-backward"></i> &nbsp; Back to products</a>

            </div><!--end col-->                                            

        </div><!--end row-->

    </div><!--end card-body-->

</div>

@endsection