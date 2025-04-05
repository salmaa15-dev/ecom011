@extends('layouts.front-end')

@section('content')
<div class="modal-content col-lg-5 mx-auto my-style mb-5">
    <div class="modal-body">
        <h1 class="pa-login-title">Forgot Password</h1>
        
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="pa-login-form">
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong class="h5">{{ $message }}</strong>
                    </span>
                @enderror
                <div class="pa-login-btn">
                    {{-- <button class="pa-btn">Forgot</button> --}}
                    <button type="submit" class="pa-btn">
                        {{ __('Send Password Reset Link') }}
                    </button>
                    <p>Don't have an account? <a href="{{ route('login') }}">Log In</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
