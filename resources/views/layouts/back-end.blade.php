<!DOCTYPE html>
<html lang="en"lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ $logo }}" type="image/x-icon">
        @yield('dropify-css')
        <!-- App css -->
        <link href="{{ asset('back-end/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        @yield('loader-cart')
        @yield('select2-style')
        @yield('tinycme-header')
        @livewireStyles

    </head>
    <body>
        @include('loader.loader')
        <!-- Top Bar Start -->
        <div class="topbar">
             <!-- Navbar -->
            @include('back-end.partials.navbar')
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        @include('back-end.partials.top-bar')
        <!--end page-wrapper-img-->
        <div class="page-wrapper">
            <div class="page-wrapper-inner">
                <!-- Left Sidenav -->
                @include('back-end.partials.menu')      
                <!-- end left-sidenav-->
                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                        @yield('content')
                    </div>
                    <div class="mt-5"></div>
                    @include('back-end.partials.copyright')
                </div>
                <!-- container -->
                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->
        <!-- jQuery  -->
        <script src="{{ asset('back-end/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('back-end/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('back-end/assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('back-end/assets/js/waves.min.js') }}"></script>
        <script src="{{ asset('back-end/assets/js/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('loader/swiper.min.js') }}"></script>
        <script src="{{ asset('loader/custom.js') }}"></script>
        @yield('select2-script')
        @yield('dropify-js')
        @yield('tinymce')
        @livewireScripts
        <!-- App js -->
        <script src="{{ asset('back-end/assets/js/app.js') }}"></script>

    </body>

</html>