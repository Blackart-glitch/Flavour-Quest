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
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-7 d-flex justify-content-start">
                <div class="bg-white p-5">
                    <div class="">
                        <h2 class="">Sign In</h2>
                        <form action="{{ route('signin') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control border-bottom" id="email" name="email"
                                    required>
                                @if ($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                @if ($errors->has('password'))
                                    <div class="text-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </form>
                        <p class="mt-3">Don't have an account? <a href="{{ route('signup') }}">Sign Up</a></p>
                    </div>
                    <div class="text-center">
                        <p>Or sign in with:</p>
                        <a href="#" class="btn me-2"><img width="48"
                                height="48"src="https://img.icons8.com/color/48/facebook-new.png"
                                alt="facebook-new" /></a>
                        <a href="#" class="btn me-2"><img width="48" height="48"
                                src="https://img.icons8.com/color/48/google-logo.png" alt="google-logo" /></a>
                        <a href="#" class="btn me-2"><img width="50" height="50"
                                src="https://img.icons8.com/ios-filled/50/twitterx.png" alt="twitterx" /></a>
                        <a href="#" class="btn"><img width="50" height="50"
                                src="https://img.icons8.com/ios-filled/50/github.png" alt="github" /></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 text-center mt-5">
                <h1 class="display-4 text-warning fw-bold">Flavour</h1>
                <h1 class="display-4 text-warning fw-bold">Quest</h1>
            </div>
        </div>
    </div>
@endsection
