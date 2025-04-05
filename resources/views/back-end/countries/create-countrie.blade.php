@extends('layouts.back-end')
@section('content')
	<form action="{{ route('admin.countries.store') }}" method="post">
		@csrf
		@include('back-end.countries.form-countrie')
        <button type="submit" class="btn btn-warning report-btn float-right m-2"><i class="far fa-edit"></i> &nbsp; Create Country !</button>  
	</form>
@endsection