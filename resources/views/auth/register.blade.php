@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body"> --}}
    <div class="glass-container " style="height: auto; width: 450px" >
        <div class="login-box" style="max-width: max-content">
            <form method="POST" action="{{ route('register') }}">
                @csrf


                <div class="row mb-3">
                    <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                    <div class="col-md-6">
                        <input id="fname" type="text"  class=" @error('fname') is-invalid @enderror"
                            name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                        @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                    <div class="col-md-6">
                        <input id="lname" type="text"  class=" @error('lname') is-invalid @enderror"
                            name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                       @error('lname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email"  class=" @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"  class=" @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                       @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3 ">
                    <label for="password-confirm"
                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password"  name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>

                 @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <div class="row mb-2">
                    <div class="col-md-5 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    {{-- </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
