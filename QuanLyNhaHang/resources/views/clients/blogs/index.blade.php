@extends('layouts.clients')
@section('content')
    <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="{{ asset('assets/client/images/img/5.png') }}" alt=""></span>
            <span class="b-shape-2"><img src="{{ asset('assets/client/images/img/6.png') }}" alt=""></span>
            <span class="b-shape-3"><img src="{{ asset('assets/client/images/img/7.png') }}" alt=""></span>
            <span class="b-shape-4"><img src="{{ asset('assets/client/images/img/9.png') }}" alt=""></span>
            <span class="b-shape-5"><img src="{{ asset('assets/client/images/shapes/18.png') }}" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="{{ asset('assets/client/images/img/7.png') }}"
                    alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb text-center">
                    <h2 class="page-title">Bài viết</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a> / <a href="{{ route('blog') }}"> Bài
                                viết</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Blog Content Section -->
    <section class="blog-content-section padding-top-110 padding-bottom-120">
        <div class="blog-shapes">
            <span class="bbs-1"><img src="{{ asset('assets/client/images/shapes/13.png') }}" alt=""></span>
            <span class="bbs-2 item-bounce"><img src="{{ asset('assets/client/images/shapes/12.png') }}"
                    alt=""></span>
            <span class="bbs-3"><img src="{{ asset('assets/client/images/shapes/7.png') }}" alt=""></span>
            <span class="bbs-4 item-bounce"><img src="{{ asset('assets/client/images/shapes/26.png') }}"
                    alt=""></span>
            <span class="bbs-5 item-animateTwo"><img src="{{ asset('assets/client/images/shapes/26.png') }}"
                    alt=""></span>
            <span class="bbs-6"><img src="{{ asset('assets/client/images/shapes/16.png') }}" alt=""></span>
            <span class="bbs-7"><img src="{{ asset('assets/client/images/img/32.png') }}" alt=""></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-posts">
                        <div class="blog-single-post wow fadeInUp">
                            <div class="blog-thumbnail">
                                <a href="{{ route('blogDetail') }}"><img src="{{ asset('assets/client/images/blog/blog1.jpg') }}"
                                        alt="thumbnail"></a>
                                <div class="meta-date">
                                    <span class="bold">02</span>
                                    <span>dec</span>
                                </div>
                            </div>
                            <div class="blog-content-part">
                                <div class="blog-content-top">
                                    <div class="blog-date margin-right-20">
                                        <a href="#"><i class="fas fa-tag"></i> Chicken Burger</a>
                                    </div>
                                    <div class="blog-tag margin-right-20">
                                        <a href="#"> <i class="fas fa-user-circle"></i> Miyako Prince</a>
                                    </div>
                                    <div class="blog-author">
                                        <a href="#"><i class="fas fa-comments"></i> 120+ Bình luận</a>
                                    </div>
                                </div>
                                <div class="blog-title">
                                    <h4><a href="{{ route('blogDetail') }}">Game Day Burger Với Món Tự Làm</a></h4>
                                </div>
                                <div class="blog-content">
                                    <p>Các tổ chức ngày nay luôn thay đổi. Các ngành công nghiệp đang được củng cố, kinh
                                        doanh
                                        các mô hình đang nổi lên, các công nghệ mới đang được phát triển và người tiêu dùng
                                        hành vi đang phát triển.</p>
                                </div>
                                <div class="blog-excerpt-link">
                                    <a href="{{ route('blogDetail') }}" class="btn">đọc thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-single-post wow fadeInUp">
                            <div class="blog-thumbnail-slider">
                                <div class="thumbnail-single-slide">
                                    <a href="{{ route('blogDetail') }}"><img
                                            src="{{ asset('assets/client/images/blog/blog2.jpg') }}" alt="thumbnail"></a>
                                    <div class="meta-date">
                                        <span class="bold">02</span>
                                        <span>dec</span>
                                    </div>
                                </div>
                                <div class="thumbnail-single-slide">
                                    <a href="{{ route('blogDetail') }}"><img
                                            src="{{ asset('assets/client/images/blog/blog2.jpg') }}" alt="thumbnail"></a>
                                    <div class="meta-date">
                                        <span class="bold">02</span>
                                        <span>dec</span>
                                    </div>
                                </div>
                                <div class="thumbnail-single-slide">
                                    <a href="{{ route('blogDetail') }}"><img
                                            src="{{ asset('assets/client/images/blog/blog2.jpg') }}" alt="thumbnail"></a>
                                    <div class="meta-date">
                                        <span class="bold">02</span>
                                        <span>dec</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content-part">
                                <div class="blog-content-top">
                                    <div class="blog-date margin-right-20">
                                        <a href="#"><i class="fas fa-tag"></i> Chicken Burger</a>
                                    </div>
                                    <div class="blog-tag margin-right-20">
                                        <a href="#"> <i class="fas fa-user-circle"></i> Miyako Prince</a>
                                    </div>
                                    <div class="blog-author">
                                        <a href="#"><i class="fas fa-comments"></i> 120+ Bình luận</a>
                                    </div>
                                </div>
                                <div class="blog-title">
                                    <h4><a href="{{ route('blogDetail') }}">Một Burger xứng đáng với chức vụ Tổng thống tại
                                            Upland</a></h4>
                                </div>
                                <div class="blog-content ">
                                    <p>Các tổ chức ngày nay luôn thay đổi. Các ngành công nghiệp đang được củng cố, kinh
                                        doanh
                                        các mô hình đang nổi lên, các công nghệ mới đang được phát triển và người tiêu dùng
                                        hành vi đang phát triển.</p>
                                </div>
                                <div class="blog-excerpt-link">
                                    <a href="{{ route('blogDetail') }}" class="btn">đọc thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-single-post wow fadeInUp">
                            <div class="blog-thumbnail-video">
                                <div class="meta-date">
                                    <span class="bold">02</span>
                                    <span>dec</span>
                                </div>
                                <a href="{{ route('blogDetail') }}"><img src="{{ asset('assets/client/images/blog/blog3.jpg') }}"
                                        alt="thumbnail"></a>
                                <div class="video-play-button">
                                    <a href="https://www.youtube.com/watch?v=8AGgbIQyqR8" class="button-video">
                                        <i class="fa fa-play item-ripple"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-content-part">
                                <div class="blog-content-top">
                                    <div class="blog-date margin-right-20">
                                        <a href="#"><i class="fas fa-tag"></i> Chicken Burger</a>
                                    </div>
                                    <div class="blog-tag margin-right-20">
                                        <a href="#"> <i class="fas fa-user-circle"></i> Miyako Prince</a>
                                    </div>
                                    <div class="blog-author">
                                        <a href="#"><i class="fas fa-comments"></i> 120+ Bình luận</a>
                                    </div>
                                </div>
                                <div class="blog-title">
                                    <h4><a href="{{ route('blogDetail') }}">Cách làm Pizza như bậc thầy người Neapolitan</a></h4>
                                </div>
                                <div class="blog-content ">
                                    <p>Các tổ chức ngày nay luôn thay đổi. Các ngành công nghiệp đang được củng cố, kinh
                                        doanh
                                        các mô hình đang nổi lên, các công nghệ mới đang được phát triển và người tiêu dùng
                                        hành vi đang phát triển.</p>
                                </div>
                                <div class="blog-excerpt-link">
                                    <a href="{{ route('blogDetail') }}" class="btn">đọc thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-single-post wow fadeInUp">
                            <div class="blog-upper-content">
                                <div class="meta-date">
                                    <span class="bold">02</span>
                                    <span>dec</span>
                                </div>
                            </div>
                            <div class="blog-content-part">
                                <div class="blog-content-top">
                                    <div class="blog-date margin-right-20">
                                        <a href="#"><i class="fas fa-tag"></i> Chicken Burger</a>
                                    </div>
                                    <div class="blog-tag margin-right-20">
                                        <a href="#"><i class="fas fa-user-circle"></i> Miyako Prince</a>
                                    </div>
                                    <div class="blog-author">
                                        <a href="#"><i class="fas fa-comments"></i> 120+ Bình luận</a>
                                    </div>
                                </div>
                                <div class="blog-title">
                                    <h4><a href="{{ route('blogDetail') }}">Cách làm Pizza như bậc thầy người Neapolitan</a></h4>
                                </div>
                                <div class="blog-content ">
                                    <p>Các tổ chức ngày nay luôn thay đổi. Các ngành công nghiệp đang được củng cố, kinh
                                        doanh
                                        các mô hình đang nổi lên, các công nghệ mới đang được phát triển và người tiêu dùng
                                        hành vi đang phát triển.</p>
                                </div>
                                <div class="blog-excerpt-link">
                                    <a href="{{ route('blogDetail') }}" class="btn">đọc thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="template-pagination">
                        <ul>
                            <li><a class="active" href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-sidebar margin-top-10">
                        <div class="single-widget wow fadeInUp author-widget">
                            <img src="{{ asset('assets/client/images/blog/user.jpg') }}" alt="image">
                            <div class="author-name margin-top-20">
                                <h5>Miyako Prince</h5>
                            </div>
                            <div class="author-content margin-top-10">
                                <p>CHÀO! Tôi là tác giả của bài viết này. Đọc bài viết của tôi, theo xu hướng.</p>
                            </div>
                            <div class="author-social-link margin-top-20">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-widget search-widget  wow fadeInUp ">
                            <div class="header-search">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="single-widget product-widget  wow fadeInUp ">
                            <h6 class="margin-bottom-10">Sản phẩm bán chạy</h6>
                            <div class="single-product d-flex align-items-center">
                                <div class="dish-img">
                                    <a href="single-dish.html"><img
                                            src="{{ asset('assets/client/images/menu-item/pd6.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Chicken Fry
                                            Recipe
                                        </a></h6>
                                    <span class="price">$10.00</span>
                                    <span>
                                        <a class="cart-select" href="shopping-cart.html"><i
                                                class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-product d-flex align-items-center  wow fadeInUp ">
                                <div class="dish-img">
                                    <a href="single-dish.html"> <img
                                            src="{{ asset('assets/client/images/menu-item/pd4.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Chicken Soup
                                            Rejala
                                        </a></h6>
                                    <span class="price">$20.00</span>
                                    <span>
                                        <a class="cart-select" href="shopping-cart.html"><i
                                                class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-product d-flex align-items-center  wow fadeInUp ">
                                <div class="dish-img">
                                    <a href="single-dish.html"><img
                                            src="{{ asset('assets/client/images/menu-item/pd7.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">The Best Black
                                            Frame
                                        </a></h6>
                                    <span class="price">$80.00</span>
                                    <span>
                                        <a class="cart-select" href="shopping-cart.html"><i
                                                class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-product d-flex align-items-center  wow fadeInUp">
                                <div class="dish-img">
                                    <a href="single-dish.html"> <img
                                            src="{{ asset('assets/client/images/menu-item/pd8.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">The Best Black
                                            Frame
                                        </a></h6>
                                    <span class="price">$80.00</span>
                                    <span>
                                        <a class="cart-select" href="shopping-cart.html"><i
                                                class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="single-widget tag-widget  wow fadeInUp">
                            <div class="widget-title">
                                <h5>Thẻ.</h5>
                            </div>
                            <div class="tag-items">
                                <ul>
                                    <li><a href="#">bbq</a></li>
                                    <li><a href="#">tikka</a></li>
                                    <li><a href="#">pizza</a></li>
                                    <li><a href="#">chicken sharma</a></li>
                                    <li><a href="#">garlic burger</a></li>
                                    <li><a href="#">sandwich</a></li>
                                    <li><a href="#">chicken soup</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="single-widget filter-menu-widget  wow fadeInUp">
                            <h6><a href="#">lọc theo thực đơn</a></h6>
                            <div class="filter-menu d-flex align-items-center">
                                <div class="dish-img">
                                    <a href="single-dish.html"> <img
                                            src="{{ asset('assets/client/images/menu-item/fm1.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="dish-content d-flex justify-content-between">
                                    <h6> <a href="single-dish.html">burger food
                                        </a></h6>
                                    <span class="price">20</span>
                                </div>
                            </div>
                            <div class="filter-menu d-flex align-items-center">
                                <div class="dish-img">
                                    <a href="single-dish.html"> <img
                                            src="{{ asset('assets/client/images/menu-item/fm2.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="dish-content d-flex justify-content-between">
                                    <h6> <a href="single-dish.html">Chicken Fry
                                        </a></h6>
                                    <span class="price">50</span>
                                </div>
                            </div>
                            <div class="filter-menu d-flex align-items-center">
                                <div class="dish-img">
                                    <a href="single-dish.html"><img
                                            src="{{ asset('assets/client/images/menu-item/fm3.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="dish-content d-flex justify-content-between">
                                    <h6> <a href="single-dish.html">Pizza
                                        </a></h6>
                                    <span class="price">20</span>
                                </div>
                            </div>
                            <div class="filter-menu d-flex align-items-center">
                                <div class="dish-img">
                                    <a href="single-dish.html"> <img
                                            src="{{ asset('assets/client/images/menu-item/fm4.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="dish-content d-flex">

                                    <h6> <a href="single-dish.html">Chicken fry
                                        </a></h6>

                                    <span class="price">50</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-widget banner-widget  wow fadeInUp ">
                            <div class="gallery-img-4">
                                <h5>Super Combo
                                    Burger</h5>
                                <a href="{{ route('cart') }}" class="btn">đặt hàng ngay bây giờ</a>
                                <img src="{{ asset('assets/client/images/gallery/22.png') }}" alt="">
                                <span class="gprice-4"><img src="{{ asset('assets/client/images/gallery/25.png') }}"
                                        alt=""></span>
                                <span class="gshape-1"><img src="{{ asset('assets/client/images/shapes/35.png') }}"
                                        alt=""></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
