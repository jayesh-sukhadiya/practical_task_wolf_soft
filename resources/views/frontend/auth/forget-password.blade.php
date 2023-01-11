@extends('frontend.layouts.app')
@section('title')
<title>Forgot Password - {{config('app.name')}}</title>
@endsection
@section('css-style')
@endsection
@section('content')
<section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark">
    <div class="container-fluid">
        <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
            <div class="col-12 col-md-4 col-lg-4   h-50 ">
                <div class="card shadow">
                    <div class="card-body mx-auto">
                        <h4 class="card-title mt-3 text-center">Forgot Password?</h4>
                        <p class="text-center mb-3">You can reset your Password here</p>
                        <form>
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-20 p-r-10" type="email" name="email" placeholder="Enter Email Address" required maxlength="100" autofocus="" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg3 bor1 hov-btn3 btn-block" style="color: white;"> Send My Password </button>
                            </div>
                            <p class="text-center">Already account in AVlife?
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