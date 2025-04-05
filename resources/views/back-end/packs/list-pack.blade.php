@extends('layouts.back-end')

@section('content')

<div class="container-fluid"> 

    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title">packs</h4>

                    <div class="table-rep-plugin">

                        @include('success.success')

                        <div class="table-responsive mb-0" data-pattern="priority-columns">

                            <table id="tech-companies-1 text-center" class="table table-striped mb-0">

                                <thead>

                                <tr>

                                    <th data-priority="1">Details</th>

                                    <th>Picture</th>

                                    <th data-priority="1">Title</th>

                                    <th data-priority="3">Price</th>

                                    <th data-priority="6">Created</th>

                                    <th data-priority="6">available pack</th>

                                </tr>

                                </thead>

                                <tbody>

                                    @foreach ($packs as $pack)

                                        <tr>

                                            <td>

                                                <a href="{{ route('admin.packs.show', ['pack' => $pack->slug]) }}"><i class="fas fa-info-circle f-30 text-info"></i></a>

                                            </td>

                                            <th>

                                                <img src="{{ $pack->LogoUrls }}" width="55px">

                                            </th>

                                            <td>{{ $pack->TitleLimit }}</td>

                                            <td class="p-0">

                                                 <strong class="text-success">{{ $pack->price}} {{$currency}} <i class="fas fa-check"></i></strong>

                                            </td>

                                            <td>

                                                <small class="badge badge-pill badge-dark">{{ Carbon\Carbon::parse($pack->created_at)->toFormattedDateString() }}</small>

                                            </td>

                                            <td>

                                                <form action="{{ route('admin.active.available_pack') }}" method="GET">

                                                    <div class="switchToggle p-0">

                                                        <input type="hidden" name="id" value="{{ $pack->id}}">

                                                        <input type="checkbox" class="mt-1" id="{{ $pack->id }}" name="available" {{ $pack->available_pack ? 'checked' : ''  }} onchange="this.form.submit();">

                                                        <label for="{{ $pack->id }}">Toggle</label> 

                                                    </div>

                                                </form>

                                            </td>

                                        </tr>

                                    @endforeach

                               

                                </tbody>

                            </table>

                        </div>

                        <div class="d-flex">

                            <div class="mx-auto">

                                {{$packs->links("pagination::bootstrap-4")}}

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div> <!-- end col -->

    </div> <!-- end row -->        

</div>

@endsection