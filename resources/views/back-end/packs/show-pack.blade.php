@extends('layouts.back-end')



@section('content')

<div class="card">

    <div class="m-2">

        <strong class="badge badge-pill badge-dark"> Date creation{{ Carbon\Carbon::parse($pack->created_at)->toFormattedDateString() }}</strong>

        <strong class="badge badge-pill badge-info mr-2">Date the last update{{ Carbon\Carbon::parse($pack->updated_at)->toFormattedDateString() }}</strong>

    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-lg-6 mt-5">

                <img src="{{ $pack->LogoUrls }}" alt="{{ $pack->slug }}" class="img-fluid">

            </div><!--end col-->

            <div class="col-lg-6 align-self-center">

                <div class="single-pro-detail">

                    <h3 class="pro-title">{{ $pack->title }}</h3>

                    <h2 class="pro-price">{{ int_to_decimal($pack->price)}} {{ $currency }}</h2>



                    <div class="row">

                        <div class="col-sm-6">

                            @if ($pack->available_pack)

                                <label class="text-success"><i class="fas fa-check"></i> Available</label>

                            @else

                                <label class="text-danger"><i class="fas fa-times"></i> Unavailable</label>

                            @endif

                            &nbsp;

                            <form action="{{ route('admin.active.available_pack') }}" method="GET">

                                <div class="switchToggle p-0">

                                    <input type="hidden" name="id" value="{{ $pack->id}}">

                                    <input type="checkbox" class="mt-1" id="{{ $pack->id }}" name="available" {{ $pack->available_pack ? 'checked' : ''  }} onchange="this.form.submit();">

                                    <label for="{{ $pack->id }}">Toggle</label> 

                                </div>

                            </form>

                        </div>

                        <div class="col-sm-6">

                            <strong>reviews : ({{ $pack->view }} <i class="far fa-eye text-primary"></i>)</strong>

                        </div>

                    </div>

                    <h6 class="text-muted font-13">Description :</h6> 

                    <p class="text-muted mb-2">{{ $pack->description }}</p>                                                               

                </div>

                <a href="{{ route('admin.packs.edit', ['pack' => $pack->slug]) }}" class="btn btn-soft-warning  btn-block  btn-round waves-effect waves-light"><i class="far fa-edit"></i> Edit</a>



                <form id="remove" action="{{ route('admin.packs.destroy', ['pack' => $pack->id]) }}" method="POST">

                    @csrf

                    @method('DELETE')

                    <button type="submit"  class="btn btn-soft-danger btn-block btn-round waves-effect waves-light mt-2" onclick="return confirm('Are you sure you want to remove this pack {{ $pack->title }}')">remove pack</button>

                </form>

            </div><!--end col-->                                            

        </div><!--end row-->

    </div><!--end card-body-->

</div>

@endsection