@extends('layouts.back-end')

@section('content')

<div class="container-fluid"> 

    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title">Products</h4>

                    <div class="table-rep-plugin">

                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped mb-0 text-center">
                                <thead>
                                <tr>
                                    <th data-priority="6">Picture product</th>
                                    <th>Title</th>
                                    <th>Restart</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)

                                        <tr>

                                            <td>

                                              <img src="{{ $product->LogoUrls }}" width="55px">

                                            </td>

                                            <td>{{ $product->title_limit }}</td>
                                            
                                            <td>
                                                <a id="all" href="{{ route('admin.products.products_restart', ['id' => $product->id]) }}" class="btn-sm btn-info"><i class="fas fa-redo-alt"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                        <div class="d-flex">

                            <div class="mx-auto">

                            

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div> <!-- end col -->

    </div> <!-- end row -->        

</div>

@endsection