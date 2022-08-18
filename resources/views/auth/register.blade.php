@extends('layouts.auth')

@push('title')
    Register Catatanku
@endpush

@section('content')
    <div class="auth-page container">
        <div class="row">
            <div class="col-6 col-md-4 mx-auto mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Register</h5>
                        <form class="mt-3"method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input id="name" v-model="name" type="text" placeholder="Full Name"
                                    class="mb-3 form-control 
                                @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input id="email" type="email" v-model="email" placeholder="Email"
                                    class="form-control 
                                  @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input id="password" type="password"    placeholder="Password"
                                    class="form-control 
                                  @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input id="password-confirm" type="password" placeholder="Password Confirmation"
                                    class="form-control 
                                  @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" required autocomplete="new-password">
                                @error('password_confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <a href="https://wa.me/+6281234567890" target="_blank"
                                class="d-block text-dark contact-me">Having problem in sign up?</a>
                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-dark btn-block mt-2 w-100">
                                    Sign Up
                                </button>
                            </div>
                            <div class="text-center mt-4 register">Already have an account? <a class="text-dark fst-italic"
                                    href="{{ route('login') }}">login now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
