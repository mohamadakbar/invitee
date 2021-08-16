@extends('auth.auth_template')

@section('container')
    <div class="card-body">
        <h4 class="card-title">Login</h4>
        <form action="{{ route('login') }}" method="POST" class="my-login-validation" novalidate="">
            @csrf
            <div class="form-group">
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                {{--                                <div class="invalid-feedback">--}}
                {{--                                    Email is invalid--}}
                {{--                                </div>--}}
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password
                    <a href="forgot.html" class="float-right">
                        Forgot Password?
                    </a>
                </label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" data-eye>
                {{--                                <div class="invalid-feedback">--}}
                {{--                                    Password is required--}}
                {{--                                </div>--}}
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group">
                <div class="custom-checkbox custom-control">
                    <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                    <label for="remember" class="custom-control-label">Remember Me</label>
                </div>
            </div>

            <div class="form-group m-0">
                <button type="submit" class="btn btn-primary btn-block">
                    Login
                </button>
            </div>
            <div class="mt-4 text-center">
                Don't have an account? <a href="{{ route('register') }}">Create One</a>
            </div>
            <div class="mt-4 text-center">
                Back to<a href="/"> home</a>
            </div>
        </form>
    </div>

@endsection
