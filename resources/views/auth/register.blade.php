@extends('auth.auth_template')

@section('container')
    <div class="card fat">
        <div class="card-body">
            <h4 class="card-title">Register</h4>
            <form method="POST" class="my-login-validation" novalidate="" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <div class="invalid-feedback">
                        What's your name?
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">E-Mail Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <div class="invalid-feedback">
                        Your email is invalid
                    </div>
                </div>

                <div class="form-group">
                    <label for="paket">Pilih Paket</label>
                    <select name="paket" id="" class="form-control" required>
                        <option value="">Pilih ..</option>
                        <option value="1">Free</option>
                        <option value="2">Entry</option>
{{--                        <option value="3" style="cursor: not-allowed;"><del>Pro</del></option>--}}
                    </select>
                    <div class="invalid-feedback">
                        Your email is invalid
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

{{--                <div class="form-group">--}}
{{--                    <div class="custom-checkbox custom-control">--}}
{{--                        <input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">--}}
{{--                        <label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            You must agree with our Terms and Conditions--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="form-group m-0">
                    <button type="submit" class="btn btn-primary btn-block">
                        Register
                    </button>
                </div>
                <div class="mt-4 text-center">
                    Already have an account? <a href="{{ route('login') }}">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection
