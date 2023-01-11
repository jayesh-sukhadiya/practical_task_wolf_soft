@extends('frontend.layouts.app')
@section('title')
<title>Register - {{config('app.name')}}</title>
@endsection
@section('css-style')
@endsection
@section('content')
<section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center d-flex-row text-center h-100">
            <div class="col-12 col-md-4 col-lg-4  h-50">
                <div class="card shadow">
                    <div class="card-body mx-auto">
                        <h4 class="card-title mt-3 text-center">Create an Account</h4>
                        <p class="text-center mb-3">Get access to your Orders, Wishlist and Recommendations</p>
                        <form method="POST" id="my-form" action="{{ route('frontend.user.store') }}" class="needs-validation">
                        @csrf
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-20 p-r-10" type="text" name="name" placeholder="Enter fullname*" required maxlength="100" autofocus="" autocomplete="" tabindex="1">
                            </div>

                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-20 p-r-10" type="email" name="email" placeholder="Your Email Address*" required maxlength="100" autocomplete="on" tabindex="2">
                            </div>

                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-20 p-r-10" type="text" name="mobile_number" placeholder="Enter Mobile Number" maxlength="10" tabindex="3">
                            </div>

                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input id="password" type="password" name="password" class="stext-111 cl2 plh3 size-116 p-l-20 p-r-10" tabindex="4" required placeholder="Enter Password*">
                                @error('password')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input id="password_confirmation" type="password" name="password_confirmation" class="stext-111 cl2 plh3 size-116 p-l-20 p-r-10" tabindex="5" required placeholder="Enter Password Confirmation*" maxlength="30">
                                @error('password_confirmation')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg3 bor1 hov-btn3 btn-block" style="color: white;"> Continue </button>
                            </div>
                            <p class="text-center">Already account in Testing Pvt Ltd?
                                <a href="{{ url('/user/login') }}">Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection