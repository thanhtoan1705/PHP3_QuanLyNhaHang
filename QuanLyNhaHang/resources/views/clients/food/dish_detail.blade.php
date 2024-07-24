@extends('layouts.clients')

@section('title', 'Chi tiết món ăn')

@section('content')
    <!-- breadcrumb-area -->
    <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="{{ asset('assets/client/images/img/5.png')}}" alt=""></span>
            <span class="b-shape-2"><img src="{{ asset('assets/client/images/img/6.png')}}" alt=""></span>
            <span class="b-shape-3"><img src="{{ asset('assets/client/images/img/7.png')}}" alt=""></span>
            <span class="b-shape-4"><img src="{{ asset('assets/client/images/img/9.png')}}" alt=""></span>
            <span class="b-shape-5"><img src="{{ asset('assets/client/images/shapes/18.png')}}" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="{{ asset('assets/client/images/img/7.png')}}" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">Công thức chiên gà</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="/">Trang chủ </a> / <a href="{{ route('dishDetail') }}"> Cửa hàng món ăn</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- chicken-recipe-area -->
    <section class="chicken-recipe-area padding-top-115 padding-bottom-80">
        <div class="recipe-shapes">
            <span class="rs1"><img src="{{ asset('assets/client/images/shapes/12.png')}}" alt=""></span>
            <span class="rs2"><img src="{{ asset('assets/client/images/shapes/13.png')}}" alt=""></span>
            <span class="rs3"><img src="{{ asset('assets/client/images/shapes/26.png')}}" alt=""></span>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 margin-bottom-30 wow fadeInLeft">
                    <div class="recipe-left">
                        <div class="slider-for">
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{{ asset('assets/client/images/img/br1.png')}}" alt="">
                                    <img class="pbadge" src="{{ asset('assets/client/images/icons/pbadge.png')}}" alt="">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{{ asset('assets/client/images/img/br1.png')}}" alt="">
                                    <img class="pbadge" src="{{ asset('assets/client/images/icons/pbadge.png')}}" alt="">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{{ asset('assets/client/images/img/br1.png')}}" alt="">
                                    <img class="pbadge" src="{{ asset('assets/client/images/icons/pbadge.png')}}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="slider-nav margin-top-30">
                            <div class="div">
                                <div class="pnav">
                                    <img src="{{ asset('assets/client/images/img/br3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="div">
                                <div class="pnav">
                                    <img src="{{ asset('assets/client/images/img/br2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="div">
                                <div class="pnav">
                                    <img src="{{ asset('assets/client/images/img/br3.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="recipe-right">
                        <h2>Công thức chiên gà</h2>
                        <form action="{{ route('cart') }}">
                            <div class="chickens-inforbar d-flex justify-content-around align-items-center">
                                <span class="cp">100.000 VNĐ <del>200.000 VNĐ</del></span>
                                <span class="rate"> 5<i class="fas fa-star"></i></span>
                                <span> <span class="colored"><i class="fas fa-comments"></i></span> Bình luận</span>
                                <span> <span class="colored"><i class="fas fa-heart"></i></span> 200+ thích</span>
                            </div>
                            <p>Thứ ít bổ sung buổi tối gọi là hư không một biển phước thịt thứ tư gọi là nơi di chuyển
                                Một phần tư sườn sườn được phục vụ kèm với thịt heo kéo, ức om bia tùy chọn.
                            </p>
                            <div class="chickens-details d-flex justify-content-between">
                                <span><input type="number" placeholder="01"></span>
                                <span> <label for="size">Kích thước</label>
                                    <select name="#" id="size">
                                        <option value="#">XI</option>
                                        <option value="#">XI</option>
                                        <option value="#">XI</option>
                                        <option value="#">XI</option>
                                    </select>
                                </span>
                                <span>
                                    <label for="stock">Cổ phiếu có sẵn</label>
                                    <input id="stock" type="number" placeholder="60">
                                </span>
                            </div>
                            <div class="chickens-meta">
                                <ul class="d-flex justify-content-between">
                                    <li>Thẻ : SKU: <span>Food-Collections</span></li>
                                    <li>danh mục: <span>Recipe</span></li>
                                </ul>
                            </div>
                            <button type="submit" class="btn">Thêm vào giỏ hàng</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- product-description -->
    <section class="product-des-area">
        <div class="pdes-shapes">
            <span class="pds1"><img src="{{ asset('assets/client/images/img/32.png')}}" alt=""></span>
            <span class="pds2"><img src="{{ asset('assets/client/images/shapes/7.png')}}" alt=""></span>

        </div>
        <div class="container">
            <div class="product-des-nav margin-bottom-30">
                <ul class="nav" id="productDesTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des" role="tab"
                            aria-controls="des" aria-selected="true">Mô tả</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" role="tab"
                            aria-controls="info" aria-selected="false">Thông tin thêm</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" role="tab"
                            aria-controls="reviews" aria-selected="false">Đánh giá</div>
                    </li>
                </ul>

            </div>
            <div class="product-des-content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="info-tab">
                        <div class="pd-inner-content">
                            <div class="pd-shapes">
                                <span class="pds1"><img src="{{ asset('assets/client/images/shapes/17.png')}}" alt=""></span>
                                <span class="pds2"><img src="{{ asset('assets/client/images/shapes/7.png')}}" alt=""></span>
                                <span class="pds3"><img src="{{ asset('assets/client/images/shapes/28.png')}}" alt=""></span>
                            </div>

                            <p>Hamburger (hay còn gọi tắt là burger) là một loại bánh sandwich bao gồm một hoặc nhiều miếng được nấu chín.
                                miếng thịt xay, thường là thịt bò, đặt bên trong ổ bánh mì hoặc bánh mì cắt lát. Các
                                patty có thể được chiên áp chảo, nướng, hun khói hoặc nướng trên lửa. Bánh mì kẹp thịt thường được phục vụ
                                với phô mai.</p>
                                <p> <b>Thành phần </b> Bánh mì Focaccia, Sốt Balsamic, Pesto, Cà chua, Phô mai Thụy Sĩ</p>
                            <h6 class="margin-bottom-30">Kích thước burger</h6>
                            <div class="table-box d-flex flex-wrap">
                                <table class="margin-bottom-30">
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br><br>khoai tây chiên</th> thông thường
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
                                        <th rowpan="3" class="heading">bánh mì kẹp thịt <br>vua <br>thỏa mãn</th>                                        <th>value</th>
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
                            <p>Hamburger (hay còn gọi tắt là burger) là một loại bánh sandwich bao gồm một hoặc nhiều miếng được nấu chín.
                                miếng thịt xay, thường là thịt bò, đặt bên trong ổ bánh mì hoặc bánh mì cắt lát. Các
                                patty có thể được chiên áp chảo, nướng, hun khói hoặc nướng trên lửa. Bánh mì kẹp thịt thường được phục vụ
                                với phô mai.</p>
                                <p> <b>Thành phần </b> Bánh mì Focaccia, Sốt Balsamic, Pesto, Cà chua, Phô mai Thụy Sĩ</p>                            <h6 class="margin-bottom-30">burger size</h6>

                            <div class="table-box d-flex flex-wrap">
                                <table class="margin-bottom-30">
                                    <tr>
                                        <th rowpan="3" class="heading">bánh mì kẹp thịt <br>king <br><br>khoai tây chiên</th> thông thường                                        <th>s</th>
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
                                        <th rowpan="3" class="heading">bánh mì kẹp thịt <br>vua <br>thỏa mãn</th>                                        <th>value</th>
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
                            <label for="">Ghi bình luận</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Vui lòng nhập đánh giá"></textarea>
                            <button class="btn btn-danger mt-3">Gửi bình luận</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- related-product -->
    <div class="related-product padding-top-115 padding-bottom-100">
        <div class="related-shapes">
            <span class="rs1"><img src="{{ asset('assets/client/images/shapes/16.png')}}" alt=""></span>
        </div>
        <div class="container wow fadeInUp">
            <h3>liên quan đến <span>sản phẩm</span></h3>
            <div class="related-product-inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="{{ asset('assets/client/images/menu-item/pd1.png')}}" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-food.html">Burger tỏi
                                    </a></h5>
                                    <p>Một thực tế đã được xác nhận từ lâu là một độc giả thích ăn món BBQ Gà.</p>
                                    <span class="price">giá : 200.00 VNĐ</span>

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
                                <img src="{{ asset('assets/client/images/menu-item/pd2.png')}}" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-food.html">Pizza rau
                                    </a></h5>
                                    <p>Một thực tế đã được xác nhận từ lâu là một độc giả thích ăn món BBQ Gà.</p>
                                <span class="price">giá : 200.00 VNĐ</span>

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
                                <img src="{{ asset('assets/client/images/menu-item/pd3.png')}}" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-food.html">Gà chiên
                                    </a></h5>
                                <p>Đó là một thực tế lâu dài rằng một độc giả món ăn BBQ Gà.</p>
                                <span class="price badge-color">giá : 200.00 VNĐ</span>
                                <span class="rating"> <i class="fas fa-star"></i> 5 sao</span>
                            </div>
                            <span class="badge badge-bg-color">mới</span>
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
                                <img src="{{ asset('assets/client/images/menu-item/pd4.png')}}" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-food.html">Súp gà
                                    </a></h5>
                                    <p>Đó là một thực tế lâu dài rằng một độc giả món ăn BBQ Gà.</p>
                                    <span class="price">giá : 200.00 VNĐ</span>
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
