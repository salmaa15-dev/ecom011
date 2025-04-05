@extends('layouts.back-end')

@section('content')
    <h4 class="mt-0 header-title text-white">Create a new category</h4>
    <form action="{{ route('admin.pages.store') }}" method="POST">
        @csrf
        @include('back-end.pages.form-page')
        <button type="submit" class="btn btn-dark report-btn float-right mf-5"><i aria-hidden="true" class="far fa-save"></i> &nbsp; Save Page</button>  
    </form>
@endsection
