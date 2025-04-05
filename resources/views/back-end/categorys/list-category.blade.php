@extends('layouts.back-end')
@section('content')
<div class="card">
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
</div>
@endsection