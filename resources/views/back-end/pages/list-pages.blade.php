@extends('layouts.back-end')

@section('content')

{{-- <div class="card">

    <div class="card-body">        

        <h4 class="mt-0 header-title">categorys</h4>

        <p class="text-muted mb-4">

        </p>

        @foreach ($categorys as $category)

            <div class="toast fade show" style="max-width: 100%" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">

                <div class="toast-header">

                    <img src="{{ $category->LogoUrls }}" alt="{{ $category->name}}" class="thumb-xs rounded-circle">

                    <strong class="mr-auto">{{ $category->name }}</strong>

                    <a href="{{ route('admin.categorys.edit', ['category' => $category->id]) }}" class="mf-3"><i class="far fa-edit text-warning"></i></a>

                    &nbsp;

                    <form action="{{ route('admin.categorys.destroy', ['category' => $category->id]) }}" method="post">

                        @csrf

                        @method('DELETE')

                        <button type="submit" class="btn btn-outline mt-1"><i class="ti-trash text-danger"></i></button>

                    </form>

                </div>

                <div class="toast-body">

                    {{ $category->description }}

                    <br>

                    <small class="float-right badge badge-pill badge-dark mb-3">{{ Carbon\Carbon::parse($category->created_at)->toFormattedDateString() }}</small>

                </div>

            </div> <!--end toast-->

        @endforeach

    </div><!--end card-body-->

</div> --}}


<div class="card">
    <div class="card-body">

        <h4 class="mt-0 header-title">List Pages for your WebSite</h4>

        <div class="table-responsive">
            <table class="table table-striped mb-0">
                <tbody>       
                    @foreach ($pages as $page)
                    <tr>
                        <td class="border-0">
                            <a href="{{ route('aprops',['page' => $page->slug]) }}">
                                <i class="fab fa-internet-explorer"></i>
                                {{ URL::to('/') }}/{{ $page->slug }}
                            </a>
                        </td>
                        <td class="border-0 text-center">
                            <small class="badge badge-pill badge-dark">{{ Carbon\Carbon::parse($page->created_at)->toFormattedDateString() }}
                            </small></td>
                        <td class="float-right border-0">                                                       
                            <a href="{{ route('admin.pages.show', ['page' => $page->slug]) }}"  class="btn btn-sm btn-info d-inline-block"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admin.pages.edit', ['page' => $page->id]) }}"  class="btn btn-sm btn-warning d-inline-block"><i class="far fa-edit"></i></a>
                            <form action="{{ route('admin.pages.destroy', ['page' => $page->id]) }}" method="post" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table><!--end /table-->
        </div><!--end /tableresponsive-->
    </div><!--end card-body-->
</div>

@endsection