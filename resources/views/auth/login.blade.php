@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body"> --}}
                    <div class="glass-container" style="height: auto">
                        <div class="login-box">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <input type="email" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email Address" autofocus>
                 admin@gmail.com

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input type="password" id="password" class="@error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="current-password">
                      admin
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                        <div class="options">
                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                           <label for="remember">Remember me</label>
                            {{--  @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            @endif --}}
                        </div>

                        <button type="submit">Login</button>
                        @if (Route::has('register'))
                        <p>Don't have an account?   <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></p>
                        @endif
                    </form>
                </div>
            </div>
                {{-- </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
