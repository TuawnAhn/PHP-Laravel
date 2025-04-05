@extends('layouts.client')

@section('title', 'VINETA SALE - ĐỒNG GIÁ TOÀN BỘ SẢN PHẨM 99K ⚡ 149K ⚡ 199K')

@section('content')
    <!-- Nội dung chính của trang chủ -->
    <section class="tf-slideshow slider-fashion-1 slider-default">
        <div class="swiper tf-sw-slideshow slider-effect-fade" data-effect="fade" data-preview="1" data-tablet="1"
            data-mobile="1" data-centered="false" data-space="0" data-space-mb="0" data-loop="true" data-auto-play="true"
            data-speed="800">
            <!-- resources/views/client/slider.blade.php -->

            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        <div
                            class="slider-wrap {{ $loop->iteration == 1 ? 'bg-type-1' : ($loop->iteration == 2 ? 'bg-type-2' : 'bg-type-3') }}">
                            <div class="image">
                                <!-- Sử dụng getImageUrlAttribute để lấy đường dẫn đầy đủ của ảnh -->
                                <img src="{{ $banner->imageUrl }}" data-src="{{ $banner->imageUrl }}" alt="slider"
                                    class="lazyload">
                            </div>
                            <div class="box-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-12 col-sm-6">
                                            <div class="content-slider">
                                                <div class="box-title-slider">
                                                    <h2 class="heading fw-medium fade-item fade-item-1 text-dark-5">
                                                        {{ $banner->name }}
                                                    </h2>
                                                    <p class="sub text-md fade-item fade-item-2 text-dark-5">
                                                        This is a description for the banner.
                                                    </p>
                                                </div>
                                                <div class="box-btn-slider fade-item fade-item-3">
                                                    <a href="{{ url('shop-default') }}"
                                                        class="tf-btn btn-dark2 animate-btn">
                                                        Shop Collection
                                                        <i class="icon icon-arr-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="wrap-pagination">
                <div class="container">
                    <div class="sw-dots sw-pagination-slider justify-content-center"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Slider -->
    <!-- Collection -->
    <div class="pt-24">
        <div class="container">
            <div class="fl-control-sw2">
                <div dir="ltr" class="swiper tf-swiper wow fadeInUp"
                    data-swiper='{
                    "slidesPerView": 1,
                    "spaceBetween": 12,
                    "speed": 800,
                    "observer": true,
                    "observeParents": true,
                    "slidesPerGroup": 1,
                    "navigation": {
                        "clickable": true,
                        "nextEl": ".nav-next-cls",
                        "prevEl": ".nav-prev-cls"
                    },
                    "pagination": { "el": ".sw-pagination-cls", "clickable": true },
                    "breakpoints": {
                    "575": { "slidesPerView": 2, "spaceBetween": 12 ,"slidesPerGroup": 2 },
                    "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                    "1200": { "slidesPerView": 3, "spaceBetween": 24, "slidesPerGroup": 3}
                    }
                }'>
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="wg-cls style-abs asp-1 hover-img">
                                <a href="shop-default.html" class="image img-style d-block">
                                    <img src="{{ asset('client/images/cls-Danh mục/fashion/top.jpg') }}"
                                        data-src="{{ asset('client/images/cls-categories/fashion/top.jpg') }}"
                                        alt="" class="lazyload">
                                </a>
                                <div class="cls-btn text-center">
                                    <a href="shop-default.html" class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                        Tops
                                        <i class="icon icon-arrow-top-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="wg-cls style-abs asp-1 hover-img">
                                <a href="shop-default.html" class="image img-style d-block">
                                    <img src="{{ asset('client/images/cls-categories/fashion/accessories.jpg') }}"
                                        data-src="{{ asset('client/images/cls-categories/fashion/accessories.jpg') }}"
                                        alt="" class="lazyload">
                                </a>
                                <div class="cls-btn text-center">
                                    <a href="shop-default.html" class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                        Accessories
                                        <i class="icon icon-arrow-top-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="wg-cls style-abs asp-1 hover-img">
                                <a href="shop-default.html" class="image img-style d-block">
                                    <img src="{{ asset('client/images/cls-categories/fashion/sportwear.jpg') }}"
                                        data-src="{{ asset('client/images/cls-categories/fashion/sportwear.jpg') }}"
                                        alt="" class="lazyload">
                                </a>
                                <div class="cls-btn text-center">
                                    <a href="shop-default.html" class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                        Sportwear
                                        <i class="icon icon-arrow-top-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="wg-cls style-abs asp-1 hover-img">
                                <a href="shop-default.html" class="image img-style d-block">
                                    <img src="{{ asset('client/images/cls-categories/fashion/men.jpg') }}"
                                        data-src="{{ asset('client/images/cls-categories/fashion/men.jpg') }}"
                                        alt="" class="lazyload">
                                </a>
                                <div class="cls-btn text-center">
                                    <a href="shop-default.html" class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                        Men
                                        <i class="icon icon-arrow-top-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 5 -->
                        <div class="swiper-slide">
                            <div class="wg-cls style-abs asp-1 hover-img">
                                <a href="shop-default.html" class="image img-style d-block">
                                    <img src="{{ asset('client/images/cls-categories/fashion/kid.jpg') }}"
                                        data-src="{{ asset('client/images/cls-categories/fashion/kid.jpg') }}"
                                        alt="" class="lazyload">
                                </a>
                                <div class="cls-btn text-center">
                                    <a href="shop-default.html" class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                        Kids
                                        <i class="icon icon-arrow-top-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex d-xxl-none sw-dot-default sw-pagination-cls justify-content-center"></div>
                </div>
                <div class="d-none d-xxl-flex swiper-button-next nav-swiper nav-next-cls"></div>
                <div class="d-none d-xxl-flex swiper-button-prev nav-swiper nav-prev-cls"></div>
            </div>

        </div>
    </div>
    <!-- /Collection -->
    <!-- Sellers -->
    <section class="flat-spacing-3 overflow-hidden">
        <div class="container">
            <div class="flat-title wow fadeInUp">
                <h4 class="title">Bán chạy nhất</h4>
            </div>
            <div class="fl-control-sw2 wrap-pos-nav sw-over-product wow fadeInUp">
                <div dir="ltr" class="swiper tf-swiper wrap-sw-over"
                    data-swiper='{
                        "slidesPerView": 2,
                        "spaceBetween": 12,
                        "speed": 800,
                        "slidesPerGroup": 2,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-seller",
                            "prevEl": ".nav-prev-seller"
                        },
                        "pagination": { "el": ".sw-pagination-seller", "clickable": true },
                        "breakpoints": {
                        "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                        "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4}
                        }
                    }'>
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="card-product card-product-size">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="img-product lazyload"
                                            data-src="{{ asset('client/images/products/fashion/product-3.jpg') }}"
                                            src="{{ asset('client/images/products/fashion/product-3.jpg') }}"
                                            alt="image-product">
                                        <img class="img-hover lazyload"
                                            data-src="{{ asset('client/images/products/fashion/product-4.jpg') }}"
                                            src="{{ asset('client/images/products/fashion/product-4.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="on-sale-wrap"><span class="on-sale-item">20% Off</span></div>
                                    <ul class="list-product-btn">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-cart2"></span>
                                                <span class="tooltip">Add to Cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart2"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="hover-tooltip tooltip-left box-icon quickview">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="modal"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="size-box">
                                        <li class="size-item text-xs text-white">XS</li>
                                        <li class="size-item text-xs text-white">S</li>
                                        <li class="size-item text-xs text-white">M</li>
                                        <li class="size-item text-xs text-white">L</li>
                                        <li class="size-item text-xs text-white">XL</li>
                                        <li class="size-item text-xs text-white">2XL</li>
                                    </ul>
                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.html" class="name-product link fw-medium text-md">Turtleneck
                                        T-shirt</a>
                                    <p class="price-wrap fw-medium">
                                        <span class="price-new text-primary">$100.00</span>
                                        <span class="price-old text-dark ">$130.00</span>
                                    </p>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Yellow</span>
                                            <span class="swatch-value bg-yellow"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/product-3.jpg"
                                                src="images/products/fashion/product-3.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Grey</span>
                                            <span class="swatch-value bg-grey-4"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/product-6.jpg"
                                                src="images/products/fashion/product-6.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot line">
                                            <span class="tooltip color-filter">White</span>
                                            <span class="swatch-value bg-white"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/product-4.jpg"
                                                src="images/products/fashion/product-4.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="card-product out-of-stock">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="img-product lazyload"
                                            data-src="{{ asset('client/images/products/fashion/product-29.jpg') }}"
                                            src="{{ asset('client/images/products/fashion/product-29.jpg') }}"
                                            alt="image-product">
                                        <img class="img-hover lazyload"
                                            data-src="{{ asset('client/images/products/fashion/product-29.jpg') }}"
                                            src="{{ asset('client/images/products/fashion/product-29.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <div class="on-sale-wrap"><span class="on-sale-item trending">Trending</span>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.html" class="name-product link fw-medium text-md">Loose
                                        Fit Tee</a>
                                    <p class="price-wrap fw-medium">
                                        <span class="price-new text-primary">$120.00</span>
                                        <span class="price-old text-dark">$100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="card-product card-product-size">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="img-product lazyload"
                                            data-src="{{ asset('client/images/products/fashion/product-1.jpg') }}"
                                            src="{{ asset('client/images/products/fashion/product-1.jpg') }}"
                                            alt="image-product">
                                        <img class="img-hover lazyload"
                                            data-src="{{ asset('client/images/products/fashion/product-5.jpg') }}"
                                            src="{{ asset('client/images/products/fashion/product-5.jpg') }}"
                                            alt="image-product">
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="hover-tooltip tooltip-left box-icon quickview">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="on-sale-wrap"><span class="on-sale-item">10% Off</span></div>
                                        <div class="countdown-box">
                                            <div class="js-countdown" data-timer="1007500"
                                                data-labels="D  :,H  :,M  :,S">
                                            </div>
                                        </div>
                                        <ul class="size-box">
                                            <li class="size-item text-xs text-white">S</li>
                                            <li class="size-item text-xs text-white">M</li>
                                            <li class="size-item text-xs text-white">L</li>
                                            <li class="size-item text-xs text-white">XL</li>
                                        </ul>

                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.html" class="name-product link fw-medium text-md">Crop
                                        T-shirt</a>
                                    <p class="price-wrap fw-medium">
                                        <span class="price-new text-primary">$120.00</span>
                                        <span class="price-old text-dark ">$140.00</span>
                                    </p>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot line active">
                                            <span class="tooltip color-filter">White</span>
                                            <span class="swatch-value bg-white"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/product-1.jpg"
                                                src="images/products/fashion/product-1.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Grey</span>
                                            <span class="swatch-value bg-grey-4"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/product-5.jpg"
                                                src="images/products/fashion/product-5.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Black</span>
                                            <span class="swatch-value bg-dark"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/product-22.jpg"
                                                src="images/products/fashion/product-22.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="img-product lazyload"
                                            data-src="{{ asset('client/images/products/fashion/product-4.jpg') }}"
                                            src="{{ asset('client/images/products/fashion/product-4.jpg') }}"
                                            alt="image-product">
                                        <img class="img-hover lazyload"
                                            data-src="{{ asset('client/images/products/fashion/product-4.jpg') }}"
                                            src="{{ asset('client/images/products/fashion/product-4.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <ul class="list-product-btn">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                class="box-icon hover-tooltip tooltip-left">
                                                <span class="icon icon-cart2"></span>
                                                <span class="tooltip">Add to Cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                                <span class="icon icon-heart2"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="box-icon quickview hover-tooltip tooltip-left">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="modal"
                                                class="box-icon hover-tooltip tooltip-left">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="on-sale-wrap"><span class="on-sale-item">10% Off</span></div>
                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.html" class="name-product link fw-medium text-md">Short
                                        Sleeve Sweat</a>
                                    <p class="price-wrap fw-medium">
                                        <span class="price-new text-primary">$80.00</span>
                                        <span class=" price-old text-dark ">$100.00</span>
                                    </p>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch hover-tooltip line tooltip-bot active">
                                            <span class="tooltip color-filter">White</span>
                                            <span class="swatch-value bg-white"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/product-4.jpg"
                                                src="images/products/fashion/product-4.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Purple</span>
                                            <span class="swatch-value bg-light-purple-3"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/product-23.jpg"
                                                src="images/products/fashion/product-23.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- item 5 -->
                        <div class="swiper-slide">
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="img-product lazyload"
                                            data-src="{{ asset('client/images/products/fashion/women-yellow-2.jpg') }}"
                                            src="{{ asset('client/images/products/fashion/women-yellow-2.jpg') }}"
                                            alt="image-product">
                                        <img class="img-hover lazyload"
                                            data-src="{{ asset('client/images/products/fashion/product-28.jpg') }}"
                                            src="{{ asset('client/images/products/fashion/product-28.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <ul class="list-product-btn">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                class="box-icon hover-tooltip tooltip-left">
                                                <span class="icon icon-cart2"></span>
                                                <span class="tooltip">Add to Cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                                <span class="icon icon-heart2"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="box-icon quickview hover-tooltip tooltip-left">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="modal"
                                                class="box-icon hover-tooltip tooltip-left">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.html" class="name-product link fw-medium text-md">Puff
                                        Sleeve Shirred Blouse</a>
                                    <p class="price-wrap fw-medium">
                                        <span class="price-new">$80.00</span>
                                    </p>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Yellow</span>
                                            <span class="swatch-value bg-yellow-2"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/women-yellow-2.jpg"
                                                src="images/products/fashion/women-yellow-2.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Light Orange</span>
                                            <span class="swatch-value bg-light-orange-2"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/product-28.jpg"
                                                src="images/products/fashion/product-28.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Beige</span>
                                            <span class="swatch-value bg-beige"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/product-7.jpg"
                                                src="images/products/fashion/product-7.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- item 6 -->
                        <div class="swiper-slide">
                            <div class="card-product card-product-size">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="img-product lazyload"
                                            data-src="{{ asset('client/images/products/fashion/product-26.jpg') }}"
                                            src="{{ asset('client/images/products/fashion/product-26.jpg') }}"
                                            alt="image-product">
                                        <img class="img-hover lazyload"
                                            data-src="{{ asset('client/images/products/fashion/product-26.jpg') }}""
                                            src="{{ asset('client/images/products/fashion/product-26.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <ul class="list-product-btn">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                class="box-icon hover-tooltip tooltip-left">
                                                <span class="icon icon-cart2"></span>
                                                <span class="tooltip">Add to Cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                                <span class="icon icon-heart2"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="box-icon quickview hover-tooltip tooltip-left">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="modal"
                                                class="box-icon hover-tooltip tooltip-left">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="size-box">
                                        <li class="size-item text-xs text-white">S</li>
                                        <li class="size-item text-xs text-white">M</li>
                                        <li class="size-item text-xs text-white">L</li>
                                    </ul>

                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.html" class="name-product link fw-medium text-md">Printed
                                        T-shirt</a>
                                    <p class="price-wrap fw-medium">
                                        <span class="price-new">$120.00</span>
                                    </p>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch line hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">White</span>
                                            <span class="swatch-value bg-white"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/product-26.jpg"
                                                src="images/products/fashion/product-26.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Grey</span>
                                            <span class="swatch-value bg-grey-4"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/women-grey-1.jpg"
                                                src="images/products/fashion/women-grey-1.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Black</span>
                                            <span class="swatch-value bg-dark"></span>
                                            <img class=" lazyload" data-src="images/products/fashion/women-black-6.jpg"
                                                src="images/products/fashion/women-black-6.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex d-xxl-none mt_5 sw-dot-default sw-pagination-seller justify-content-center">
                    </div>
                </div>
                <div class="d-none d-xxl-flex swiper-button-next nav-swiper nav-next-seller"></div>
                <div class="d-none d-xxl-flex swiper-button-prev nav-swiper nav-prev-seller"></div>
            </div>
        </div>
    </section>
    <!-- /Sellers -->

    <!-- Banner Countdown -->
    <section>
        <div class="container">
            <div class="s-banner-countdown banner-cd-fashion">
                <div class="image">
                    <img src="{{ asset('client/images/banner/fashion-1.jpg') }}"
                        data-src="{{ asset('client/images/banner/fashion-1.jpg') }}" alt="" class="lazyload">
                </div>
                <div class="banner-content text-center">
                    <div class="box-title wow fadeInUp">
                        <p class="season text-md fw-medium">
                            SUMMER SALE
                        </p>
                        <h2 class="fw-medium">
                            50% OFF
                        </h2>
                        <p class="sub text-md fw-medium">
                            WITH PROMOTE CODE: 12D34E
                        </p>
                    </div>
                    <div class="box-countdown d-flex justify-content-center wow fadeInUp">
                        <div class="wg-countdown-2">
                            <span class="js-countdown " data-timer="46556" data-labels="Days,Hours,Mins,Secs"></span>
                        </div>
                    </div>
                    <div class="box-btn wow fadeInUp">
                        <a href="shop-collectio n-list.html" class="tf-btn btn-white hover-primary">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banner Countdown -->

    <!-- Danh mục -->
    <section class="flat-spacing-3">
        <div class="container">
            <div class="flat-animate-tab">
                <div class="flat-title-tab-categories wow fadeInUp text-center">
                    <h4 class="title">Danh mục</h4>
                    <ul class="menu-tab-line justify-content-center" role="tablist">
                        <li class="nav-tab-item" role="presentation">
                            <a href="#women" class="tab-link active" data-bs-toggle="tab">Women</a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#men" class="tab-link" data-bs-toggle="tab">Men</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active show" id="women" role="tabpanel">
                        <div dir="ltr" class="xl-px-26 swiper tf-swiper"
                            data-swiper='{
                                "slidesPerView": 2,
                                "spaceBetween": 12,
                                "speed": 800,
                                "observer": true,
                                "observeParents": true,
                                "slidesPerGroup": 2,
                                "navigation": {
                                    "clickable": true,
                                    "nextEl": ".nav-next-women",
                                    "prevEl": ".nav-prev-women"
                                },
                                "pagination": { "el": ".sw-pagination-women", "clickable": true },
                                "breakpoints": {
                                "575": { "slidesPerView": 3, "spaceBetween": 12 ,"slidesPerGroup": 2 },
                                "768": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 3 },
                                "1200": { "slidesPerView": 6, "spaceBetween": 64, "slidesPerGroup": 3}
                                }
                            }'>
                            <div class="swiper-wrapper">
                                <!-- item 1 -->
                                <div class="swiper-slide">
                                    <div class="wg-cls style-circle hover-img">
                                        <a href="shop-sub-collection.html" class="image img-style d-block">
                                            <img src="{{ asset('client/images/cls-categories/fashion/circle-dress.jpg') }}"
                                                data-src="{{ asset('client/images/cls-categories/fashion/circle-dress.jpg') }}"
                                                alt="categories" class="lazyload">
                                        </a>
                                        <div class="cls-content text-center">
                                            <a href="shop-sub-collection.html" class="link text-md fw-medium">Dress</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item 2 -->
                                <div class="swiper-slide">
                                    <div class="wg-cls style-circle hover-img">
                                        <a href="shop-sub-collection.html" class="image img-style d-block">
                                            <img src="{{ asset('client/images/cls-categories/fashion/circle-partywear.jpg') }}"
                                                data-src="{{ asset('client/images/cls-categories/fashion/circle-partywear.jpg') }}"
                                                alt="categories" class="lazyload">
                                        </a>
                                        <div class="cls-content text-center">
                                            <a href="shop-sub-collection.html"
                                                class="link text-md fw-medium">Partywear</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item 3 -->
                                <div class="swiper-slide">
                                    <div class="wg-cls style-circle hover-img">
                                        <a href="shop-sub-collection.html" class="image img-style d-block">
                                            <img src="{{ asset('client/images/cls-categories/fashion/circle-jewelry.jpg') }}"
                                                data-src="{{ asset('client/images/cls-categories/fashion/circle-jewelry.jpg') }}"
                                                alt="categories" class="lazyload">
                                        </a>
                                        <div class="cls-content text-center">
                                            <a href="shop-sub-collection.html" class="link text-md fw-medium">Jewelry</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item 4 -->
                                <div class="swiper-slide">
                                    <div class="wg-cls style-circle hover-img">
                                        <a href="shop-sub-collection.html" class="image img-style d-block">
                                            <img src="{{ asset('client/images/cls-categories/fashion/circle-tops.jpg') }}"
                                                data-src="{{ asset('client/images/cls-categories/fashion/circle-tops.jpg') }}"
                                                alt="categories" class="lazyload">
                                        </a>
                                        <div class="cls-content text-center">
                                            <a href="shop-sub-collection.html" class="link text-md fw-medium">Tops</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item 5 -->
                                <div class="swiper-slide">
                                    <div class="wg-cls style-circle hover-img">
                                        <a href="shop-sub-collection.html" class="image img-style d-block">
                                            <img src="{{ asset('client/images/cls-categories/fashion/circle-bottoms.jpg') }}"
                                                data-src="{{ asset('client/images/cls-categories/fashion/circle-bottoms.jpg') }}"
                                                alt="categories" class="lazyload">
                                        </a>
                                        <div class="cls-content text-center">
                                            <a href="shop-sub-collection.html" class="link text-md fw-medium">Bottoms</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item 6 -->
                                <div class="swiper-slide">
                                    <div class="wg-cls style-circle hover-img">
                                        <a href="shop-sub-collection.html" class="image img-style d-block">
                                            <img src="{{ asset('client/images/cls-categories/fashion/circle-sportwear.jpg') }}"
                                                data-src="{{ asset('client/images/cls-categories/fashion/circle-sportwear.jpg') }}"
                                                alt="categories" class="lazyload">
                                        </a>
                                        <div class="cls-content text-center">
                                            <a href="shop-sub-collection.html"
                                                class="link text-md fw-medium">Sportwear</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <span
                                class="d-flex d-xl-none sw-dot-default sw-pagination-women justify-content-center"></span>
                        </div>
                    </div>
                    <div class="tab-pane" id="men" role="tabpanel">
                        <div dir="ltr" class="xl-px-26 swiper tf-swiper"
                            data-swiper='{
                                "slidesPerView": 2,
                                "spaceBetween": 12,
                                "speed": 800,
                                "observer": true,
                                "observeParents": true,
                                "slidesPerGroup": 2,
                                "navigation": {
                                    "clickable": true,
                                    "nextEl": ".nav-next-men",
                                    "prevEl": ".nav-prev-men"
                                },
                                "pagination": { "el": ".sw-pagination-men", "clickable": true },
                                "breakpoints": {
                                "575": { "slidesPerView": 3, "spaceBetween": 12 ,"slidesPerGroup": 2 },
                                "768": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 3 },
                                "1200": { "slidesPerView": 6, "spaceBetween": 64, "slidesPerGroup": 3}
                                }
                            }'>
                            <div class="swiper-wrapper">
                                <!-- item 1 -->
                                <div class="swiper-slide">
                                    <div class="wg-cls style-circle hover-img">
                                        <a href="shop-sub-collection.html" class="image img-style d-block">
                                            <img src="images/cls-categories/fashion/circle-sportwear.jpg"
                                                data-src="images/cls-categories/fashion/circle-sportwear.jpg"
                                                alt="categories" class="lazyload">
                                        </a>
                                        <div class="cls-content text-center">
                                            <a href="shop-sub-collection.html"
                                                class="link text-md fw-medium">Sportwear</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item 2 -->
                                <div class="swiper-slide">
                                    <div class="wg-cls style-circle hover-img">
                                        <a href="shop-sub-collection.html" class="image img-style d-block">
                                            <img src="images/cls-categories/fashion/circle-dress.jpg"
                                                data-src="images/cls-categories/fashion/circle-dress.jpg" alt="categories"
                                                class="lazyload">
                                        </a>
                                        <div class="cls-content text-center">
                                            <a href="shop-sub-collection.html" class="link text-md fw-medium">Dress</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item 3 -->
                                <div class="swiper-slide">
                                    <div class="wg-cls style-circle hover-img">
                                        <a href="shop-sub-collection.html" class="image img-style d-block">
                                            <img src="images/cls-categories/fashion/circle-partywear.jpg"
                                                data-src="images/cls-categories/fashion/circle-partywear.jpg"
                                                alt="categories" class="lazyload">
                                        </a>
                                        <div class="cls-content text-center">
                                            <a href="shop-sub-collection.html"
                                                class="link text-md fw-medium">Partywear</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item 4 -->
                                <div class="swiper-slide">
                                    <div class="wg-cls style-circle hover-img">
                                        <a href="shop-sub-collection.html" class="image img-style d-block">
                                            <img src="images/cls-categories/fashion/circle-jewelry.jpg"
                                                data-src="images/cls-categories/fashion/circle-jewelry.jpg"
                                                alt="categories" class="lazyload">
                                        </a>
                                        <div class="cls-content text-center">
                                            <a href="shop-sub-collection.html" class="link text-md fw-medium">Jewelry</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item 5 -->
                                <div class="swiper-slide">
                                    <div class="wg-cls style-circle hover-img">
                                        <a href="shop-sub-collection.html" class="image img-style d-block">
                                            <img src="images/cls-categories/fashion/circle-bottoms.jpg"
                                                data-src="images/cls-categories/fashion/circle-bottoms.jpg"
                                                alt="categories" class="lazyload">
                                        </a>
                                        <div class="cls-content text-center">
                                            <a href="shop-sub-collection.html" class="link text-md fw-medium">Bottoms</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item 6 -->
                                <div class="swiper-slide">
                                    <div class="wg-cls style-circle hover-img">
                                        <a href="shop-sub-collection.html" class="image img-style d-block">
                                            <img src="images/cls-categories/fashion/circle-tops.jpg"
                                                data-src="images/cls-categories/fashion/circle-tops.jpg" alt="categories"
                                                class="lazyload">
                                        </a>
                                        <div class="cls-content text-center">
                                            <a href="shop-sub-collection.html" class="link text-md fw-medium">Tops</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <span class="d-flex d-xl-none sw-dot-default sw-pagination-men justify-content-center"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Danh mục -->

    <!-- Sản phẩm mới nhất  -->
    <section class="flat-spacing-3 pt-0 overflow-hidden">
        <div class="container">
            <div class="flat-title wow fadeInUp">
                <h4 class="title">Sản phẩm mới nhất </h4>
            </div>
            <div class="fl-control-sw2 wrap-pos-nav sw-over-product wow fadeInUp">
                <div dir="ltr" class="swiper tf-swiper wrap-sw-over"
                    data-swiper='{
                        "slidesPerView": 2,
                        "spaceBetween": 12,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 2,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-top-pick",
                            "prevEl": ".nav-prev-top-pick"
                        },
                        "pagination": { "el": ".sw-pagination-top-pick", "clickable": true },
                        "breakpoints": {
                        "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                        "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4}
                        }
                    }'>
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        @foreach ($products as $product)
                            <div class="swiper-slide">
                                <div class="card-product card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="{{ asset('storage/' . $product->hinh_anh) }}"
                                                src="{{ asset('storage/' . $product->hinh_anh) }}" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="{{ asset('storage/' . $product->hinh_anh) }}"
                                                src="{{ asset('storage/' . $product->hinh_anh) }}" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">20% Off</span></div>
                                        <!-- buttons -->
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="hover-tooltip tooltip-left box-icon quickview">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="size-box">
                                            <li class="size-item text-xs text-white">XS</li>
                                            <li class="size-item text-xs text-white">S</li>
                                            <li class="size-item text-xs text-white">M</li>
                                            <li class="size-item text-xs text-white">L</li>
                                            <li class="size-item text-xs text-white">XL</li>
                                            <li class="size-item text-xs text-white">2XL</li>
                                        </ul>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">
                                            {{ $product->ten_san_pham }}</a>
                                        <p class="price-wrap fw-medium">
                                            <span
                                                class="price-new text-primary">{{ number_format($product->gia, 0, ',', '.') }}
                                                VND</span>
                                            <span
                                                class="price-old">{{ number_format($product->gia_khuyen_mai, 0, ',', '.') }}
                                                VND</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot line active">
                                                <span class="tooltip color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" lazyload"
                                                    data-src="{{ asset('client/images/products/fashion/product-29.jpg') }}"
                                                    src="{{ asset('client/images/products/fashion/product-29.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Grey</span>
                                                <span class="swatch-value bg-grey-4"></span>
                                                <img class=" lazyload"
                                                    data-src="{{ asset('client/images/products/fashion/product-6.jpg') }}"
                                                    src="{{ asset('client/images/products/fashion/product-6.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Black</span>
                                                <span class="swatch-value bg-dark"></span>
                                                <img class=" lazyload"
                                                    data-src="{{ asset('client/images/products/fashion/product-20.jpg') }}"
                                                    src="{{ asset('client/images/products/fashion/product-20.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex d-xxl-none mt_5 sw-dot-default sw-pagination-top-pick justify-content-center">
                    </div>
                </div>
                <div class="d-none d-xxl-flex swiper-button-next nav-swiper nav-next-top-pick"></div>
                <div class="d-none d-xxl-flex swiper-button-prev nav-swiper nav-prev-top-pick"></div>
            </div>
        </div>
    </section>
    <!-- /Today’s Picks -->

    <!-- Testimonial -->
    <section>
        <div class="container">
            <div class="flat-title wow fadeInUp">
                <h4 class="title">Khách hàng hài lòng
                </h4>
            </div>
            <div dir="ltr" class="swiper tf-swiper "
                data-swiper='{
                    "slidesPerView": 1,
                    "spaceBetween": 12,
                    "speed": 800,
                    "observer": true,
                    "observeParents": true,
                    "slidesPerGroup": 1,
                    "pagination": { "el": ".sw-pagination-tes", "clickable": true },
                    "breakpoints": {
                    "768": { "slidesPerView": 2, "spaceBetween": 24, "slidesPerGroup": 2 },
                    "1200": { "slidesPerView": 3, "spaceBetween": 24, "slidesPerGroup": 3}
                    }
                }'>
                <div class="swiper-wrapper">
                    @foreach ($topReviews as $review)
                        <div class="swiper-slide">
                            <div class="wg-testimonial wow fadeInLeft">
                                <div class="content">
                                    <div class="content-top">
                                        <div class="box-author">
                                            <p class="name-author text-sm fw-medium">{{ $review->customer->name }}</p>
                                            <div class="box-verified text-main">
                                                <i class="icon-verifi"></i>
                                                <p class="text-xs fst-italic">
                                                    Người mua đã xác minh
                                                </p>
                                            </div>
                                        </div>
                                        <div class="list-star-default">
                                            @for ($i = 0; $i < $review->rating; $i++)
                                                <i class="icon-star"></i>
                                            @endfor
                                            @for ($i = $review->rating; $i < 5; $i++)
                                                <i class="icon-star-empty"></i>
                                            @endfor
                                        </div>
                                        <p class="text-review text-sm text-main">
                                            {{ $review->content }}
                                        </p>
                                    </div>
                                    <span class="br-line d-block"></span>
                                    <div class="box-avt">
                                        <div class="avatar">
                                            <img src="{{ asset('storage/' . $review->product->hinh_anh) }}"
                                                alt="author">
                                        </div>
                                        <div class="box-price">
                                            <p class="name-item text-xs">
                                                Item purchased: <a href="product-detail.html"
                                                    class="fw-medium text-sm link text-line-clamp-1">{{ $review->product->ten_san_pham }}</a>
                                            </p>
                                            <p class="price text-md fw-medium">
                                                Giá: {{ number_format($review->product->gia_khuyen_mai, 0, ',', '.') }} VND
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <span class="sw-dot-default sw-pagination-tes justify-content-center"></span>
            </div>
        </div>
    </section>

    <section class="flat-spacing-25">
        <div class="container">
            <div class="flat-title mb_2 wow fadeInUp">
                <h4 class="title">Bài viết mới nhất</h4>
            </div>
            <div dir="ltr" class="swiper tf-swiper"
                data-swiper='{
                            "slidesPerView": 1,
                            "spaceBetween": 12,
                            "speed": 800,
                            "observer": true,
                            "observeParents": true,
                            "slidesPerGroup": 1,
                            "navigation": {
                                "clickable": true,
                                "nextEl": ".nav-next-new",
                                "prevEl": ".nav-prev-new"
                            },
                            "pagination": { "el": ".sw-pagination-new", "clickable": true },
                            "breakpoints": {
                            "577": { "slidesPerView": 2, "spaceBetween": 12, "slidesPerGroup": 2 },
                            "1200": { "slidesPerView": 3, "spaceBetween": 24, "slidesPerGroup": 4}
                            }
                        }'>
                <div class="swiper-wrapper">
                    <!-- item 1 -->
                    @foreach ($posts as $post)
                        <div class="swiper-slide">
                            <div class="blog-post-item hover-img">
                                <div class="entry_image">
                                    <a href="blog-single.html" class="img-style">
                                        <img src="{{ asset('storage/' . $post->image) }}"
                                            data-src="{{ asset('storage/' . $post->image) }}" alt=""
                                            class="lazyload">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="entry-tag">
                                        <ul class="style-list">
                                            <li>
                                                <a class="type-bag">
                                                    Post
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="blog-single.html" class="entry_title d-block text-xl fw-medium link">
                                        {{ $post->title }}
                                    </a>
                                    <ul class="entry-meta">
                                        <li class="entry_author">
                                            <div class="avatar">
                                                <img src="{{ asset('client/images/avatar/blog-author-4.jpg') }}"
                                                    data-src="{{ asset('client/images/avatar/blog-author-4.jpg') }}"
                                                    alt="avatar" class="lazyload">
                                            </div>
                                            <p class="entry_name text-md">
                                                Post by <span class="fw-medium"> {{ $post->author }} </span>
                                            </p>
                                        </li>
                                        <li class="br-line"></li>
                                        <li class="entry_date">
                                            <p class="text-md">
                                                Sep 19 2025
                                            </p>
                                        </li>
                                        <li class="br-line"></li>
                                        <li class="entry_comment">
                                            <p class="text-md">
                                                3 comments
                                            </p>
                                        </li>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex d-xl-none sw-dot-default sw-pagination-new justify-content-center"></div>
            </div>
        </div>
    </section>
    <!-- Testimonial -->

    <!-- Brand -->
    <div class="flat-spacing-2">
        <div class="container">
            <div class="infiniteslide tf-brand" data-clone="2" data-style="left" data-speed="80">
                <div class="brand-item">
                    <img src="{{ asset('client/images/brand/zara.png') }}" alt="brand">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('client/images/brand/bear.png') }}" alt="brand">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('client/images/brand/nike.png') }}" alt="brand">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('client/images/brand/asos.png') }}" alt="brand">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('client/images/brand/burberry.png') }}" alt="brand">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('client/images/brand/forever.png') }}" alt="brand">
                </div>
            </div>
        </div>
    </div>

    <!-- /Brand -->
    <!-- Shop Gram -->
    <section class="flat-spacing-4 pt-0">
        <div class="container">
            <div class="flat-title wow fadeInUp">
                <h4 class="title">Shop by @Gram</h4>
            </div>
            <div dir="ltr" class="swiper tf-swiper"
                data-swiper='{
                    "slidesPerView": 2,
                    "spaceBetween": 10,
                    "speed": 800,
                    "observer": true,
                    "observeParents": true,
                    "slidesPerGroup": 2,
                    "pagination": { "el": ".sw-pagination-gallery", "clickable": true },
                    "breakpoints": {
                    "768": { "slidesPerView": 3},
                    "1200": { "slidesPerView": 5}
                    }
                }'>
                <div class="swiper-wrapper">
                    <!-- item 1 -->
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img hover-overlay wow fadeInLeft">
                            <div class="image img-style">
                                <img src="{{ asset('client/images/gallery/fashion/gallery-1.jpg') }}"
                                    data-src="{{ asset('client/images/gallery/fashion/gallery-1.jpg') }}" alt=""
                                    class="lazyload">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip">
                                <span class="icon icon-cart2"></span>
                                <span class="tooltip">View Product</span>
                            </a>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img hover-overlay wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="image img-style">
                                <img src="{{ asset('client/images/gallery/fashion/gallery-2.jpg') }}"
                                    data-src="{{ asset('client/images/gallery/fashion/gallery-2.jpg') }}" alt=""
                                    class="lazyload">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip">
                                <span class="icon icon-cart2"></span>
                                <span class="tooltip">View Product</span>
                            </a>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img hover-overlay wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="image img-style">
                                <img src="{{ asset('client/images/gallery/fashion/gallery-3.jpg') }}"
                                    data-src="{{ asset('client/images/gallery/fashion/gallery-3.jpg') }}" alt=""
                                    class="lazyload">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip">
                                <span class="icon icon-cart2"></span>
                                <span class="tooltip">View Product</span>
                            </a>
                        </div>
                    </div>
                    <!-- item 4 -->
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img hover-overlay wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="image img-style">
                                <img src="{{ asset('client/images/gallery/fashion/gallery-4.jpg') }}"
                                    data-src="{{ asset('client/images/gallery/fashion/gallery-4.jpg') }}" alt=""
                                    class="lazyload">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip">
                                <span class="icon icon-cart2"></span>
                                <span class="tooltip">View Product</span>
                            </a>
                        </div>
                    </div>
                    <!-- item 5 -->
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img hover-overlay wow fadeInLeft" data-wow-delay="0.4s">
                            <div class="image img-style">
                                <img src="{{ asset('client/images/gallery/fashion/gallery-5.jpg') }}"
                                    data-src="{{ asset('client/images/gallery/fashion/gallery-5.jpg') }}" alt=""
                                    class="lazyload">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip">
                                <span class="icon icon-cart2"></span>
                                <span class="tooltip">View Product</span>
                            </a>
                        </div>
                    </div>
                </div>

                <span class="d-flex d-xl-none sw-dot-default sw-pagination-gallery justify-content-center"></span>
            </div>
        </div>
    </section>
    <!-- /Shop Gram -->
    <!-- Icon box -->
    <div class="line-top flat-spacing-5">
        <div class="container">
            <div class="mw-1 m-auto">
                <div dir="ltr" class="swiper tf-swiper wow fadeInUp "
                    data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 12,
                        "speed": 800,
                        "preventInteractionOnTransition": false,
                        "touchStartPreventDefault": false,
                        "pagination": { "el": ".sw-pagination-iconbox", "clickable": true },
                        "breakpoints": {
                            "575": { "slidesPerView": 2, "spaceBetween": 12, "slidesPerGroup": 2},
                            "768": { "slidesPerView": 3, "spaceBetween": 24, "slidesPerGroup": 2},
                            "1200": { "slidesPerView": 4, "spaceBetween": 42, "slidesPerGroup": 2}
                        }
                    }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <div class="box-icon">
                                    <i class="icon icon-shipping"></i>
                                </div>
                                <div class="content">
                                    <div class="title">Miễn phí vận chuyển
                                    </div>
                                    <p class="desc">Giao hàng miễn phí cho tất cả các đơn hàng
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <div class="box-icon">
                                    <i class="icon icon-gift"></i>
                                </div>
                                <div class="content">
                                    <div class="title">Quà tặng
                                    </div>
                                    <p class="desc">Đóng gói hoàn hảo để làm quà tặng
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <div class="box-icon">
                                    <i class="icon icon-return"></i>
                                </div>
                                <div class="content">
                                    <div class="title">Trả hàng miễn phí
                                    </div>
                                    <p class="desc">Trong vòng 14 ngày để trả lại
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-2">
                                <div class="box-icon">
                                    <i class="icon icon-support"></i>
                                </div>
                                <div class="content">
                                    <div class="title">Hỗ trợ trực tuyến
                                    </div>
                                    <p class="desc">Chúng tôi hỗ trợ khách hàng
                                        24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex d-xl-none sw-dot-default sw-pagination-iconbox justify-content-center"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
