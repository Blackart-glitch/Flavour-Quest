@extends('layouts.app')
@section('content')
    <style>
        body {
            background: url('/bg-image.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
    <div class="row">
        <div class="col-xl-7 d-flex justify-content-start">
            <div class="bg-white p-5">
                <div>
                    <h2 class="">Password Reset</h2>
                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" required>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class=" text-center">
                    <p>Or sign in with:</p>
                    <a href="#" class="btn btn-primary me-2"><i class="bi bi-facebook"></i> Facebook</a>
                    <a href="#" class="btn btn-danger me-2"><i class="bi bi-google"></i> Google</a>
                    <a href="#" class="btn btn-info me-2"><i class="bi bi-twitter"></i> Twitter</a>
                    <a href="#" class="btn btn-dark"><i class="bi bi-github"></i> GitHub</a>
                </div>
            </div>
        </div>
        <div class="col-xl-5 d-flex justify-content-end">
            <h2 class="text-warning h2">Flavour</h2><br>
            <h2 class="text-warning h2">Quest</h2>
        </div>
    </div>
@endsection
