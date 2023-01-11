 <footer class="bg3 p-t-75 p-b-32">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-lg-3 p-b-50">
            <h4 class="stext-301 cl0 p-b-30">
            Categories
            </h4>
            <ul>
                <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">Category 1</a></li>
               <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">Category 2</a></li>
               <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">Category 3</a></li>
               <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">Category 4</a></li>
            </ul>
        </div>
        <div class="col-sm-6 col-lg-3 p-b-50">
            <h4 class="stext-301 cl0 p-b-30">Help</h4>
            <ul>
                <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">Track Order</a></li>
                <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">Returns</a></li>
                <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">Shipping</a></li>
                <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">FAQs</a></li>
            </ul>
        </div>
        <div class="col-sm-6 col-lg-3 p-b-50">
            <h4 class="stext-301 cl0 p-b-30">GET IN TOUCH</h4>
            <p class="stext-107 cl7 size-201">
                Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
            </p>
            <div class="p-t-27">
                <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                    <i class="fa fa-pinterest-p"></i>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 p-b-50">
            <h4 class="stext-301 cl0 p-b-30">Newsletter</h4>
            <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
              <p id="emailRequired"></p>
                <div class="wrap-input1 w-full p-b-4">
                    <input class="input1 bg-none plh1 stext-107 cl7" id="sub_email" type="email" name="email" placeholder="email@example.com">
                    <div class="focus-input1 trans-04"></div>
                </div>
                <div class="p-t-18">
                    <button type="submit" class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04" value="Subscribe" name="subscribe" id="subscribe">Subscribe</button>
                </div>
        </div>
    </div>
    <div class="p-t-40">
        <div class="flex-c-m flex-w p-b-18">
            <a href="#" class="m-all-1">
                <img src="{{ asset('frontend/images/icons/icon-pay-01.png') }}" alt="ICON-PAY">
            </a>
            <a href="#" class="m-all-1">
                <img src="{{ asset('frontend/images/icons/icon-pay-02.png') }}" alt="ICON-PAY">
            </a>
            <a href="#" class="m-all-1">
                <img src="{{ asset('frontend/images/icons/icon-pay-03.png') }}" alt="ICON-PAY">
            </a>
            <a href="#" class="m-all-1">
                <img src="{{ asset('frontend/images/icons/icon-pay-04.png') }}" alt="ICON-PAY">
            </a>
            <a href="#" class="m-all-1">
                <img src="{{ asset('frontend/images/icons/icon-pay-05.png') }}" alt="ICON-PAY">
            </a>
        </div>
        <p class="stext-107 cl6 txt-center">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Jayesh Sukhadiya
        </p>
    </div>
    </div>
</footer>