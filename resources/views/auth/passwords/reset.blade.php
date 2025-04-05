@extends('layouts.front-end')
@section('content')
        <div class="modal-content col-lg-5 mx-auto my-style mb-5">
            <div class="modal-body">
                <h1 class="pa-login-title">Reset Password</h1>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="pa-login-form">
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="h6">{{ $message }}</strong>
                                </span>
                            @enderror
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="h6">{{ $message }}</strong>
                                </span>
                            @enderror

                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        
                        <div class="pa-login-btn">
                            <button type="submit" class="pa-btn">
                                Reset Password
                            </button>
                            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
