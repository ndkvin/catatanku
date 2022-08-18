@extends('layouts.auth')

@push('title')
    Login Catatanku
@endpush

@section('content')
    <div class="auth-page container">
        <div class="row">
            <div class="col-6 col-md-4 mx-auto mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login</h5>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group  mb-3">
                                <input id="email" type="email"
                                    class="form-control
                                @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email Address" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input id="password" type="password"
                                    class="form-control mb-3
                                @error('password') is-invalid @enderror"
                                    name="password" placeholder="Password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <a href="https://wa.me/+6281234567890" target="_blank" class="d-block text-dark contact-me">Having problem in log in?</a>
                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-dark btn-block mt-2 w-100">
                                    Log In
                                </button>
                            </div>
                            <div class="text-center mt-4 register">Don't have an account? <a class="text-dark fst-italic" href="{{ route('register') }}">register now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
