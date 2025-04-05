@extends('layouts.back-end')

@section('dropify-css')
<link href="{{ asset('back-end/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
   @include('back-end.settings-site.form-settings')
    <button type="submit" class="btn btn-dark report-btn float-right"><i aria-hidden="true" class="far fa-save"></i> &nbsp; Save</button>  
</form>
@endsection
@section('dropify-js')
<script src="{{ asset('back-end/assets/plugins/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('back-end/assets/pages/jquery.form-upload.init.js') }}"></script>
@endsection