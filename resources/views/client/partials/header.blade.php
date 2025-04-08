<div class="tf-topbar bg-dark-5 topbar-bg">
    <div class="container">
        <div class="topbar-wraper">
            <div class="d-none d-xl-block flex-shrink-0">
                <ul class="tf-social-icon topbar-left">
                    <li><a href="https://www.facebook.com/" class="social-item social-facebook"><i
                                class="icon icon-fb"></i></a></li>
                    <li><a href="https://www.instagram.com/" class="social-item social-instagram"><i
                                class="icon icon-instagram"></i></a>
                    </li>
                    <li><a href="https://x.com/" class="social-item social-x"><i class="icon icon-x"></i></a>
                    </li>
                    <li><a href="https://www.snapchat.com/" class="social-item social-snapchat"><i
                                class="icon icon-snapchat"></i></a>
                    </li>
                </ul>
            </div>
            <div class="overflow-hidden">
                <div class="topbar-center marquee-wrapper">
                    <div class="initial-child-container">
                        <div class="marquee-child-item">
                            <p>Trả hàng được gia hạn đến 60 ngày
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <div class="marquee-child-item">
                            <p>Bảo hành trọn đời
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <div class="marquee-child-item">
                            <p>Khuyến mại có thời hạn
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <!-- 2 -->
                        <div class="marquee-child-item">
                            <p>Trả hàng được gia hạn đến 60 ngày
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <div class="marquee-child-item">
                            <p>Bảo hành trọn đời
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <div class="marquee-child-item">
                            <p>Khuyến mại có thời hạn
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <!-- 3 -->
                        <div class="marquee-child-item">
                            <p>Trả hàng được gia hạn đến 60 ngày
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <div class="marquee-child-item">
                            <p>Bảo hành trọn đời
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <div class="marquee-child-item">
                            <p>Khuyến mại có thời hạn
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <!-- 4 -->
                        <div class="marquee-child-item">
                            <p>Trả hàng được gia hạn đến 60 ngày
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <div class="marquee-child-item">
                            <p>Bảo hành trọn đời
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <div class="marquee-child-item">
                            <p>Khuyến mại có thời hạn
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <!-- 5 -->
                        <div class="marquee-child-item">
                            <p>Trả hàng được gia hạn đến 60 ngày
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <div class="marquee-child-item">
                            <p>Bảo hành trọn đời
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                        <div class="marquee-child-item">
                            <p>Khuyến mại có thời hạn
                            </p>
                        </div>
                        <div class="marquee-child-item"><span class="dot"></span></div>
                    </div>
                </div>
            </div>
            <div class="d-none d-xl-block flex-shrink-0">
                <div class="topbar-right">
                    <div class="tf-languages">
                        <select class="image-select center style-default type-languages">
                            <option>Tiếng Việt</option>
                            <option>English</option>
                        </select>
                    </div>
                    <div class="tf-currencies">
                        <select class="image-select center style-default type-currencies">
                            <option selected data-thumbnail="{{ asset('client/images/country/vn.png') }}">Vietnam (VND
                                ₫)
                            </option>
                            <option data-thumbnail="{{ asset('client/images/country/us.png') }}">United States
                                (USD $)
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Top Bar -->
<!-- Header -->
<header id="header" class="header-default">
    <div class="container">
        <div class="row wrapper-header align-items-center">
            <div class="col-md-4 col-3 d-xl-none">
                <a href="#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas" aria-controls="mobileMenu">
                    <i class="icon icon-categories1"></i>
                </a>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
                <a href="{{ route('clients.home') }}" class="logo-header">
                    <img src="{{ asset('client/images/logo/logo.svg') }}" alt="logo" class="logo">
                </a>
            </div>
            <div class="col-xl-8 d-none d-xl-block">
                <nav class="box-navigation text-center">
                    <ul class="box-nav-menu">
                        <li class="menu-item">
                            <a href="{{ route('clients.home') }}" class="item-link">Trang chủ</a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('clients.shop.index') }}" class="item-link">Shop</a>
                        </li>

                        <li class="menu-item">
                            <a href="#" class="item-link">Danh mục<i class="icon icon-arr-down"></i></a>
                            <div class="sub-menu mega-menu mega-product">
                                <div class="wrapper-sub-menu">
                                    <!-- Cột 1 -->
                                    <div class="mega-menu-item">
                                        <div class="menu-heading">PRODUCT LAYOUTS</div>
                                        <ul class="menu-list">
                                            <li><a href="product-detail.html" class="menu-link-text link">Product
                                                    Single</a></li>
                                            <li><a href="product-grid.html" class="menu-link-text link">Product
                                                    Grid</a></li>
                                            <li><a href="product-stacked.html" class="menu-link-text link">Product
                                                    Stacked</a></li>
                                            <li><a href="product-drawer-sidebar.html"
                                                    class="menu-link-text link">Product Drawer Sidebar</a></li>
                                        </ul>
                                    </div>

                                    <!-- Cột 2 -->
                                    <div class="mega-menu-item">
                                        <div class="menu-heading">PRODUCT DETAILS</div>
                                        <ul class="menu-list">
                                            <li><a href="product-inner-zoom.html" class="menu-link-text link">Product
                                                    Inner Zoom</a></li>
                                            <li><a href="product-no-zoom.html" class="menu-link-text link">Product No
                                                    Zoom</a></li>
                                            <li><a href="product-video.html" class="menu-link-text link">Product
                                                    Video</a></li>
                                            <li><a href="product-3d.html" class="menu-link-text link">Product
                                                    3D/AR</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="menu-item position-relative">
                            <a href="{{ route('clients.contact.index') }}" class="item-link">Liên hệ</a>
                        </li>

                        <li class="menu-item position-relative">
                            <a href="{{ route('clients.blog') }}" class="item-link">Bài Viết</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-xl-2 col-md-4 col-3">
                <ul class="nav-icon d-flex justify-content-end align-items-center">
                    <li class="nav-search">
                        <a href="#search" data-bs-toggle="modal" class="nav-icon-item">
                            <i class="icon icon-search"></i>
                        </a>
                    </li>
                    <li class="nav-account">
                        @auth
                            <div class="nav-icon-item dropdown">
                                <a href="#" class="dropdown-toggle item-link text-sm" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="padding: 0; font-size: 17px;">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Tài khoản của tôi</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Đăng xuất
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                            <a href="#login" data-bs-toggle="offcanvas" aria-controls="login" class="nav-icon-item">
                                <i class="icon icon-user"></i>
                            </a>
                        @endauth
                    </li>


                    <li class="nav-wishlist">
                        <a href="wish-list.html" class="nav-icon-item">
                            <i class="icon icon-heart"></i>
                            <span class="count-box">0</span>
                        </a>
                    </li>
                    <li class="nav-cart">
                        <a href="#shoppingCart" data-bs-toggle="offcanvas" class="nav-icon-item">
                            <i class="icon icon-cart"></i>
                            <span class="count-box">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
