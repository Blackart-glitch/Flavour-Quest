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
            <div class="bg-white p-5 ">
                <div class="">
                    <div class="">
                        <h2 class="">Password Reset</h2>
                        <form action="" method="POST">
                            @csrf
                            <p>Enter your email address to receive a password reset link.</p>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Reset Link</button>
                        </form>
                        <p class="mt-3">Remember your password? <a href="{{ route('signin') }}">Sign In</a></p>
                    </div>
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
    </div>
@endsection
