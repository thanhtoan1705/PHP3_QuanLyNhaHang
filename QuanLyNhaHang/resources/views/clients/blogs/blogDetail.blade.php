@extends('layouts.clients')
@section('content')
<div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
    <div class="bread-shapes">
        <span class="b-shape-1 item-bounce"><img src="{{ asset('admin/assets/images/img/5.png')}}" alt=""></span>
        <span class="b-shape-2"><img src="{{ asset('admin/assets/images/img/6.png')}}" alt=""></span>
        <span class="b-shape-3"><img src="{{ asset('admin/assets/images/img/7.png')}}" alt=""></span>
        <span class="b-shape-4"><img src="{{ asset('admin/assets/images/img/9.png')}}" alt=""></span>
        <span class="b-shape-5"><img src="{{ asset('admin/assets/images/shapes/18.png')}}" alt=""></span>
        <span class="b-shape-6 item-animateOne"><img src="{{ asset('admin/assets/images/img/7.png')}}" alt=""></span>
    </div>
    <div class="container padding-top-120">
        <div class="row justify-content-center">
            <nav aria-label="breadcrumb text-center">
                <h2 class="page-title">blog single</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="index.html">Home </a>/<a href="index.html"> pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">blog single page</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Blog Content Section -->
<section class="blog-content-section blog-details-page padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-posts">
                    <div class="blog-single-post">
                        <div class="blog-thumbnail wow fadeInUp">
                            <img src="{{ asset('admin/assets/images/blog/blog2.jpg')}}" alt="thumbnail">
                        </div>
                        <div class="blog-content-part">
                            <div class="blog-content-top">
                                <div class="blog-date margin-right-20">
                                    <a href="#"><i class="fas fa-tag"></i> Chicken Burger</a>
                                </div>
                                <div class="blog-tag margin-right-20">
                                    <a href="#"><i class="fas fa-user-circle"></i>Miyako Prince</a>
                                </div>
                                <div class="blog-author">
                                    <a href="#"><i class="fas fa-comments"></i> 120+ Comment</a>
                                </div>
                            </div>
                            <div class="blog-title">
                                <h4>A Burger Worthy of the Presidnet at Upland</h4>
                            </div>
                            <div class="blog-content wow fadeInUp">
                                <p>Organizations today are in constant flux. Industries are consolidating, business
                                    models are emerging, new technologies are being developed, and consumer
                                    behaviors are evolving. It forces them to understand and quickly respond to big
                                    shifts in the way companies operate and how work must get done. In the words of
                                    Arie de Geus, a business theorist, The ability to learn faster than your
                                    competitors may be the only sustainable competitive advantage.</p>
                                <p class="margin-top-20">I’m not talking about relaxed armchair or even structured
                                    classroom learning. I’m talking about resisting the bias against doing new
                                    things, scanning the horizon for growth opportunities, and pushing yourse
                                    radically different capabilities—while still performing your job. That requires
                                    a willingness to experiment and become a novice again and again: an extremely
                                    discomforting notion for most of us.</p>
                                <p class="margin-top-20">Lorem ipsum dolor sit amet, consectet adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magnag aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laborinu aliquip ex ea commodo
                                    consequat. Du aute irure dolor in reprehenderit inlore voluptate velit esse
                                    cillum dolore.</p>
                            </div>
                            <div class="blog-title">
                                <h5>New Restaurant Town</h5>
                            </div>
                            <div class="blog-content  wow fadeInUp">
                                <p>We’ve identified four attributes they have in spades: aspiration, self-awareness,
                                    curiosity, and vulnerability. They truly want to understand and master new
                                    skills; they see themselves very clearly; they constantly think of and ask good
                                    questions; and they tolerate their own mistakes as they move up the learning
                                    curve.</p>
                                <div class="content-list margin-top-20">
                                    <div class="row">
                                        <div class="col-sm-6"><span class="single-list"><i
                                                    class="fa fa-arrow-circle-right"></i>Etiam commodo ultricies
                                                luctus.</span></div>
                                        <div class="col-sm-6"><span class="single-list"><i
                                                    class="fa fa-arrow-circle-right"></i>Consectetur adipisicing
                                                elit.</span></div>
                                        <div class="col-sm-6"><span class="single-list"><i
                                                    class="fa fa-arrow-circle-right"></i>Anim pariatur cliche
                                                reprehenderit.</span></div>
                                        <div class="col-sm-6"><span class="single-list"><i
                                                    class="fa fa-arrow-circle-right"></i>Investig ationes demons
                                                trave.</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-images margin-top-30">
                                <div class="row">
                                    <div class="col-sm-6 wow fadeInLeft">
                                        <div class="single-image">
                                            <img src="{{ asset('admin/assets/images/blog/blog4.jpg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 wow fadeInRight">
                                        <div class="row">
                                            <div class="col-sm-12 margin-bottom-30">
                                                <div class="single-image image-2">
                                                    <img src="{{ asset('admin/assets/images/blog/blog5.jpg')}}" alt="image">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="single-image ">
                                                    <img src="{{ asset('admin/assets/images/blog/blog6.jpg')}}" alt="image">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="single-image image-2">
                                                    <img src="{{ asset('admin/assets/images/blog/blog7.jpg')}}" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content  wow fadeInUp">
                                <p>We’ve identified four attributes they have in spades: aspiration, self-awareness,
                                    curiosity, and vulnerability. They truly want to understand and master new
                                    skills; they see themselves very clearly; they constantly think of and ask good
                                    questions; and they tolerate their own mistakes as they move up the learning
                                    curve.</p>
                            </div>
                            <div class="blog-quote margin-top-30 margin-bottom-30  wow fadeInUp">
                                <div class="quote-text">
                                    <p>A hamburger is a sandwich consisting of one or more cooked
                                        patties of ground meat usually beef, placed inside a sliced bread roll or
                                        bun.The patty may be pan fried.</p>
                                    <h6>tonmoy khan</h6>
                                </div><span class="quote-icon"><i class="fa fa-quote-right"></i></span>
                            </div>
                            <div class="blog-title">
                                <h4>Make Yourself Accountable</h4>
                            </div>
                            <div class="blog-content  wow fadeInUp">
                                <p>We’ve identified four attributes they have in spades: aspiration, self-awareness,
                                    curiosity, and vulnerability. They truly want to understand and master new
                                    skills; they see themselves very clearly; they constantly think of and ask good
                                    questions; and they tolerate their own mistakes as they move up the learning
                                    curve.</p>
                                <p class="margin-top-20">We’ve identified four attributes they have in spades:
                                    aspiration, self-awareness,curiosity, and vulnerability. They truly want to
                                    understand and master new skills; they see themselves very clearly.</p>
                            </div>
                            <div class="blog-thumbnail wow fadeInUp margin-top-30">
                                <img src="{{ asset('admin/assets/images/blog/blog4.jpg')}}" alt="image">
                            </div>
                            <div class="blog-contnet margin-top-30  wow fadeInUp">
                                <p>We’ve identified four attributes they have in spades: aspiration, self-awareness,
                                    curiosity, and vulnerability. They truly want to understand and master new
                                    skills; they see themselves very clearly; they constantly think of and ask good
                                    questions; and they tolerate their own mistakes as they move up the learning
                                    curve.</p>
                                <p class="margin-top-20">We’ve identified four attributes they have in spades:
                                    aspiration, self-awareness, curiosity, and vulnerability. They truly want to
                                    understand and master new skills; they see themselves very clearly.</p>
                            </div>
                            <div class="content-bottom margin-top-30">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="content-bottom-tag">
                                            <ul>
                                                <li>tags:</li>
                                                <li><a href="#">bbq</a></li>
                                                <li><a href="#">tikka</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="blog-social-icons">
                                            <ul>
                                                <li><span>share:</span></li>
                                                <li><a href="#"><img src="{{ asset('admin/assets/images/icons/facebook.png')}}"
                                                            alt=""></a>
                                                </li>
                                                <li><a href="#"><img src="{{ asset('admin/assets/images/icons/twitter.png')}}"
                                                            alt=""></a>
                                                </li>

                                                <li><a href="#"><img src="{{ asset('admin/assets/images/icons/inst.png')}}" alt=""></a>
                                                </li>
                                                <li><a href="#"><img src="{{ asset('admin/assets/images/icons/linkdin.png')}}"
                                                            alt=""></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- divider -->
                    <div class="divider"></div>


                    <!-- blog comment area -->
                    <div class="blog-comment-area  wow fadeInUp">
                        <div class="blog-title margin-top-30">
                            <h3>2 comments</h3>
                        </div>

                        <div class="single-comment">
                            <div class="comment-image">
                                <img src="{{ asset('admin/assets/images/testimonial/testi-1.png')}}" alt="author">
                            </div>
                            <div class="comment-content">
                                <div class="comment-content-top">
                                    <div class="content-top-left">
                                        <h6>Rumon Khan</h6>
                                        <span>30 august 2020</span>
                                    </div>
                                    <a href="#" class="reply">reply</a>
                                </div>
                                <p class="margin-top-10">A wonderful serenity has taken possession of my entire
                                    soul, like these sweet mornings of the spring which I enjoy with my whole heart.
                                </p>
                            </div>
                        </div>
                        <div class="single-comment">
                            <div class="comment-image">
                                <img src="{{ asset('admin/assets/images/testimonial/test-4.png')}}" alt="author">
                            </div>
                            <div class="comment-content">
                                <div class="comment-content-top">
                                    <div class="content-top-left">
                                        <h6>Chirs Deo</h6>
                                        <span>30 august 2020</span>
                                    </div>
                                    <a href="#" class="reply bg-secondary">reply</a>
                                </div>
                                <p class="margin-top-10">A wonderful serenity has taken possession of my entire
                                    soul, like these sweet mornings of the spring which I enjoy with my whole heart.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-comment-form margin-top-60  wow fadeInUp">
                        <div class="comment-title">
                            <h4>leave a reply</h4>
                            <form action="#">
                                <input type="text" placeholder="Your Name">
                                <input type="email" placeholder="Your Email">
                                <textarea name="message" placeholder="Write your text" id="comment-form" cols="30"
                                    rows="10"></textarea>
                                <button type="submit" class="btn margin-top-40">post comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="blog-sidebar">
                    <div class="single-widget author-widget  wow fadeInUp">
                        <img src="{{ asset('admin/assets/images/blog/user.jpg')}}" alt="image">
                        <div class="author-name margin-top-20">
                            <h5>Miyako Prince</h5>
                        </div>
                        <div class="author-content margin-top-10">
                            <p> Hi! I'm author of this post. Read my post, be in trend.</p>
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
                    <div class="single-widget search-widget  wow fadeInUp">
                        <div class="header-search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="single-widget product-widget  wow fadeInUp">
                        <h6 class="margin-bottom-10">Hot Sale Products</h6>
                        <div class="single-product d-flex align-items-center">
                            <div class="dish-img">
                                <a href="single-food.html"><img src="{{ asset('admin/assets/images/menu-item/pd6.png')}}" alt=""></a>
                            </div>
                            <div class="dish-content">
                                <h6> <a href="single-food.html">Chicken Fry
                                        Recipe
                                    </a></h6>
                                <span class="price">$10.00</span>
                                <span>
                                    <a class="cart-select" href="shopping-cart.html"><i
                                            class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="single-product d-flex align-items-center">
                            <div class="dish-img">
                                <a href="single-food.html"> <img src="{{ asset('admin/assets/images/menu-item/pd4.png')}}" alt=""></a>
                            </div>
                            <div class="dish-content">
                                <h6> <a href="single-food.html">Chicken Soup
                                        Rejala
                                    </a></h6>
                                <span class="price">$20.00</span>
                                <span>
                                    <a class="cart-select" href="shopping-cart.html"><i
                                            class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="single-product d-flex align-items-center">
                            <div class="dish-img">
                                <a href="single-food.html"> <img src="{{ asset('admin/assets/images/menu-item/pd7.png')}}" alt=""></a>
                            </div>
                            <div class="dish-content">
                                <h6> <a href="single-food.html">The Best Black
                                        Frame
                                    </a></h6>
                                <span class="price">$80.00</span>
                                <span>
                                    <a class="cart-select" href="shopping-cart.html"><i
                                            class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="single-product d-flex align-items-center">
                            <div class="dish-img">
                                <a href="single-food.html"> <img src="{{ asset('admin/assets/images/menu-item/pd8.png')}}" alt=""></a>
                            </div>
                            <div class="dish-content">
                                <h6> <a href="single-food.html">The Best Black
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
                            <h5>tags.</h5>
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
                        <h6><a href="#">filter by menu</a></h6>
                        <div class="filter-menu d-flex align-items-center">
                            <div class="dish-img">
                                <a href="single-dish.html"> <img src="{{ asset('admin/assets/images/menu-item/fm1.png')}}" alt=""></a>
                            </div>
                            <div class="dish-content d-flex justify-content-between">
                                <h6> <a href="single-dish.html">burger food
                                    </a></h6>
                                <span class="price">20</span>
                            </div>
                        </div>
                        <div class="filter-menu d-flex align-items-center">
                            <div class="dish-img">
                                <a href="single-dish.html"> <img src="{{ asset('admin/assets/images/menu-item/fm2.png')}}" alt=""></a>
                            </div>
                            <div class="dish-content d-flex justify-content-between">
                                <h6> <a href="single-dish.html">Chicken Fry
                                    </a></h6>
                                <span class="price">50</span>
                            </div>
                        </div>
                        <div class="filter-menu d-flex align-items-center">
                            <div class="dish-img">
                                <a href="single-dish.html"> <img src="{{ asset('admin/assets/images/menu-item/fm3.png')}}" alt=""></a>
                            </div>
                            <div class="dish-content d-flex justify-content-between">
                                <h6> <a href="single-dish.html">Pizza
                                    </a></h6>
                                <span class="price">20</span>
                            </div>
                        </div>
                        <div class="filter-menu d-flex align-items-center">
                            <div class="dish-img">
                                <a href="single-dish.html"> <img src="{{ asset('admin/assets/images/menu-item/fm4.png')}}" alt=""></a>
                            </div>
                            <div class="dish-content d-flex">

                                <h6> <a href="single-dish.html">Chicken fry
                                    </a></h6>

                                <span class="price">50</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget banner-widget  wow fadeInUp">
                        <div class="gallery-img-4">
                            <h5>Super Combo
                                Burger</h5>
                            <a href="shopping-cart.html" class="btn">order now</a>
                            <img src="{{ asset('admin/assets/images/gallery/22.png')}}" alt="">
                            <span class="gprice-4"><img src="{{ asset('admin/assets/images/gallery/25.png')}}" alt=""></span>
                            <span class="gshape-1"><img src="{{ asset('admin/assets/images/shapes/35.png')}}" alt=""></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection