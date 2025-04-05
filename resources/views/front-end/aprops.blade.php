@extends('layouts.front-end')
@section('title', $page->slug)
@section('content')
    <!-- breadcrumb start -->
    <!--<div class="pa-breadcrumb">
        <div class="container-fluid">
            <div class="pa-breadcrumb-box">
                <h1>A propos</h1>
                <ul>
                    <li><a href="{{ route('brands') }}">A propos</a></li>
                    <li>{{ $page->slug }}</li>

                </ul>
            </div>
        </div>
    </div>-->
    <!-- breadcrumb end -->
    <!-- product start -->
    <!--<div class="container-fluid mt-3">-->
    <!--    <div class="row">-->
    <!--        <div class="col-md-12">-->
    <!--           <div style="margin-left: 30px">-->
                    {!! $page->content !!}
    <!--           </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- product end -->
@endsection