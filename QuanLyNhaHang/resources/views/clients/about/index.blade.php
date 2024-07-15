@extends('layouts.clients')
@section('content')
 <!-- breadcrumb-area -->
 <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
    <div class="bread-shapes">
        <span class="b-shape-1 item-bounce"><img src="{{ asset('admin/assets/images/img/5.png') }}" alt=""></span>
        <span class="b-shape-2"><img src="{{ asset('admin/assets/images/img/6.png') }}" alt=""></span>
        <span class="b-shape-3"><img src="{{ asset('admin/assets/images/img/7.png') }}" alt=""></span>
        <span class="b-shape-4"><img src="{{ asset('admin/assets/images/img/9.png') }}" alt=""></span>
        <span class="b-shape-5"><img src="{{ asset('admin/assets/images/shapes/18.png') }}" alt=""></span>
        <span class="b-shape-6 item-animateOne"><img src="{{ asset('admin/assets/images/img/7.png') }}"
                alt=""></span>
    </div>
    <div class="container padding-top-120">
        <div class="row justify-content-center">
            <nav aria-label="breadcrumb">
                <h2 class="page-title">about us</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">about us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- food-items countdown -->
<div class="foods-counter">
    <div class="container">
        <div class="row foods-wrapper">
            <div class="col-lg-3 col-md-6">
                <div class="single-food text-center">
                    <img src="{{ asset('admin/assets/images/icons/3.png') }}" alt="">
                    <span class="items counter">2000</span>
                    <p>food item</p>
                    <span class="g-s-4"><img src="{{ asset('assets/images/shapes/10.png') }}" alt=""></span>
                    <span class="g-s-5"><img src="{{ asset('assets/images/shapes/14.png') }}" alt=""></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-food orange text-center">
                    <img src="{{ asset('admin/assets/images/icons/f-2.png') }}" alt="">
                    <span class="items counter">500</span>
                    <p> burger food item</p>
                    <span class="g-s-4"><img src="{{ asset('assets/images/shapes/10.png') }}" alt=""></span>
                    <span class="g-s-5"><img src="{{ asset('assets/images/shapes/14.png') }}" alt=""></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-food text-center">
                    <img src="{{ asset('admin/assets/images/icons/f-3.png') }}" alt="">
                    <span class="items counter">1000</span>
                    <p> soft drinks item</p>
                    <span class="g-s-4"><img src="{{ asset('assets/images/shapes/10.png') }}" alt=""></span>
                    <span class="g-s-5"><img src="{{ asset('assets/images/shapes/14.png') }}" alt=""></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-food orange text-center">
                    <img src="{{ asset('admin/assets/images/icons/f-4.png') }}" alt="">
                    <span class="items counter">600</span>
                    <p>Delicious Fast Food</p>
                    <span class="g-s-4"><img src="{{ asset('assets/images/shapes/10.png') }}" alt=""></span>
                    <span class="g-s-5"><img src="{{ asset('assets/images/shapes/14.png') }}" alt=""></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about us -->
<section class="about-area about-area2 padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12  wow fadeInLeft">
                <div class="about-left">
                    <div class="about-l-shapes">
                        <span class="als-1"><img src="{{ asset('admin/assets/images/shapes/2.png') }}" alt=""></span>
                    </div>
                    <div class="row">
                        <div
                            class="col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end justify-content-end margin-bottom-20">
                            <div class="about-gallery-1">
                                <img src="{{ asset('admin/assets/images/gallery/1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8 margin-bottom-20">
                            <div class="about-gallery-2">
                                <img src="{{ asset('admin/assets/images/gallery/2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-gallery-3">
                                <img src="{{ asset('admin/assets/images/gallery/3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 d-flex align-items-stretch ">
                            <div class="about-gallery-5 text-center">
                                <img src="{{ asset('admin/assets/images/gallery/4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12  wow fadeInRight">
                <div class="about-right">
                    <div class="about-r-shapes">
                        <span class="as-1"><img src="{{ asset('admin/assets/images/shapes/1.png') }}" alt=""></span>
                    </div>
                    <h2>The Story about
                        Food khan, only for
                        <span>hungry people.</span>
                    </h2>
                    <p>Food is a restaurant, bar and coffee roastery located on a busy corner site in
                        Farringdon's
                        Exmouth Market. With glazed.</p>
                    <div class="history-tab">
                        <ul class="nav" id="historyTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <div class="nav-link active" id="history-tab" data-bs-toggle="tab"
                                    data-bs-target="#history-tab-pane" role="tab" aria-controls="history-tab-pane"
                                    aria-selected="true">history</div>
                            </li>
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="journey-tab" data-bs-toggle="tab"
                                    data-bs-target="#journey-tab-pane" role="tab" aria-controls="journey-tab-pane"
                                    aria-selected="false">journey</div>
                            </li>
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="experience-tab" data-bs-toggle="tab"
                                    data-bs-target="#experience-tab-pane" role="tab"
                                    aria-controls="experience-tab-pane" aria-selected="false">experience</div>
                            </li>
                        </ul>

                        <div class="tab-content" id="historyTabContent">
                            <div class="tab-pane fade show active" id="history-tab-pane" role="tabpanel"
                                aria-labelledby="history-tab" tabindex="0">
                                <div class="his-content">
                                    <p>FoodKhan is Bangladeshi’s own fast food restaurants chain offering Burgers,
                                        French fries, Milkshakes, Smoothies and so much more.
                                    </p>
                                    <div
                                        class="sig-wrapper d-flex flex-wrap justify-content-around align-items-center">
                                        <div class="sig-img d-flex align-items-center"><img
                                                src="{{ asset('admin/assets/images/icons/sig.png') }}" alt="">
                                            <span>head of chef</span>
                                        </div>
                                        <a href="food-page.html" class="btn">all items</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="journey-tab-pane" role="tabpanel"
                                aria-labelledby="journey-tab" tabindex="0">
                                <div class="his-content">
                                    <p>FoodKhan is Bangladeshi’s own fast food restaurants chain offering Burgers,
                                        French fries, Milkshakes, Smoothies and so much more. We are known for our
                                        delicious taste, superior quality
                                    </p>
                                    <div
                                        class="sig-wrapper d-flex flex-wrap justify-content-around align-items-center">
                                        <div class="sig-img d-flex align-items-center"><img
                                                src="{{ asset('admin/assets/images/icons/sig.png') }}" alt="">
                                            <span>head of chef</span>
                                        </div>

                                        <a href="food-page.html" class="btn">all items</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="experience-tab-pane" role="tabpanel"
                                aria-labelledby="experience-tab" tabindex="0">
                                <div class="his-content">
                                    <p>Food Khan is a restaurant, bar and coffee roasters located on a busy corner
                                        site in
                                        Farrington's Exmouth Market.

                                    </p>
                                    <div
                                        class="sig-wrapper d-flex flex-wrap justify-content-around align-items-center">
                                        <div class="sig-img d-flex align-items-center"><img
                                                src="{{ asset('admin/assets/images/icons/sig.png') }}" alt="">
                                            <span>head of chef</span>
                                        </div>

                                        <a href="food-page.html" class="btn">all items</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- delicious food -->
<section class="delicious-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="deli-shapes">
            <span class="ds-1"><img src="{{ asset('admin/assets/images/shapes/transparent1.png') }}" alt=""></span>
            <span class="ds-2 item-animateOne"><img src="{{ asset('admin/assets/images/shapes/27.png') }}" alt=""></span>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6  wow fadeInLeft">
                <div class="delicious-left">
                    <h2>Fresh taste at a
                        great price, only for
                        <span>Delicious Food lover.</span>
                    </h2>
                    <a class="play-btn1 item-ripple popup-youtube"
                        href="https://www.youtube.com/watch?v=9xwazD5SyVg"><i class="fas fa-play"></i></a>
                    <a href="https://www.youtube.com/watch?v=9xwazD5SyVg" class=" popup-youtube intro"> intro
                        video</a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block  wow fadeInRight">
                <div class="delicious-right">
                    <img src="{{ asset('admin/assets/images/gallery/1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!--team area -->
<section class="team-area padding-bottom-110 padding-top-110 wow fadeInUp">
    <div class="team-area-shapes">
        <span class="ts-1"><img src="{{ asset('admin/assets/images/shapes/pizza-s1.png') }}" alt=""></span>
        <span class="ts-2"><img src="{{ asset('admin/assets/images/shapes/brr.png') }}" alt=""></span>
    </div>
    <div class="container">
        <div class="common-title-area text-center padding-bottom-50">
            <h3>team membar</h3>
            <h2>professional <span>chef</span></h2>
        </div>
        <div class="team-slider-active">
            <div class="single-team text-center">
                <div class="s-t-img">
                    <img src="{{ asset('admin/assets/images/team/t1.png') }}" alt="">
                </div>
                <div class="t-content">
                    <h5>Mathij Sen Deo</h5>
                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                </div>
                <div class="t-social-b">
                    <span class="follow">follow :</span>
                    <span class="t-social"><a href="#"><i class="fab fa-facebook"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-twitter"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-instagram"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-linkedin"></i></a></span>
                </div>
            </div>
            <div class="single-team text-center">
                <div class="s-t-img">
                    <img src="{{ asset('admin/assets/images/team/t2.png') }}" alt="">
                </div>
                <div class="t-content">
                    <h5>Malina Weissa</h5>
                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                </div>
                <div class="t-social-b">
                    <span class="follow">follow :</span>
                    <span class="t-social"><a href="#"><i class="fab fa-facebook"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-twitter"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-instagram"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-linkedin"></i></a></span>
                </div>
            </div>
            <div class="single-team text-center">
                <div class="s-t-img">
                    <img src="{{ asset('admin/assets/images/team/t3.png') }}" alt="">
                </div>
                <div class="t-content">
                    <h5>Tonmoy Khan</h5>
                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                </div>
                <div class="t-social-b">
                    <span class="follow">follow :</span>
                    <span class="t-social"><a href="#"><i class="fab fa-facebook"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-twitter"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-instagram"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-linkedin"></i></a></span>
                </div>
            </div>
            <div class="single-team text-center">
                <div class="s-t-img">
                    <img src="{{ asset('admin/assets/images/team/t4.png') }}" alt="">
                </div>
                <div class="t-content">
                    <h5>Mathja Semo</h5>
                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                </div>
                <div class="t-social-b">
                    <span class="follow">follow :</span>
                    <span class="t-social"><a href="#"><i class="fab fa-facebook"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-twitter"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-instagram"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-linkedin"></i></a></span>
                </div>
            </div>
            <div class="single-team text-center">
                <div class="s-t-img">
                    <img src="{{ asset('admin/assets/images/team/t1.png') }}" alt="">
                </div>
                <div class="t-content">
                    <h5>Mathij Sen Deo</h5>
                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                </div>
                <div class="t-social-b">
                    <span class="follow">follow :</span>
                    <span class="t-social"><a href="#"><i class="fab fa-facebook"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-twitter"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-instagram"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-linkedin"></i></a></span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- testimonial -->
<section class="testimonial padding-bottom-120 padding-top-110 wow fadeInUp">
    <div class="container">
        <div class="testi-shapes">
            <span class="ts-1"><img src="{{ asset('admin/assets/images/img/31.png') }}"  alt=""></span>
            <span class="ts-2"><img src="{{ asset('admin/assets/images/img/32.png') }}"  alt=""></span>
            <span class="ts-3 item-animateTwo"><img src="assets/images/shapes/7.png" alt=""></span>
        </div>
        <div class="common-title-area text-center padding-bottom-50">
            <h3>testimonial</h3>
            <h2>client <span>feedback</span></h2>
        </div>
        <div class="testimonial-active">
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{ asset('admin/assets/images/shapes/33.png') }}" alt=""></span>
                    </div>
                    <div class="testi-img">
                        <img src="{{ asset('admin/assets/images/testimonial/testi-1.png') }}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{ asset('admin/assets/images/shapes/33.png') }}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{ asset('admin/assets/images/testimonial/testi-2.png') }}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{ asset('admin/assets/images/shapes/33.png') }}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{ asset('admin/assets/images/testimonial/testi-1.png') }}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{ asset('admin/assets/images/shapes/33.png') }}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{ asset('admin/assets/images/testimonial/testi-2.png') }}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{ asset('admin/assets/images/shapes/33.png') }}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{ asset('admin/assets/images/testimonial/testi-1.png') }}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{ asset('admin/assets/images/shapes/33.png') }}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{ asset('admin/assets/images/testimonial/testi-2.png') }}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{ asset('admin/assets/images/shapes/33.png') }}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{ asset('admin/assets/images/testimonial/testi-1.png') }}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{ asset('assets/images/shapes/33.png') }}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{ asset('assets/images/testimonial/testi-2.png') }}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
        </div>

    </div>
</section>

<!-- slider-gallery-img -->
<div class="slider-gallery-img">
    <div class="container-fluid">
        <div class="slider-gallery-active">
            <div class="single-gallery-img">
                <img src="{{ asset('admin/assets/images/gallery/gm1.jpg') }}" alt="">
                <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
            </div>
            <div class="single-gallery-img">
                <img src="{{ asset('admin/assets/images/gallery/gm2.jpg') }}" alt="">
                <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
            </div>
            <div class="single-gallery-img">
                <img src="{{ asset('admin/assets/images/gallery/gm3.jpg') }}" alt="">
                <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
            </div>
            <div class="single-gallery-img">
                <img src="{{ asset('admin/assets/images/gallery/gm4.jpg') }}" alt="">
                <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
            </div>
            <div class="single-gallery-img">
                <img src="{{ asset('admin/assets/images/gallery/gm5.jpg') }}" alt="">
                <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
            </div>
            <div class="single-gallery-img">
                <img src="{{ asset('admin/assets/images/gallery/gm6.jpg') }}" alt="">
                <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
            </div>
        </div>
    </div>
</div>

<!-- blog-area -->
<section class="blog-area blog-area-about padding-top-110 padding-bottom-120 wow fadeInUp">
    <div class="container">
        <div class="common-title-area text-center padding-bottom-60">
            <h3>food khan</h3>
            <h2>blog & <span>
                    news
                </span> </h2>
        </div>
        <div class="blog-slider-active">
            <div class="single-blog">
                <div class="blog-img">
                    <a href="blog-single.html"> <img src="{{ asset('admin/assets/images/blog/b-1.jpg') }}" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-between">
                    <span><a href="#"><i class="fas fa-tags"></i> chicken burger</a></span>
                    <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
                </div>
                <h4><a href="blog-single.html">Game day Burger with Homemade</a></h4>
            </div>
            <div class="single-blog">
                <div class="blog-img">
                    <a href="blog-single.html"> <img src="{{ asset('admin/assets/images/blog/b-2.jpg') }}" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-between">
                    <span><a href="#"><i class="fas fa-tags"></i> pizza</a></span>
                    <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
                </div>
                <h4><a href="blog-single.html">Delicious pizza with on a wooden</a></h4>
            </div>
            <div class="single-blog">
                <div class="blog-img">
                    <a href="blog-single.html"> <img src="{{ asset('admin/assets/images/blog/b-3.jpg') }}" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-between">
                    <span><a href="#"><i class="fas fa-tags"></i> chicken burger</a></span>
                    <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
                </div>
                <h4><a href="blog-single.html">Game day Burger with Homemade</a></h4>
            </div>
            <div class="single-blog">
                <div class="blog-img">
                    <a href="blog-single.html"> <img src="{{ asset('admin/assets/images/blog/b-1.jpg') }}" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-between">
                    <span><a href="#"><i class="fas fa-tags"></i> chicken burger</a></span>
                    <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
                </div>
                <h4><a href="blog-single.html">Game day Burger with Homemade</a></h4>
            </div>
            <div class="single-blog">
                <div class="blog-img">
                    <a href="blog-single.html"> <img src="{{ asset('admin/assets/images/blog/b-2.jpg') }}" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-between">
                    <span><a href="#"><i class="fas fa-tags"></i> pizza</a></span>
                    <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
                </div>
                <h4><a href="blog-single.html">Delicious pizza with on a wooden</a></h4>
            </div>
            <div class="single-blog">
                <div class="blog-img">
                    <a href="blog-single.html"> <img src="{{ asset('admin/assets/images/blog/b-3.jpg') }}" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-between">
                    <span><a href="#"><i class="fas fa-tags"></i> chicken burger</a></span>
                    <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
                </div>
                <h4><a href="blog-single.html">Game day Burger with Homemade</a></h4>
            </div>

        </div>
    </div>
</section>
@endsection