    <!-- login -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-login" id="login">
        <div class="canvas-wrapper">
            <div class="canvas-header popup-header">
                <span class="title">Đăng nhập</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body popup-inner">
                <form action="{{ route('client.login') }}" method="POST" accept-charset="utf-8" class="form-login">
                    @csrf
                    <div>
                        <fieldset class="email mb_12">
                            <input type="email" name="email" placeholder="Email*" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" name="password" placeholder="Password*" required>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </fieldset>
                    </div>
                    <div class="bot">
                        <a href="#resetPass" data-bs-toggle="offcanvas" class="text text-sm text-main-2">Quên mật
                            khẩu?</a>
                        <div class="button-wrap">
                            <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                type="submit">Đăng nhập</button>
                            <button type="button" data-bs-target="#register" data-bs-toggle="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">Tạo tài khoản</button>
                        </div>
                    </div>
                </form>
                <div class="other-login">
                    <p class="text-sm text-center text-main-2">Or sign in with:</p>
                    <a href="account-page.html" class="w-100 text-md mb_8">
                        <svg class="icon" width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16" r="16" fill="#3B5998" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.155 10.656L18.649 10.657C17.468 10.657 17.239 11.218 17.239 12.041V13.857H20.056L19.689 16.702H17.239V24H14.302V16.702H11.846V13.857H14.302V11.76C14.302 9.325 15.789 8 17.96 8C19 8 19.894 8.077 20.155 8.112V10.656ZM16 0C7.164 0 0 7.163 0 16C0 24.836 7.164 32 16 32C24.837 32 32 24.836 32 16C32 7.163 24.837 0 16 0Z"
                                fill="white" />
                        </svg>
                        FACEBOOK
                    </a>
                    <a href="account-page.html" class="w-100 text-md bg-dark">
                        <svg class="icon" width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_235_18876)">
                                <path
                                    d="M30.7919 13.218L17.7394 13.2174C17.163 13.2174 16.6958 13.6845 16.6958 14.2609V18.4306C16.6958 19.0068 17.163 19.4741 17.7393 19.4741H25.0897C24.2848 21.5629 22.7825 23.3122 20.8659 24.4237L24.0001 29.8493C29.0277 26.9416 32.0001 21.8398 32.0001 16.1287C32.0001 15.3155 31.9402 14.7342 31.8203 14.0796C31.7292 13.5823 31.2974 13.218 30.7919 13.218Z"
                                    fill="#167EE6" />
                                <path
                                    d="M16.0002 25.7392C12.4031 25.7392 9.26282 23.7738 7.57625 20.8655L2.15088 23.9926C4.91182 28.7777 10.0839 32 16.0002 32C18.9025 32 21.6411 31.2186 24.0002 29.8568V29.8494L20.866 24.4237C19.4324 25.2552 17.7734 25.7392 16.0002 25.7392Z"
                                    fill="#12B347" />
                                <path
                                    d="M24 29.8568V29.8493L20.8658 24.4237C19.4322 25.2551 17.7733 25.7391 16 25.7391V32C18.9023 32 21.641 31.2186 24 29.8568Z"
                                    fill="#0F993E" />
                                <path
                                    d="M6.26088 16C6.26088 14.2269 6.74475 12.5681 7.57606 11.1346L2.15069 8.00745C0.781375 10.3591 0 13.0903 0 16C0 18.9098 0.781375 21.6409 2.15069 23.9926L7.57606 20.8654C6.74475 19.4319 6.26088 17.7731 6.26088 16Z"
                                    fill="#FFD500" />
                                <path
                                    d="M16.0002 6.26088C18.3459 6.26088 20.5005 7.09437 22.1834 8.48081C22.5986 8.82281 23.2021 8.79813 23.5824 8.41781L26.5368 5.46344C26.9683 5.03194 26.9375 4.32562 26.4766 3.92575C23.6569 1.47956 19.9881 0 16.0002 0C10.0839 0 4.91182 3.22231 2.15088 8.00744L7.57625 11.1346C9.26282 8.22625 12.4031 6.26088 16.0002 6.26088Z"
                                    fill="#FF4B26" />
                                <path
                                    d="M22.1833 8.48081C22.5984 8.82281 23.2019 8.79813 23.5822 8.41781L26.5366 5.46344C26.968 5.03194 26.9373 4.32562 26.4764 3.92575C23.6567 1.4795 19.9879 0 16 0V6.26088C18.3456 6.26088 20.5003 7.09437 22.1833 8.48081Z"
                                    fill="#D93F21" />
                            </g>
                            <defs>
                                <clipPath>
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        GOOGLE
                    </a>
                </div>
            </div>
        </div>

        <!-- Thêm script để hiển thị alert -->
        @if (session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif
        @if (session('error'))
            <script>
                alert("{{ session('error') }}");
            </script>
        @endif
    </div>
    <!-- /login -->

    <!-- register -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-register" id="register">
        <div class="canvas-wrapper">
            <div class="canvas-header popup-header">
                <span class="title">Tạo tài khoản</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body popup-inner">
                <form action="{{ route('client.register') }}" method="POST" class="form-login">
                    @csrf
                    <div class="">
                        <fieldset class="text mb_12">
                            <input type="text" name="name" placeholder="Tên của bạn*" required>
                        </fieldset>
                        <fieldset class="email mb_12">
                            <input type="email" name="email" placeholder="Email*" required>
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" name="password" placeholder="Password*" required>
                        </fieldset>
                    </div>
                    <div class="bot">
                        <p class="text text-sm text-main-2">Đăng ký để được tiếp cận chương trình Khuyến mại sớm cùng
                            với các sản phẩm mới, xu hướng và chương trình khuyến mãi được thiết kế riêng. Để từ chối,
                            hãy nhấp vào hủy đăng ký trong email của chúng tôi.</p>
                        <div class="button-wrap">
                            <button class="subscribe-button tf-btn animate-btn bg-dark-2 w-100" type="submit">Đăng
                                ký</button>
                            <button type="button" data-bs-target="#login" data-bs-toggle="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">Đăng nhập</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /register -->

    <!-- Reset pass -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-reset-pass" id="resetPass">
        <div class="canvas-wrapper">
            <div class="canvas-header popup-header">
                <span class="title">Reset Your Password</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body popup-inner">
                <form action="#" class="form-login">
                    <div class="">
                        <p class="text text-sm text-main-2">Forgot your password? No worries! Enter your registered
                            email to receive a link and securely reset it in just a few steps.</p>
                        <fieldset class="email mb_12">
                            <input type="email" placeholder="Enter Your Email*">
                        </fieldset>
                    </div>
                    <div class="bot">
                        <div class="button-wrap">
                            <button class="subscribe-button tf-btn animate-btn bg-dark-2 w-100" type="submit">Reset
                                Password</button>
                            <button type="button" data-bs-dismiss="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Reset pass -->

    <!-- search -->
    <div class="modal fade popup-search" id="search">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="header">
                    <button class="icon-close icon-close-popup" data-bs-dismiss="modal"></button>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="looking-for-wrap">
                                <div class="heading">What are you looking for?</div>
                                <form class="form-search">
                                    <fieldset class="text">
                                        <input type="text" placeholder="Search" class="" name="text"
                                            tabindex="0" value="" aria-required="true" required="">
                                    </fieldset>
                                    <button type="submit">
                                        <i class="icon icon-search"></i>
                                    </button>
                                </form>
                                <div class="popular-searches justify-content-md-center">
                                    <div class="text fw-medium">Popular searches:</div>
                                    <ul>
                                        <li><a class="link" href="#">Featured</a></li>
                                        <li><a class="link" href="#">Trendy</a></li>
                                        <li><a class="link" href="#">New</a></li>
                                        <li><a class="link" href="#">Sale</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="featured-product">
                                <div class="text-xl-2 fw-medium featured-product-heading">Featured product</div>
                                <div dir="ltr" class="swiper tf-swiper wrap-sw-over"
                                    data-swiper='{
                                        "slidesPerView": 2,
                                        "spaceBetween": 12,
                                        "speed": 1000,
                                        "observer": true,
                                        "observeParents": true,
                                        "slidesPerGroup": 2,
                                        "pagination": { "el": ".sw-pagination-search", "clickable": true },
                                        "breakpoints": {
                                        "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                                        "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4}
                                        }
                                    }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card-product style-3 card-product-size">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="img-product lazyload"
                                                            data-src="images/products/fashion/product-27.jpg"
                                                            src="images/products/fashion/product-27.jpg"
                                                            alt="image-product">
                                                        <img class="img-hover lazyload"
                                                            data-src="images/products/fashion/product-23.jpg"
                                                            src="images/products/fashion/product-23.jpg"
                                                            alt="image-product">
                                                    </a>
                                                    <ul class="list-product-btn">
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="box-icon hover-tooltip wishlist">
                                                                <span class="icon icon-heart2"></span>
                                                                <span class="tooltip">Add to Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn-quickview box-icon hover-tooltip quickview">
                                                                <span class="icon icon-view"></span>
                                                                <span class="tooltip">Quick View</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="box-icon hover-tooltip compare btn-compare">
                                                                <span class="icon icon-compare"></span>
                                                                <span class="tooltip">Add to Compare</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="product-btn-main">
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="btn-main-product">
                                                            <span class="icon icon-cart2"></span>
                                                            <span class="text-md fw-medium">
                                                                Add to Cart
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <ul class="size-box">
                                                        <li class="size-item text-xs text-white">M</li>
                                                        <li class="size-item text-xs text-white">L</li>
                                                        <li class="size-item text-xs text-white">XL</li>
                                                    </ul>
                                                </div>
                                                <div class="card-product-info">
                                                    <a href="product-detail.html"
                                                        class="name-product link fw-medium text-md">Basic Sports
                                                        T-Shirt
                                                        Crew Neck Ribbed</a>
                                                    <p class="price-wrap fw-medium">
                                                        <span class="price-new text-primary">80.00</span>
                                                        <span class="price-old">$100.00</span>
                                                    </p>
                                                    <ul class="list-color-product">
                                                        <li
                                                            class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                            <span class="tooltip color-filter">Purple</span>
                                                            <span class="swatch-value bg-light-purple-3"></span>
                                                            <img class="lazyload"
                                                                data-src="images/products/fashion/product-27.jpg"
                                                                src="images/products/fashion/product-27.jpg"
                                                                alt="image-product">
                                                        </li>
                                                        <li
                                                            class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip color-filter">Light Grey</span>
                                                            <span class="swatch-value bg-grey-4"></span>
                                                            <img class="lazyload"
                                                                data-src="images/products/fashion/product-11.jpg"
                                                                src="images/products/fashion/product-11.jpg"
                                                                alt="image-product">
                                                        </li>
                                                        <li
                                                            class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip color-filter">Light Orange</span>
                                                            <span class="swatch-value bg-light-orange"></span>
                                                            <img class="lazyload"
                                                                data-src="images/products/fashion/product-12.jpg"
                                                                src="images/products/fashion/product-12.jpg"
                                                                alt="image-product">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card-product style-3">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="img-product lazyload"
                                                            data-src="images/products/fashion/product-10.jpg"
                                                            src="images/products/fashion/product-10.jpg"
                                                            alt="image-product">
                                                        <img class="img-hover lazyload"
                                                            data-src="images/products/fashion/product-20.jpg"
                                                            src="images/products/fashion/product-20.jpg"
                                                            alt="image-product">
                                                    </a>
                                                    <ul class="list-product-btn">
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="box-icon hover-tooltip wishlist">
                                                                <span class="icon icon-heart2"></span>
                                                                <span class="tooltip">Add to Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn-quickview box-icon hover-tooltip quickview">
                                                                <span class="icon icon-view"></span>
                                                                <span class="tooltip">Quick View</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="box-icon hover-tooltip compare btn-compare">
                                                                <span class="icon icon-compare"></span>
                                                                <span class="tooltip">Add to Compare</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="product-btn-main">
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="btn-main-product">
                                                            <span class="icon icon-cart2"></span>
                                                            <span class="text-md fw-medium">
                                                                Add to Cart
                                                            </span>
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="card-product-info">
                                                    <a href="product-detail.html"
                                                        class="name-product link fw-medium text-md">Regular Fit
                                                        Fine Knit Polo Shirt</a>
                                                    <p class="price-wrap fw-medium">
                                                        <span class="price-new text-primary">$130.00</span>
                                                        <span class=" price-old">$130.00</span>
                                                    </p>
                                                    <ul class="list-color-product">
                                                        <li
                                                            class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                            <span class="tooltip color-filter">Light Blue</span>
                                                            <span class="swatch-value bg-light-blue-2"></span>
                                                            <img class=" lazyload"
                                                                data-src="images/products/fashion/product-10.jpg"
                                                                src="images/products/fashion/product-10.jpg"
                                                                alt="image-product">
                                                        </li>
                                                        <li
                                                            class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip color-filter">Black</span>
                                                            <span class="swatch-value bg-dark"></span>
                                                            <img class=" lazyload"
                                                                data-src="images/products/fashion/product-13.jpg"
                                                                src="images/products/fashion/product-13.jpg"
                                                                alt="image-product">
                                                        </li>
                                                        <li
                                                            class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip color-filter">Purple</span>
                                                            <span class="swatch-value bg-light-purple"></span>
                                                            <img class=" lazyload"
                                                                data-src="images/products/fashion/product-14.jpg"
                                                                src="images/products/fashion/product-14.jpg"
                                                                alt="image-product">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card-product style-3">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="img-product lazyload"
                                                            data-src="images/products/fashion/product-21.jpg"
                                                            src="images/products/fashion/product-21.jpg"
                                                            alt="image-product">
                                                        <img class="img-hover lazyload"
                                                            data-src="images/products/fashion/women-black-3.jpg"
                                                            src="images/products/fashion/women-black-3.jpg"
                                                            alt="image-product">
                                                    </a>
                                                    <ul class="list-product-btn">
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="box-icon hover-tooltip wishlist">
                                                                <span class="icon icon-heart2"></span>
                                                                <span class="tooltip">Add to Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn-quickview box-icon hover-tooltip quickview">
                                                                <span class="icon icon-view"></span>
                                                                <span class="tooltip">Quick View</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="box-icon hover-tooltip compare btn-compare">
                                                                <span class="icon icon-compare"></span>
                                                                <span class="tooltip">Add to Compare</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="product-btn-main">
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="btn-main-product">
                                                            <span class="icon icon-cart2"></span>
                                                            <span class="text-md fw-medium">
                                                                Add to Cart
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-product-info">
                                                    <a href="product-detail.html"
                                                        class="name-product link fw-medium text-md">Crop College
                                                        T-Shirt</a>
                                                    <p class="price-wrap fw-medium">
                                                        <span class="price-new text-primary">$80.00</span>
                                                        <span class=" price-old">$100.00</span>
                                                    </p>
                                                    <ul class="list-color-product">
                                                        <li
                                                            class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                            <span class="tooltip color-filter">Dark Green</span>
                                                            <span class="swatch-value bg-dark-green"></span>
                                                            <img class=" lazyload"
                                                                data-src="images/products/fashion/product-21.jpg"
                                                                src="images/products/fashion/product-21.jpg"
                                                                alt="image-product">
                                                        </li>
                                                        <li
                                                            class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip color-filter">Black</span>
                                                            <span class="swatch-value bg-dark"></span>
                                                            <img class=" lazyload"
                                                                data-src="images/products/fashion/women-black-3.jpg"
                                                                src="images/products/fashion/women-black-3.jpg"
                                                                alt="image-product">
                                                        </li>
                                                        <li
                                                            class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip color-filter">Purple</span>
                                                            <span class="swatch-value bg-light-purple-3"></span>
                                                            <img class="lazyload"
                                                                data-src="images/products/fashion/product-23.jpg"
                                                                src="images/products/fashion/product-23.jpg"
                                                                alt="image-product">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card-product style-3 card-product-size">
                                                <div class="card-product-wrapper">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="img-product lazyload"
                                                            data-src="images/products/fashion/product-22.jpg"
                                                            src="images/products/fashion/product-22.jpg"
                                                            alt="image-product">
                                                        <img class="img-hover lazyload"
                                                            data-src="images/products/fashion/product-5.jpg"
                                                            src="images/products/fashion/product-5.jpg"
                                                            alt="image-product">
                                                    </a>
                                                    <ul class="list-product-btn">
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="box-icon hover-tooltip wishlist">
                                                                <span class="icon icon-heart2"></span>
                                                                <span class="tooltip">Add to Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn-quickview box-icon hover-tooltip quickview">
                                                                <span class="icon icon-view"></span>
                                                                <span class="tooltip">Quick View</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="box-icon hover-tooltip compare btn-compare">
                                                                <span class="icon icon-compare"></span>
                                                                <span class="tooltip">Add to Compare</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="product-btn-main">
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="btn-main-product">
                                                            <span class="icon icon-cart2"></span>
                                                            <span class="text-md fw-medium">
                                                                Add to Cart
                                                            </span>
                                                        </a>
                                                    </div>

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
                                                    <a href="product-detail.html"
                                                        class="name-product link fw-medium text-md">Bow-Tie T-Shirt</a>
                                                    <p class="price-wrap fw-medium">
                                                        <span class="price-new text-primary">$120.00</span>
                                                        <span class=" price-old">$140.00</span>
                                                    </p>
                                                    <ul class="list-color-product">
                                                        <li
                                                            class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                            <span class="tooltip color-filter">Black</span>
                                                            <span class="swatch-value bg-dark"></span>
                                                            <img class=" lazyload"
                                                                data-src="images/products/fashion/product-22.jpg"
                                                                src="images/products/fashion/product-22.jpg"
                                                                alt="image-product">
                                                        </li>
                                                        <li
                                                            class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip color-filter">Beige</span>
                                                            <span class="swatch-value bg-beige"></span>
                                                            <img class=" lazyload"
                                                                data-src="images/products/fashion/product-5.jpg"
                                                                src="images/products/fashion/product-5.jpg"
                                                                alt="image-product">
                                                        </li>
                                                        <li
                                                            class="list-color-item color-swatch hover-tooltip line tooltip-bot">
                                                            <span class="tooltip color-filter">White</span>
                                                            <span class="swatch-value bg-white"></span>
                                                            <img class=" lazyload"
                                                                data-src="images/products/fashion/product-1.jpg"
                                                                src="images/products/fashion/product-1.jpg"
                                                                alt="image-product">
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex d-xl-none sw-dot-default sw-pagination-search justify-content-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /search -->

    <!-- shoppingCart -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-shopping-cart" id="shoppingCart">
        <div class="canvas-wrapper">
            <div class="popup-header">
                <span class="title">Shopping cart</span>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas"></span>
            </div>
            <div class="wrap">
                <div class="tf-mini-cart-threshold">
                    <div class="text">
                        Spend <span class="fw-medium">$100</span> more to get <span class="fw-medium">Free
                            Shipping</span>
                    </div>
                    <div class="tf-progress-bar tf-progress-ship">
                        <div class="value" style="width: 0%;" data-progress="75">
                            <i class="icon icon-car"></i>
                        </div>
                    </div>
                </div>
                <div class="tf-mini-cart-wrap">
                    <div class="tf-mini-cart-main">
                        <div class="tf-mini-cart-sroll">
                            <div class="tf-mini-cart-items">
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <a href="product-detail.html">
                                            <img class="lazyload" data-src="images/products/fashion/women-1.jpg"
                                                src="images/products/fashion/women-1.jpg" alt="img-product">
                                        </a>
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <div class="d-flex justify-content-between">
                                            <a class="title link text-md fw-medium" href="product-detail.html">Short
                                                Sleeve Sweat</a>
                                            <i class="icon icon-close remove fs-12"></i>
                                        </div>
                                        <div class="info-variant">
                                            <select class="text-xs">
                                                <option value="White / L">White / L</option>
                                                <option value="White / M">White / M</option>
                                                <option value="Black / L">Black / L</option>
                                            </select>
                                            <i class="icon-pen edit"></i>
                                        </div>
                                        <p class="price-wrap text-sm fw-medium">
                                            <span class="new-price text-primary">$130.00</span>
                                            <span
                                                class="old-price text-decoration-line-through text-dark-1">$150.00</span>
                                        </p>
                                        <div class="wg-quantity small">
                                            <button class="btn-quantity minus-btn">-</button>
                                            <input class="quantity-product font-4" type="text" name="number"
                                                value="1">
                                            <button class="btn-quantity plus-btn">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <a href="product-detail.html">
                                            <img class="lazyload" data-src="images/products/fashion/women-2.jpg"
                                                src="images/products/fashion/women-2.jpg" alt="img-product">
                                        </a>
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <div class="d-flex justify-content-between">
                                            <a class="title link text-md fw-medium" href="product-detail.html">Loose
                                                Fit Tee</a>
                                            <i class="icon icon-close remove fs-12"></i>
                                        </div>
                                        <div class="info-variant">
                                            <select class="text-xs">
                                                <option value="White / L">White / L</option>
                                                <option value="White / M">White / M</option>
                                                <option value="Black / L">Black / L</option>
                                            </select>
                                            <i class="icon-pen edit"></i>
                                        </div>
                                        <p class="price-wrap text-sm fw-medium">
                                            <span class="new-price text-primary">$130.00</span>
                                            <span
                                                class="old-price text-decoration-line-through text-dark-1">$150.00</span>
                                        </p>
                                        <div class="wg-quantity small">
                                            <button class="btn-quantity minus-btn">-</button>
                                            <input class="quantity-product font-4" type="text" name="number"
                                                value="1">
                                            <button class="btn-quantity plus-btn">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-minicart-recommendations">
                                <div
                                    class="tf-minicart-recommendations-heading d-flex justify-content-between align-items-end">
                                    <div class="tf-minicart-recommendations-title text-md fw-medium">You may also
                                        like</div>
                                    <div class="d-flex gap-10">
                                        <div
                                            class="swiper-button-prev nav-swiper arrow-1 size-30 nav-prev-also-product">
                                        </div>
                                        <div
                                            class="swiper-button-next nav-swiper arrow-1 size-30 nav-next-also-product">
                                        </div>
                                    </div>
                                </div>
                                <div dir="ltr" class="swiper tf-swiper"
                                    data-swiper='{
                                            "slidesPerView": 1,
                                            "spaceBetween": 10,
                                            "speed": 800,
                                            "observer": true,
                                            "observeParents": true,
                                            "slidesPerGroup": 1,
                                            "navigation": {
                                                "clickable": true,
                                                "nextEl": ".nav-next-also-product",
                                                "prevEl": ".nav-prev-also-product"
                                            }
                                        }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tf-mini-cart-item line radius-16">
                                                <div class="tf-mini-cart-image">
                                                    <a href="product-detail.html">
                                                        <img class="lazyload"
                                                            data-src="images/products/fashion/product-1.jpg"
                                                            src="images/products/fashion/product-1.jpg"
                                                            alt="img-product">
                                                    </a>
                                                </div>
                                                <div class="tf-mini-cart-info justify-content-center">
                                                    <a class="title link text-md fw-medium"
                                                        href="product-detail.html">Polo T-Shirt</a>
                                                    <p class="price-wrap text-sm fw-medium">
                                                        <span class="new-price text-primary">$130.00</span>
                                                        <span
                                                            class="old-price text-decoration-line-through text-dark-1">$150.00</span>
                                                    </p>
                                                    <a href="#"
                                                        class="tf-btn animate-btn d-inline-flex bg-dark-2 w-max-content">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tf-mini-cart-item line radius-16">
                                                <div class="tf-mini-cart-image">
                                                    <a href="product-detail.html">
                                                        <img class="lazyload"
                                                            data-src="images/products/fashion/product-2.jpg"
                                                            src="images/products/fashion/product-2.jpg"
                                                            alt="img-product">
                                                    </a>
                                                </div>
                                                <div class="tf-mini-cart-info justify-content-center">
                                                    <a class="title link text-md fw-medium"
                                                        href="product-detail.html">Short Sleeve Sweat</a>
                                                    <p class="price-wrap text-sm fw-medium">
                                                        <span class="new-price text-primary">$100.00</span>
                                                        <span
                                                            class="old-price text-decoration-line-through text-dark-1">$115.00</span>
                                                    </p>
                                                    <a href="#"
                                                        class="tf-btn animate-btn d-inline-flex bg-dark-2 w-max-content">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tf-mini-cart-item line radius-16">
                                                <div class="tf-mini-cart-image">
                                                    <a href="product-detail.html">
                                                        <img class="lazyload"
                                                            data-src="images/products/fashion/product-3.jpg"
                                                            src="images/products/fashion/product-3.jpg"
                                                            alt="img-product">
                                                    </a>
                                                </div>
                                                <div class="tf-mini-cart-info justify-content-center">
                                                    <a class="title link text-md fw-medium"
                                                        href="product-detail.html">Crop T-shirt</a>
                                                    <p class="price-wrap text-sm fw-medium">
                                                        <span class="new-price text-primary">$80.00</span>
                                                        <span
                                                            class="old-price text-decoration-line-through text-dark-1">$100.00</span>
                                                    </p>
                                                    <a href="#"
                                                        class="tf-btn animate-btn d-inline-flex bg-dark-2 w-max-content">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-bottom">
                        <div class="tf-mini-cart-tool">
                            <div class="tf-mini-cart-tool-btn btn-add-gift">
                                <i class="icon icon-gift2"></i>
                                <div class="text-xxs">Add gift wrap</div>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-add-note">
                                <i class="icon icon-note"></i>
                                <div class="text-xxs">Order note</div>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-coupon">
                                <i class="icon icon-coupon"></i>
                                <div class="text-xxs">Coupon</div>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-estimate-shipping">
                                <i class="icon icon-car"></i>
                                <div class="text-xxs">Shipping</div>
                            </div>
                        </div>
                        <div class="tf-mini-cart-bottom-wrap">
                            <div class="tf-cart-totals-discounts">
                                <div class="tf-cart-total text-xl fw-medium">Total:</div>
                                <div class="tf-totals-total-value text-xl fw-medium">$130.00 USD</div>
                            </div>
                            <div class="tf-cart-tax text-sm opacity-8">Taxes and shipping calculated at checkout
                            </div>
                            <div class="tf-cart-checkbox">
                                <div class="tf-checkbox-wrapp">
                                    <input class="" type="checkbox" id="CartDrawer-Form_agree"
                                        name="agree_checkbox">
                                    <div>
                                        <i class="icon-check"></i>
                                    </div>
                                </div>
                                <label for="CartDrawer-Form_agree" class="text-sm">
                                    I agree with the
                                    <a href="term-and-condition.html" title="Terms of Service"
                                        class="fw-medium">terms
                                        and conditions</a>
                                </label>
                            </div>
                            <div class="tf-mini-cart-view-checkout">
                                <a href="checkout.html"
                                    class="tf-btn animate-btn d-inline-flex bg-dark-2 w-100 justify-content-center"><span>Check
                                        out</span></a>
                                <a href="view-cart.html"
                                    class="tf-btn btn-out-line-dark2 w-100 justify-content-center">View cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-gift">
                        <div class="overplay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text text-sm fw-medium">Add gift wrap</div>
                            <div class="tf-mini-cart-tool-text1">The product will be wrapped carefully.
                                Fee is only <span class="text fw-medium text-dark">$10.00</span>. Do you want a
                                gift wrap?</div>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                    type="submit">Add a Gift Wrap</button>
                                <div class="tf-btn btn-out-line-dark2 w-100 tf-mini-cart-tool-close">Cancel</div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-note">
                        <div class="overplay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <label for="Cart-note" class="tf-mini-cart-tool-text text-sm fw-medium">Order
                                note</label>
                            <textarea name="note" id="Cart-note" placeholder="Instruction for seller..."></textarea>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                    type="submit">Save</button>
                                <div class="tf-btn btn-out-line-dark2 w-100 tf-mini-cart-tool-close">Close</div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable coupon">
                        <div class="overplay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text text-sm fw-medium">Add coupon</div>
                            <div class="tf-mini-cart-tool-text1">* Discount will be calculated and
                                applied at checkout</div>
                            <input type="text" name="text" placeholder="">
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                    type="submit">Save</button>
                                <div class="tf-btn btn-out-line-dark2 w-100 tf-mini-cart-tool-close">Close</div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable estimate-shipping">
                        <div class="overplay tf-mini-cart-tool-close"></div>
                        <form id="shipping-form" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text text-sm fw-medium">Shipping estimates</div>
                            <div class="field">
                                <p class="text-sm">Country</p>
                                <div class="tf-select">
                                    <select class="w-100" id="shipping-country-form" name="address[country]"
                                        data-default="">
                                        <option value="Australia"
                                            data-provinces='[["Australian Capital Territory","Australian Capital Territory"],["New South Wales","New South Wales"],["Northern Territory","Northern Territory"],["Queensland","Queensland"],["South Australia","South Australia"],["Tasmania","Tasmania"],["Victoria","Victoria"],["Western Australia","Western Australia"]]'>
                                            Australia</option>
                                        <option value="Austria" data-provinces='[]'>Austria</option>
                                        <option value="Belgium" data-provinces='[]'>Belgium</option>
                                        <option value="Canada"
                                            data-provinces='[["Ontario","Ontario"],["Quebec","Quebec"]]'>Canada
                                        </option>
                                        <option value="Czech Republic" data-provinces='[]'>Czechia</option>
                                        <option value="Denmark" data-provinces='[]'>Denmark</option>
                                        <option value="Finland" data-provinces='[]'>Finland</option>
                                        <option value="France" data-provinces='[]'>France</option>
                                        <option value="Germany" data-provinces='[]'>Germany</option>
                                        <option selected value="United States"
                                            data-provinces='[["Alabama","Alabama"],["California","California"],["Florida","Florida"]]'>
                                            United States</option>
                                        <option value="United Kingdom"
                                            data-provinces='[["England","England"],["Scotland","Scotland"],["Wales","Wales"],["Northern Ireland","Northern Ireland"]]'>
                                            United Kingdom</option>
                                        <option value="India" data-provinces='[]'>India</option>
                                        <option value="Japan" data-provinces='[]'>Japan</option>
                                        <option value="Mexico" data-provinces='[]'>Mexico</option>
                                        <option value="South Korea" data-provinces='[]'>South Korea</option>
                                        <option value="Spain" data-provinces='[]'>Spain</option>
                                        <option value="Italy" data-provinces='[]'>Italy</option>
                                        <option value="Vietnam"
                                            data-provinces='[["Ha Noi","Ha Noi"],["Da Nang","Da Nang"],["Ho Chi Minh","Ho Chi Minh"]]'>
                                            Vietnam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <p class="text-sm">State/Province</p>
                                <div class="tf-select">
                                    <select id="shipping-province-form" name="address[province]"
                                        data-default=""></select>
                                </div>
                            </div>
                            <div class="field">
                                <p class="text-sm">Zipcode</p>
                                <input type="text" data-opend-focus id="zipcode" name="address[zip]"
                                    value="">
                            </div>
                            <div id="zipcode-message" class="error" style="display: none;">
                                We found one shipping rate available for undefined.
                            </div>
                            <div id="zipcode-success" class="success" style="display: none;">
                                <p>We found one shipping rate available for your address:</p>
                                <p class="standard">Standard at <span>$0.00</span> USD</p>
                            </div>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                    type="submit">Estimate</button>
                                <div
                                    class="tf-mini-cart-tool-primary tf-btn btn-out-line-dark2 w-100 tf-mini-cart-tool-close">
                                    Close</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /shoppingCart -->

    <!-- modal quickView -->
    <div class="modal fade modalCentered modal-quick-view" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                <div class="tf-product-media-wrap">
                    <div dir="ltr" class="swiper tf-single-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-color="orange">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/fashion/product-40.jpg"
                                        src="images/products/fashion/product-40.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-color="green">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/fashion/product-41.jpg"
                                        src="images/products/fashion/product-41.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-color="pink">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/fashion/product-42.jpg"
                                        src="images/products/fashion/product-42.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev nav-swiper arrow-1 nav-prev-cls single-slide-prev"></div>
                        <div class="swiper-button-next nav-swiper arrow-1 nav-next-cls single-slide-next"></div>
                    </div>
                </div>
                <div class="tf-product-info-wrap">
                    <div class="tf-product-info-inner">
                        <div class="tf-product-info-heading">
                            <h6 class="product-info-name"><a class="link" href="product-detail.html">Striped
                                    T-Shirt</a>
                            </h6>
                            <div class="product-info-price">
                                <h6 class="price-new price-on-sale">$100.00</h6>
                                <h6 class="price-old">$130.00</h6>
                                <span class="badge-sale">20% Off</span>
                            </div>
                            <p class="text">Pants in an airy weave made from a linen and viscose blend. Featuring a
                                high
                                waist and a zip fly with button. Shaping at the front and back and wide legs.</p>
                        </div>
                        <div class="tf-product-info-variant">
                            <div class="variant-picker-item variant-color">
                                <div class="variant-picker-label">
                                    Color:<span class="variant-picker-label-value value-currentColor">Orange</span>
                                </div>
                                <div class="variant-picker-values">
                                    <div class="hover-tooltip color-btn active" data-color="orange">
                                        <span class="check-color bg-light-orange-2"></span>
                                        <span class="tooltip">Orange</span>
                                    </div>
                                    <div class="hover-tooltip color-btn" data-color="green">
                                        <span class="check-color bg-light-green"></span>
                                        <span class="tooltip">Green</span>
                                    </div>
                                    <div class="hover-tooltip color-btn" data-color="pink">
                                        <span class="check-color bg-pink"></span>
                                        <span class="tooltip">Pink</span>
                                    </div>
                                </div>
                            </div>
                            <div class="variant-picker-item variant-size">
                                <div class="variant-picker-label">
                                    <div>Size:<span class="variant-picker-label-value value-currentSize">Small</span>
                                    </div>
                                </div>
                                <div class="variant-picker-values">
                                    <span class="size-btn active" data-size="small">S</span>
                                    <span class="size-btn" data-size="medium">M</span>
                                    <span class="size-btn" data-size="large">L</span>
                                    <span class="size-btn" data-size="extra large">XL</span>
                                </div>
                            </div>
                        </div>
                        <div class="tf-product-total-quantity">
                            <div class="group-btn">
                                <div class="wg-quantity">
                                    <button class="btn-quantity minus-btn">-</button>
                                    <input class="quantity-product font-4" type="text" name="number"
                                        value="1">
                                    <button class="btn-quantity plus-btn">+</button>
                                </div>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn hover-primary">Add
                                    to
                                    cart</a>
                            </div>
                            <a href="checkout.html" class="tf-btn w-100 animate-btn paypal btn-primary">Buy It Now</a>
                            <a href="checkout.html" class="more-choose-payment link">More payment options</a>
                        </div>
                        <a href="product-detail.html" class="view-details link">View full details <i
                                class="icon icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quickView -->

    <!-- compare  -->
    <div class="modal modalCentered fade modal-compare" id="compare">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <span class="icon icon-close btn-hide-popup" data-bs-dismiss="modal"></span>
                <div class="modal-compare-wrap list-file-delete">
                    <h6 class="title text-center">Compare Products</h6>
                    <div class="tf-compare-inner">
                        <div class="tf-compare-list">
                            <div class="tf-compare-item file-delete">
                                <span class="icon-close remove"></span>
                                <a href="product-detail.html" class="image">
                                    <img class="lazyload" data-src="images/products/fashion/product-8.jpg"
                                        src="images/products/fashion/product-8.jpg" alt="">
                                </a>
                                <div class="content">
                                    <div class="text-title">
                                        <a class="link text-line-clamp-2" href="product-detail.html">Striped
                                            T-Shirt</a>
                                    </div>
                                    <p class="price-wrap">
                                        <span class="new-price text-primary">$130.00</span>
                                        <span class="old-price text-decoration-line-through text-dark-1">$150.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <span class="icon-close remove"></span>
                                <a href="product-detail.html" class="image">
                                    <img class="lazyload" data-src="images/products/fashion/product-6.jpg"
                                        src="images/products/fashion/product-6.jpg" alt="">
                                </a>
                                <div class="content">
                                    <div class="text-title">
                                        <a class="link text-line-clamp-2" href="product-detail.html">Loose Fit Tee</a>
                                    </div>
                                    <p class="price-wrap">
                                        <span class="new-price text-primary">$115.00</span>
                                        <span class="old-price text-decoration-line-through text-dark-1">$130.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <span class="icon-close remove"></span>
                                <a href="product-detail.html" class="image">
                                    <img class="lazyload" data-src="images/products/fashion/product-15.jpg"
                                        src="images/products/fashion/product-15.jpg" alt="">
                                </a>
                                <div class="content">
                                    <div class="text-title">
                                        <a class="link text-line-clamp-2" href="product-detail.html">Oversized Fit
                                            Tee</a>
                                    </div>
                                    <p class="price-wrap">
                                        <span class="new-price text-primary">$80.00</span>
                                        <span class="old-price text-decoration-line-through text-dark-1">$100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-compare-buttons justify-content-center">
                        <a href="compare.html" class="tf-btn animate-btn justify-content-center">Compare</a>
                        <div class="tf-btn btn-out-line-dark justify-content-center clear-file-delete"><span>Clear
                                All</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /compare  -->
