@extends('layouts.back-end')



@section('content')

    <div class="container-fluid"> 

        @include('success.success')

        <div class="row">

            <div class="col-lg-4">

                <div class="card">

                    <div class="card-body mb-0">

                        <div class="row">                                            

                            <div class="col-8 align-self-center">

                                <div class="">

                                    <h4 class="mt-0 header-title">Customers</h4>

                                    <h2 class="mt-0 font-weight-bold text-dark">{{ $CUSTOMERS }}</h2> 

                                </div>

                            </div><!--end col-->

                            <div class="col-4 align-self-center">

                                <div class="icon-info text-right">

                                    <i class="mdi mdi-account-multiple bg-soft-info"></i>

                                </div>

                            </div><!--end col-->

                        </div><!--end row-->

                    </div><!--end card-body-->

                    <!--end card-body-->                                                                    

                </div><!--end card-->

            </div><!--end col-->

            <div class="col-lg-4">

                <div class="card">

                    <div class="card-body mb-0">

                        <div class="row">                                            

                            <div class="col-8 align-self-center">

                                <div class="">

                                    <h4 class="mt-0 header-title">Total Revenue</h4>

                                    <h2 class="mt-0 font-weight-bold f-30 text-dark"> {{ $TOTAL_REVENUE }} {{ $currency }}</h2> 

                                </div>

                            </div><!--end col-->

                            <div class="col-4 align-self-center">

                                <div class="icon-info text-right">

                                    <i class="fas fa-money-bill-wave text-success"></i>

                                </div>

                            </div><!--end col-->

                        </div><!--end row-->

                    </div><!--end card-body-->

                 <!--end card-body-->                                                                    

                </div><!--end card-->

            </div><!--end col-->

            <div class="col-lg-4">

                <div class="card">

                    <div class="card-body mb-0">

                        <div class="row">                                            

                            <div class="col-8 align-self-center">

                                <div class="">

                                    <h4 class="mt-0 header-title">Total Orders</h4>

                                    <h2 class="mt-0 font-weight-bold text-dark">{{ $TOTAL_ORDERS  }}</h2> 

                                </div>

                            </div><!--end col-->

                            <div class="col-4 align-self-center">

                                <div class="icon-info text-right">

                                    <i class="fas fa-shopping-cart bg-soft-danger"></i>

                                </div>

                            </div><!--end col-->

                        </div><!--end row-->

                    </div><!--end card-body-->

                    <!--end card-body-->                                                                    

                </div><!--end card-->

            </div><!--end col-->                           

        </div><!--end row-->

        <div class="row">

            <div class="col-md-6">

                   <div class="card">

                    <div class="card-body mb-0">

                        <div class="row">                                            

                            <div class="col-8 align-self-center">

                                <div class="">

                                    <h4 class="mt-0 header-title">Total Products</h4>

                                    <h2 class="mt-0 font-weight-bold text-dark">{{ $total_products }}</h2> 

                                </div>

                            </div><!--end col-->

                            <div class="col-4 align-self-center">

                                <div class="icon-info text-right">

                                    <i class="dripicons-basket bg-soft-dark"></i>

                                </div>

                            </div><!--end col-->

                        </div><!--end row-->

                    </div><!--end card-body-->

                   <!--end card-body-->                                                                    

                </div><!--end card-->

            </div>

            <div class="col-md-6">

                   <div class="card">

                    <div class="card-body mb-0">

                        <div class="row">                                            

                            <div class="col-8 align-self-center">

                                <div class="">

                                    <h4 class="mt-0 header-title">Total Packs</h4>

                                    <h2 class="mt-0 font-weight-bold text-dark">{{ $total_packs }}</h2> 

                                </div>

                            </div><!--end col-->

                            <div class="col-4 align-self-center">

                                <div class="icon-info text-right">

                                    <i class="fas fa-shopping-bag bg-soft-warning"></i>

                                </div>

                            </div><!--end col-->

                        </div><!--end row-->

                    </div><!--end card-body-->

                    <!--end card-body-->                                                                    

                </div><!--end card-->

            </div>

        </div>

        <div class="card">

            <strong class="m-4">Statistics of orders per MONTH/YEAR</strong>

            <div class="card-body">   

                <form action="{{ route('admin.dashboard') }}" method="GET">         

                    <div class="input-group">

                    <select name="year" class="form-control">

                        @foreach ($years as $year)

                                <option value="{{ $year }}">{{ $year }}</option>

                        @endforeach

                    </select>

                        <span class="input-group-append">

                            <button type="submit" class="btn btn-sm btn-info">YEARS</button>

                        </span> 

                    </div>

                </form>

                <br>

                @forelse ($statistic as $key => $month)

                    <dl class="row mb-0">

                        <dt class="col-sm-3"><small class="btn btn-dark btn-sm btn-round">{{$month->count()}}</small><strong class="mf-4">{{$key}}</strong></dt>

                        <dd class="col-sm-9">

                            <div class="progress mf-5 mt-3 hProgress">

                                <div class="progress-bar progress-bar-animated 

                                {{ $month->count() < 20 ? 'bg-danger': '' }}

                                {{ $month->count() >= 20 &&  $month->count() <= 50 ? 'bg-warning': '' }}

                                {{ $month->count() >= 50 &&  $month->count() <= 100 ? 'bg-success': '' }}" 

                                role="progressbar" 

                                style="width: {{$month->count()}}%;border-radius: 10px;" 

                                aria-valuenow="80" 

                                aria-valuemin="0" 

                                aria-valuemax="100">{{$month->count()}} orders</div>

                            </div>

                        </dd>

                    </dl>

                @empty 

                    <h5 class="text-center">NO RUSLT</h5>

                @endforelse



            </div><!--end card-body-->

        </div>

    </div>

@endsection