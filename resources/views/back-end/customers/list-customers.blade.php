@extends('layouts.back-end')

@section('content')
<div id="project-list-left" class="pb-1">
    @include('success.success')
    <livewire:customers />
</div>
@endsection
