<header class="header-v4">
   <!-- Header desktop -->
   <div class="container-menu-desktop">
      <!-- Topbar -->
      <div class="top-bar">
         <div class="content-topbar flex-sb-m h-full container">
            <div class="left-top-bar">
               PHP laravel Interview practical Task
            </div>
            <div class="right-top-bar flex-w h-full">
               @if(Auth::guest())
               <a href="{{ url('/user/login') }}" class="flex-c-m trans-04 p-lr-25">Login</a>
               <a href="{{ url('/user/register') }}" class="flex-c-m trans-04 p-lr-25">Register</a>
               @else
               <a href="#" class="flex-c-m trans-04 p-lr-25">Help & FAQs</a>
               <a href="#" class="flex-c-m trans-04 p-lr-25">My Account</a>
               <a href="{{ route('logout') }}" class="flex-c-m trans-04 p-lr-25" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>Logout</a>
               @endif
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
         </div>
      </div>
      <div class="wrap-menu-desktop">
         <nav class="limiter-menu-desktop container">
            <!-- Logo desktop -->       
            <a href="{{ url('/') }}" class="logo">
            	<img src="{{ asset('frontend/images/icons/logo-01.png') }}" alt="IMG-LOGO">
            </a>
            <!-- Menu desktop -->
            <div class="menu-desktop">
               <ul class="main-menu">
                  <li class="active-menu"><a href="{{ url('/') }}">HOME</a></li>
                  <li><a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart">Topup wallet</a></li>
               </ul>
            </div>
            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m">
               <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
               </div>
                @if(Auth::guest())
               <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                <a href="{{ url('/user/login') }}"><i class="zmdi zmdi-account-o"></i></a>
               </div>
               @endif
               <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart">
                  <i class="zmdi zmdi-shopping-cart"></i>
               </div>
            </div>
         </nav>
      </div>
   </div>
   <!-- Header Mobile -->
   <div class="wrap-header-mobile">
      <!-- Logo moblie -->      
      <div class="logo-mobile">
         <a href="index.html"><img src="{{ asset('public/frontend/images/icons/logo-av.png') }}" alt="IMG-LOGO"></a>
      </div>
      <!-- Icon header -->
      <div class="wrap-icon-header flex-w flex-r-m m-r-15">
         <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
            <i class="zmdi zmdi-search"></i>
         </div>
         <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
            <i class="zmdi zmdi-shopping-cart"></i>
         </div>
         <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
         <i class="zmdi zmdi-favorite-outline"></i>
         </a>
      </div>
      <!-- Button show menu -->
      <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
         <span class="hamburger-box">
         <span class="hamburger-inner"></span>
         </span>
      </div>
   </div>
   <!-- Menu Mobile -->
   <div class="menu-mobile">
      <ul class="topbar-mobile">
         <li>
            <div class="left-top-bar">
               PHP laravel Interview practical Task
            </div>
         </li>
         <li>
            <div class="right-top-bar flex-w h-full">
               <a href="#" class="flex-c-m p-lr-10 trans-04">Help & FAQs</a>
               <a href="#" class="flex-c-m p-lr-10 trans-04">My Account</a>
               <a href="#" class="flex-c-m p-lr-10 trans-04">EN</a>
               <a href="#" class="flex-c-m p-lr-10 trans-04">USD</a>
            </div>
         </li>
      </ul>
      <ul class="main-menu-m">
         <li>
            <a href="index.html">Home</a>
            <span class="arrow-main-menu-m">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
         </li>
         <li><a href="product.html">NEW DROP</a></li>
         <li><a href="shoping-cart.html" class="label1 rs1" data-label1="hot">MENS APPAREL</a></li>
         <li><a href="blog.html">WOMENS APPAREL</a></li>
         <li><a href="about.html">GYM ACCESSORIES</a></li>
         <li><a href="contact.html">Contact</a></li>
      </ul>
   </div>
   <!-- Modal Search -->
   <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
      <div class="container-search-header">
         <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
         <img src="{{ asset('public/frontend/images/icons/icon-close2.png') }}" alt="CLOSE">
         </button>
         <form class="wrap-search-header flex-w p-l-15">
            <button class="flex-c-m trans-04"><i class="zmdi zmdi-search"></i><button>
            <input class="plh3" type="text" name="search" placeholder="Search...">
         </form>
      </div>
   </div>
</header>