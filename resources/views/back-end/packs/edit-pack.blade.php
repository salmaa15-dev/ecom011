@extends('layouts.back-end')

@section('dropify-css')
<link href="{{ asset('back-end/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<form action="{{ route('admin.packs.update', ['pack' => $pack->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   @include('back-end.packs.form-pack')
    <button type="submit" class="btn btn-warning report-btn float-right"><i class="far fa-edit"></i> &nbsp; Save</button>  
    <a href="{{ route('admin.packs.show', ['pack' => $pack->slug]) }}" class="btn btn-soft-info  waves-effect waves-light float-right mr-2"><i class="fas fa-info-circle"></i> Plus info..</a>
</form>
@endsection

@section('dropify-js')
<script src="{{ asset('back-end/assets/plugins/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('back-end/assets/pages/jquery.form-upload.init.js') }}"></script>
@endsection