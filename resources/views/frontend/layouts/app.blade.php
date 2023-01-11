<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <title>Home - {{ config('app.name') }}</title>
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/icons/favicon.png') }}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/slick/slick.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">

    @yield('css-style')
<!--===============================================================================================-->
</head>
<body class="animsition">
    
    <!-- Header -->
    @include('frontend.layouts.header')

    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">Your wallet amount</span>
                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>
            
            <div class="header-cart-content flex-w js-pscroll">
                <div class="w-full">
                @if(Auth::guest())
                <div class="p-t-18">
                    <a href="{{ url('/user/login') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">Show Wallet Please Login</a>
                </div>
                @else
                <div class="header-cart-total w-full p-tb-20">Balance Wallet Amount : <span id="walletBalanceAmount"> {{ Auth::user()->wallet_amount }} </span> Rs -/ </div>
                    <div class="header-cart-buttons flex-w w-full">
                        <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                        <p id="walletAmountRequired"></p>
                        <div class="wrap-input1 w-full p-b-4">
                            <input class="input1 bg-none plh1 stext-107 cl7" id="wallet_amount" type="text" name="wallet_amount" placeholder="Enter Amount" pattern="^\d*(\.\d{0,2})?$" onkeyup="onlyNumbricDecimal(this);" maxlength="4" required>
                            <div class="focus-input1 trans-04"></div>
                        </div>
                        <div class="p-t-18">
                            <button type="submit" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10" value="Subscribe" name="subscribe" id="add-wallet-address">Save</button>
                        </div>
                    </div>
                    @endif
                </div>
                
            </div>
        </div>
    </div>

    @yield('content')

    <!-- Footer -->
    @include('frontend.layouts.footer')

    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>
     <script src="{{ asset('frontend/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('frontend/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('frontend/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('frontend/vendor/select2/select2.min.js') }}"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('frontend/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('frontend/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('frontend/vendor/parallax100/parallax100.js') }}"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('frontend/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('frontend/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('frontend/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e){
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function(){
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('frontend/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script>
        $('.js-pscroll').each(function(){
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#add-wallet-address').on('click', function() {
              var walletAmount = $('#wallet_amount').val();

              if(walletAmount!=""){
                  $.ajax({
                      url: "store-wallet-amount",
                      type: "POST",
                      data: {
                          _token: $("#csrf").val(),
                          wallet_amount: walletAmount,
                      },
                      cache: false,
                      success: function(dataResult){
                          var dataResult = JSON.parse(dataResult);
                          if(dataResult.error==200){
                            $('#wallet_amount').val('');
                            $('#walletBalanceAmount').html(dataResult.data.wallet_amount);
                            $('#walletAmountRequired').html('<label class="text-success" style="margin-left: 50px;">Thank you for add wallet amount</label>');   
                          }
                          else if(dataResult.error==401){
                            $('#walletAmountRequired').html('<label class="text-danger" style="margin-left: -30px;">Something is wrong please try again!</label>'); 
                          }
                      }
                  });
              }
              else{
                $('#walletAmountRequired').html('<label class="text-danger">Amount is required</label>');
              }
          });
        });

        function onlyNumbricDecimal(numbric) {
            var maintainplus = '';
            var numval = numbric.value
            if (numval.charAt(0) == '+') {
                var maintainplus = '';
            }
            curnumbricvar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,Š\/<>?|`¬\]\[]/g, '');
            numbric.value = maintainplus + curnumbricvar;
            var maintainplus = '';
            numbric.focus;
        }
    </script>
</body>
</html>