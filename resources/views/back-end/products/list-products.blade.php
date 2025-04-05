@extends('layouts.back-end')

@section('content')

<div class="container-fluid"> 

    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title">Products</h4>

                    <div class="table-rep-plugin">

                        @include('success.success')

                        <div class="table-responsive mb-0" data-pattern="priority-columns">

                            <table id="tech-companies-1" class="table table-striped mb-0 text-center">

                                <thead>

                                <tr>

                                    <th data-priority="6">Details</th>

                                    <th>Picture</th>

                                    <th data-priority="1">Title</th>

                                    <th data-priority="3">Active reduction</th>

                                    <th data-priority="3">Price</th>

                                    <th data-priority="6">Category</th>

                                    <th data-priority="6">Created</th>

                                </tr>

                                </thead>

                                <tbody>

                                    @foreach ($products as $product)

                                        <tr>

                                            <td>

                                              <a href="{{ route('admin.products.show', ['product' => $product->slug]) }}"><i class="fas fa-info-circle f-30 text-info"></i></a>

                                            </td>

                                            <th>

                                              <img src="{{ $product->LogoUrls }}" width="55px">

                                            </th>

                                            <td>{{ $product->title_limit }}</td>

                                            <td>

                                                <form action="{{ route('admin.active.discount') }}" method="GET">

                                                    <div class="switchToggle p-0">

                                                        <input type="hidden" name="id" value="{{ $product->id}}">

                                                        <input type="checkbox" class="mt-1" id="{{ $product->id }}" name="etat_sale" {{ $product->etat_sale ? 'checked' : ''  }} onchange="this.form.submit();">

                                                        <label for="{{ $product->id }}">Toggle</label> 

                                                        @if ($product->etat_sale)

                                                            <strong class="text-danger">{!! $product->percent !!}</strong>

                                                        @endif

                                                    </div>

                                                </form>

                                            </td>

                                            <td class="p-0">

                                              @if ($product->etat_sale && $product->sale >0)

                                                 <strong class="text-success">{{ $product->sale}} {{ $currency }} <i class="fas fa-check"></i></strong>

                                                <br>

                                                 <del class="text-danger">{{ $product->price}} {{ $currency }}<i class="fas fa-times"></i></del>

                                                @else

                                                <strong>{{ $product->price}} {{ $currency }}</strong>

                                              @endif

                                            </td>

                                            <td>{{ $product->category->name }}</td>

                                            <td>

												<small class="badge badge-pill badge-dark">{{ Carbon\Carbon::parse($product->created_at)->toFormattedDateString() }}</small>

                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                        <div class="d-flex">

                            <div class="mx-auto">

                                {{$products->links("pagination::bootstrap-4")}}

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div> <!-- end col -->

    </div> <!-- end row -->        

</div>

@endsection