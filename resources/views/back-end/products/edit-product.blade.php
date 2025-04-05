@extends('layouts.back-end')

@section('dropify-css')
<link href="{{ asset('back-end/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')   
    <div class="card">
        <div class="card-body"> 
            <label><i class="fas fa-eye text-info"></i> views</label>  
        <input type="number" name="view" class="form-control @error('view') is-invalid @enderror mb-3" value="{{ old('view', $product->view ?? null) }}">
            @error('view')
                <span class="invalid-feedback" role="alert">
                    <strong class="h6">{{ $message }}</strong>
                </span>
            @enderror
        </div><!--end card-body-->
    </div>
    
   @include('back-end.products.form-product')

    <button type="submit" class="btn btn-warning report-btn float-right"><i class="far fa-edit"></i> &nbsp; Save</button>  
    <a href="{{ route('admin.products.show', ['product' => $product->slug]) }}" class="btn btn-soft-info waves-effect waves-light float-right mr-2"><i class="fas fa-info-circle"></i> Plus info..</a>
</form>
@endsection

@section('dropify-js')
<script src="{{ asset('back-end/assets/plugins/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('back-end/assets/pages/jquery.form-upload.init.js') }}"></script>
@endsection