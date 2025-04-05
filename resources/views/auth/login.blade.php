@extends('layouts.front-end')



@section('content')

<div class="container mb-5">

    <div class="modal-content col-lg-6 mx-auto my-style" style="border: none">

        <div class="modal-body">

           <div class="text-center mb-2">
                <img src="{{ $logo }}" alt="Shop laayoune" width="130px" height="124px">
           </div>

            <form method="POST" action="{{ route('login') }}">

                @csrf

                <div class="pa-login-form">

                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')

                            <span class="invalid-feedback" role="alert">

                                <strong class="h6">{{ $message }}</strong>

                            </span>

                    @enderror

    

                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                    @error('password')

                            <span class="invalid-feedback" role="alert">

                                <strong class="h5">{{ $message }}</strong>

                            </span>

                    @enderror

    

                    <div class="pa-remember">

                        <label class="float-left">Remember Me

                            <input  type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <span class="s_checkbox"></span>

                        </label>

                        @if (Route::has('password.request'))

                            <a href="{{ route('password.request') }}" class="float-right">Forgot Password ?</a>

                        @endif

                    </div>

                    <div class="pa-login-btn text-center">

                        <button type="submit" class="pa-btn btn-block">

                            {{ __('Login') }}

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection

