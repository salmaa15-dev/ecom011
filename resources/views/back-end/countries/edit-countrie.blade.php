@extends('layouts.back-end')
@section('content')
	<form action="{{ route('admin.countries.update', ['country'=> $country->id]) }}" method="post">
		@csrf
		@method('PUT')
		@include('back-end.countries.form-countrie')
        <button type="submit" class="btn btn-warning report-btn float-right m-2"><i class="far fa-edit"></i> &nbsp; change Country !</button>  
	</form>
@endsection