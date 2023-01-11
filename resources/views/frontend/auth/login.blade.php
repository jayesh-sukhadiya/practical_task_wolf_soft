@extends('frontend.layouts.app')
@section('title')
<title>Login - {{config('app.name')}}</title>
@endsection
@section('css-style')
@endsection
@section('content')
<section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark">
    <div class="container-fluid">
        <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
            <div class="col-12 col-md-4 col-lg-4 h-50 ">
                <div class="card shadow">
                    <div class="card-body mx-auto">
                        <h4 class="card-title mt-3 text-center">Sign In</h4>
                        <p class="text-center mb-3">Get access to your Orders, Wishlist and Recommendations</p>
                        <form method="POST" id="my-form" action="{{ route('frontend.user.signin') }}" class="needs-validation">
                        @csrf
                           @include('components.message')
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-20 p-r-10" type="email" name="username" placeholder="Your Email Address" required maxlength="100" autofocus="" autocomplete="off">
                                @error('email')
                                  <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-20 p-r-10" type="password" name="password" placeholder="Enter Password" required maxlength="30">
                                @error('password')
                                  <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg3 bor1 hov-btn3 btn-block" style="color: white;"> Log In </button>
                            </div>
                            <p class="text-center">New to Testing Pvt Ltd?
                                <a href="{{ url('/user/register') }}">Create an account</a>
                            </p>
                            <p class="text-center mt-3">
                                <a href="{{ url('/user/forget-password') }}">Forget Password?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection