@extends('layouts.back-end')



@section('content')

<div class="card">

    <div class="card-body">

        

        <h4 class="mt-0 header-title text-right">

            <span class="badge badge-pill badge-warning">Total orders &nbsp;{{ $customer->orders->count() }}</span>

            <span class="badge badge-pill badge-info">Full name &nbsp;{{ $customer->name }}</span>

            <span class="badge badge-pill badge-dark">Order Date &nbsp;{{ $customer->created_at->diffForHumans() }}</span>

            <span class="badge badge-pill badge-success font-weight-bold">Total orders: ${{ int_to_decimal($customer->total_order) }} <i class="mdi mdi-cart-outline"></i></span>

            <br>

        </h4>



        <div class="accordion" id="accordionExample">

            @foreach ($customer->orders as $key => $order)

                <div class="card border mb-0 shadow-none">

                    <div class="card-header p-0" id="headingOne">

                        <h5 class="my-1">

                            <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                {{ $order->title }} <small class="badge badge-pill badge-dark">Order #{{ $key + 1 }}</small>

                            </button>

                        </h5>

                    </div>

                    <div id="collapseOne" class="collapse {{ $key == 0 ? 'show': '' }}" aria-labelledby="headingOne" data-parent="#accordionExample">

                        <div class="card-body">

                            <table id="tech-companies-1" class="mb-2 text-center">

                                <tbody>

                                    <tr>

                                        <td>

                                            <img src="{{ $order->logo_urls }}" alt="image" class="rounded-circle thumb-md mr-2">

                                        </td>

                                        <td>

                                            <span class="badge badge-pill badge-dark mr-2">Quantity {{ $order->pivot->qty }}</span>

                                        </td>

                                        <td>

                                            <span class="badge badge-pill badge-danger">Price {{ int_to_decimal($order->price_net) }} Euro</span>

                                        </td>

                                        <td>

                                           @if ($order->pack)

                                                <a href="{{ route('admin.packs.show', ['pack' => $order->slug]) }}"><i class="fas fa-info-circle f-30 text-info mf-4"></i></a> 

                                           @else 

                                                <a href="{{ route('admin.products.show', ['product' => $order->slug]) }}"><i class="fas fa-info-circle f-30 text-info mf-4"></i></a>

                                           @endif

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                            <strong>Description:</strong>  

                            <p class="text-mutied">

                                {{ $order->description }}

                            </p>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>
    <a  href="{{ url()->previous() }}" style="text-align: center; margin:5px">
        <i aria-hidden="true" class="fas fa-fast-backward"></i>
        <span>Back</span>
    </a>
</div>  

@endsection