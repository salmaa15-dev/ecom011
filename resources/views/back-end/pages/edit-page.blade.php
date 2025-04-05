@extends('layouts.back-end')
@section('content')
<h4 class="mt-0 header-title text-white">change category</h4>

	<form action="{{ route('admin.pages.update', ['page'=> $page->id]) }}" method="post">
		@csrf
		@method('PUT')
		@include('back-end.pages.form-page')
        <button type="submit" class="btn btn-warning report-btn float-right"><i class="far fa-edit"></i> &nbsp; Change Page</button>  
	</form>
@endsection