@extends('layouts.main')

@section('container')
<div class="login">
    <div class="form-signin mt-0">
        <form>
            <h1 class="h3 mb-4 fw-bolder ">Login Page</h1>
    
            <div class="mb-4">
                <label for="username" class="form-label fw-bold">Username</label>
                <input type="text" name="username" class="form-control" id="username">
            </div>
    
            <div class="mb-4">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
        
            <div class="checkbox mb-4">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg submit-btn fw-bold" type="submit">Sign in</button>
            <div class="form-group row mb-0">
                <div class=" col-md-8 offset-md-8">
                    {{-- @if (Route::has('register'))
                        <a class="btn btn-link dark-blue-text" href="{{ route('register') }}">
                            {{ __('Dont have an account?') }}
                        </a>
                    @endif --}}
                    <a class="btn btn-link dark-blue-text fw-bold text-decoration-none" href="/register">
                        Dont have an account?
                    </a>
                </div>
            </div>
        </form>
    </div>
    <img src="/storage/img/bg-login.jpg" alt="">
</div>

@endsection