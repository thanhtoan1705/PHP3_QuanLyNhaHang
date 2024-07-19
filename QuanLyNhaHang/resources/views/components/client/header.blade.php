<div>
  <!-- header -->
  <header>
    <!-- header-top -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="
                col-lg-12 col-md-12 col-12
                d-flex
                flex-wrap
                justify-content-between
              ">
            <div class="contact-box">
              <span>
                <a href="#"><i class="fas fa-phone-square-alt"></i> 123-58794069</a>
              </span>
              <span>
                <a href="#"><i class="fas fa-envelope-open-text"></i>
                  supportfoodkhan@.com</a></span>
            </div>
            <div class="social-box">
              <span><a href="#"><i class="fab fa-twitter"></i></a></span>
              <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
              <span><a href="#"><i class="fab fa-linkedin-in"></i></a></span>
              <span><a href="#"><i class="fab fa-instagram"></i></a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header-bottom -->
    <div class="header-bottom margin-top-20">
      <div class="container position-relative">
        <div class="row d-flex align-items-center">
          <div class="col-lg-2 col-md-2 col-sm-2 col-3">
            <div class="logo">
              <a href="index.html">
                <img src="{{ asset('assets/client/images/logo/logo.png')}}" alt="logo" /></a>
            </div>
          </div>
          <div class="col-lg-6 d-none d-lg-block">
            <nav id="mobile-menu">
              <ul class="main-menu">
                <li>
                  <a href="{{ route('home') }}">Trang chủ <span></span></a>
                </li>
                <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                <li><a href="{{ route('menu') }}">Menu</a></li>

                <li><a href="{{ route('blog') }}">Bài Viết</a></li>
                </li>
                <li><a href="{{ route('contact') }}">Liên hệ</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-4 col-md-9 col-8">
            <div class="customer-area">
              <span>
                <a href="wishlist.html"><i class="fas fa-heart"></i></a>
              </span>
              <span>
                <a href="{{ route('account') }}"><i class="fas fa-user"></i></a>
              </span>
              <span>
                <a href="{{ route('cart') }}"><i class="fas fa-shopping-basket"></i></a>
              </span>
              <a href="{{ route('login') }}" class="btn">Đăng Nhập</a>
            </div>
          </div>
        </div>
        <!-- mobile-menu -->
        <div class="mobile-menu"></div>
      </div>
    </div>
  </header>
</div>
