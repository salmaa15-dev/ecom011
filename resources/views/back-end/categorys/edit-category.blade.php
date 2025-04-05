@extends('layouts.back-end')
@section('dropify-css')
<link href="{{ asset('back-end/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<h4 class="mt-0 header-title text-white">change category</h4>
	<form action="{{ route('admin.categorys.update', ['category'=> $category->id]) }}" method="post" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		@include('back-end.categorys.form-category')
        <button type="submit" class="btn btn-warning report-btn float-right"><i class="far fa-edit"></i> &nbsp; Save</button>  

	</form>
@endsection

@section('dropify-js')
<script src="{{ asset('back-end/assets/plugins/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('back-end/assets/pages/jquery.form-upload.init.js') }}"></script>
@endsection