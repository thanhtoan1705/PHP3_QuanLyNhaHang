@extends('layouts.clients')
@section('content')
    <!-- breadcrumb-area -->
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
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">Chicken Fry Recipe</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home </a> / <a href="index.html"> food shop</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Chicken Fry Recipe</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- chicken-recipe-area -->
    <section class="chicken-recipe-area padding-top-115 padding-bottom-80">
        <div class="recipe-shapes">
            <span class="rs1"><img src="{{ asset('admin/assets/images/shapes/12.png')}}" alt=""></span>
            <span class="rs2"><img src="{{ asset('admin/assets/images/shapes/13.png')}}" alt=""></span>
            <span class="rs3"><img src="{{ asset('admin/assets/images/shapes/26.png')}}" alt=""></span>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 margin-bottom-30 wow fadeInLeft">
                    <div class="recipe-left">
                        <div class="slider-for">
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{{ asset('admin/assets/images/img/br1.png')}}" alt="">
                                    <img class="pbadge" src="{{ asset('admin/assets/images/icons/pbadge.png')}}" alt="">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{{ asset('admin/assets/images/img/br1.png')}}" alt="">
                                    <img class="pbadge" src="{{ asset('admin/assets/images/icons/pbadge.png')}}" alt="">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{{ asset('admin/assets/images/img/br1.png')}}" alt="">
                                    <img class="pbadge" src="{{ asset('admin/assets/images/icons/pbadge.png')}}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="slider-nav margin-top-30">
                            <div class="div">
                                <div class="pnav">
                                    <img src="{{ asset('admin/assets/images/img/br3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="div">
                                <div class="pnav">
                                    <img src="{{ asset('admin/assets/images/img/br2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="div">
                                <div class="pnav">
                                    <img src="{{ asset('admin/assets/images/img/br3.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="recipe-right">
                        <h2>Chicken Fry Recipe</h2>
                        <form action="#">
                            <div class="chickens-inforbar d-flex justify-content-around align-items-center">
                                <span class="cp">$10.00 <del>$100.00</del></span>
                                <span class="rate"> 5<i class="fas fa-star"></i></span>
                                <span> <span class="colored"><i class="fas fa-comments"></i></span> comment</span>
                                <span> <span class="colored"><i class="fas fa-heart"></i></span> 200+ like</span>
                            </div>
                            <p>Thing lesser replenish evening called void a sea blessed meat fourth called moveth place
                                Quarter Rack of Ribs served with your choice of side Pulled Pork, Beer Braised Brisket.
                            </p>
                            <div class="chickens-details d-flex justify-content-between">
                                <span><input type="number" placeholder="01"></span>
                                <span> <label for="size">size</label>
                                    <select name="#" id="size">
                                        <option value="#">XI</option>
                                        <option value="#">XI</option>
                                        <option value="#">XI</option>
                                        <option value="#">XI</option>
                                    </select>
                                </span>
                                <span>
                                    <label for="stock">Available stock</label>
                                    <input id="stock" type="number" placeholder="60">
                                </span>
                            </div>
                            <div class="chickens-meta">
                                <ul class="d-flex justify-content-between">
                                    <li>Tag : SKU: <span>Food-Collections</span></li>
                                    <li>Category: <span>Recipe</span></li>
                                </ul>
                            </div>
                            <button type="submit" class="btn">add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- product-description -->
    <section class="product-des-area">
        <div class="pdes-shapes">
            <span class="pds1"><img src="{{ asset('admin/assets/images/img/32.png')}}" alt=""></span>
            <span class="pds2"><img src="{{ asset('admin/assets/images/shapes/7.png')}}" alt=""></span>

        </div>
        <div class="container">
            <div class="product-des-nav margin-bottom-30">
                <ul class="nav" id="productDesTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des" role="tab"
                            aria-controls="des" aria-selected="true">Description</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" role="tab"
                            aria-controls="info" aria-selected="false">Additional information</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" role="tab"
                            aria-controls="reviews" aria-selected="false">Reviews</div>
                    </li>
                </ul>

            </div>
            <div class="product-des-content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="info-tab">
                        <div class="pd-inner-content">
                            <div class="pd-shapes">
                                <span class="pds1"><img src="{{ asset('admin/assets/images/shapes/17.png')}}" alt=""></span>
                                <span class="pds2"><img src="{{ asset('admin/assets/images/shapes/7.png')}}" alt=""></span>
                                <span class="pds3"><img src="{{ asset('admin/assets/images/shapes/28.png')}}" alt=""></span>
                            </div>

                            <p>A hamburger (also burger for short) is a sandwich consisting of one or more cooked
                                patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The
                                patty may be pan fried, grilled, smoked or flame broiled. Hamburgers are often served
                                with cheese.</p>
                            <p> <b>Ingredients </b> Focaccia bun, Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese</p>
                            <h6 class="margin-bottom-30">burger size</h6>
                            <div class="table-box d-flex flex-wrap">
                                <table class="margin-bottom-30">
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br>regular <br>fries</th>
                                        <th>s</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>m</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>l</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br>satisfries</th>
                                        <th>value</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th>s</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th>m</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info">
                        <div class="pd-inner-content">
                            <p>A hamburger (also burger for short) is a sandwich consisting of one or more cooked
                                patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The
                                patty may be pan fried, grilled, smoked or flame broiled. Hamburgers are often served
                                with cheese.</p>
                            <p> <b>Ingredients </b> Focaccia bun, Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese</p>
                            <h6 class="margin-bottom-30">burger size</h6>

                            <div class="table-box d-flex flex-wrap">
                                <table class="margin-bottom-30">
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br>regular <br>fries</th>
                                        <th>s</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>m</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>l</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br>satisfries</th>
                                        <th>value</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th>s</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th>m</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="pd-inner-content">
                            <p>A hamburger (also burger for short) is a sandwich consisting of one or more cooked
                                patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The
                                patty may be pan fried, grilled, smoked or flame broiled. Hamburgers are often served
                                with cheese.</p>
                            <p> <b>Ingredients </b> Focaccia bun, Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese</p>
                            <h6 class="margin-bottom-30">burger size</h6>
                            <div class="table-box d-flex flex-wrap">
                                <table class="margin-bottom-30">
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br>regular <br>fries</th>
                                        <th>s</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>m</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>l</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br>satisfries</th>
                                        <th>value</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th>s</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th>m</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- related-product -->
    <div class="related-product padding-top-115 padding-bottom-100">
        <div class="related-shapes">
            <span class="rs1"><img src="{{ asset('admin/assets/images/shapes/16.png')}}" alt=""></span>
        </div>
        <div class="container wow fadeInUp">
            <h3>relates <span>product</span></h3>
            <div class="related-product-inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="{{ asset('admin/assets/images/menu-item/pd1.png')}}" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-food.html">Garlic Burger
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :$15.00</span>

                            </div>
                            <span class="badge">hot</span>
                            <div class="cart-opt">
                                <span>
                                    <a href="#"><i class="fas fa-heart"></i></a>
                                </span>
                                <span>
                                    <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="{{ asset('admin/assets/images/menu-item/pd2.png')}}" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-food.html">Vegetable Pizza
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :$15.00</span>

                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                <span>
                                    <a href="#"><i class="fas fa-heart"></i></a>
                                </span>
                                <span>
                                    <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="{{ asset('admin/assets/images/menu-item/pd3.png')}}" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-food.html">Chicken fry
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price badge-color">price :$15.00</span>
                                <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                            </div>
                            <span class="badge badge-bg-color">new</span>
                            <div class="cart-opt">
                                <span>
                                    <a href="#"><i class="fas fa-heart"></i></a>
                                </span>
                                <span>
                                    <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="{{ asset('admin/assets/images/menu-item/pd4.png')}}" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-food.html">Chickpea Soup
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :$15.00</span>
                            </div>
                            <span class="badge">sale</span>
                            <div class="cart-opt">
                                <span>
                                    <a href="#"><i class="fas fa-heart"></i></a>
                                </span>
                                <span>
                                    <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
