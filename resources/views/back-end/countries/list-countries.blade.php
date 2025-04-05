@extends('layouts.back-end')
@section('content')
<div class="container-fluid"> 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title text-center">Countries</h4>
                    <div class="table-rep-plugin">
                        @include('success.success')
                        <form action="{{ route('admin.countries.index') }}" method="GET" class="mb-2">
                            <div class="input-group">
                                <input type="text" list="Nationalite" class="form-control" name="country" id="nationalite" value="{{ $country }}">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-sm btn-info">Filter..</button>
                                </span> 
                            </div>
                        </form>  
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped mb-0 text-center">
                                <tbody>
                                    @forelse ($countries as $country)
                                        <tr>
                                            <td>
                                                {{ $country->country }}
                                            </td>
                                        
                                            <td>
                                                <a href="{{ route('admin.countries.edit', ['country' => $country->id]) }}" class="mf-3"><i class="far fa-edit text-warning"></i></a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.countries.destroy', ['country' => $country->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline mt-1"><i class="ti-trash text-danger"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <small class="badge badge-pill badge-dark">{{ Carbon\Carbon::parse($country->created_at)->toFormattedDateString() }}</small>
                                            </td>
                                            <td class="float-right">
                                                <form action="{{ route('admin.change') }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="switchToggle p-0">
                                                        <input type="hidden" name="id" value="{{ $country->id}}">
                                                        <input type="checkbox" class="mt-1" id="{{ $country->id }}" name="active" {{ $country->active ? 'checked' : ''  }} onchange="this.form.submit();">
                                                        <label style="margin-top: 10px" for="{{ $country->id }}">Toggle</label>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <p class="text-center"><a href="{{ route('admin.countries.index') }}">NO RUSLT SPECIFIED BUT YOU CAN TO SEE ALL CLICK RUSLT</a></p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex">
                            <div class="mx-auto">
                                {{$countries->links("pagination::bootstrap-4")}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->        
</div>
@endsection