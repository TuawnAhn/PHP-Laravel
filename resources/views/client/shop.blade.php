@extends('layouts.client')

@section('title', 'Danh sách sản phẩm')

@section('content')
    <!-- Breadcrumb -->
    <div class="tf-breadcrumb space-t">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="item-breadcrumb">
                    <a href="index-2.html" class="text">Shop</a>
                </li>
                <li class="item-breadcrumb dot">
                    <span></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Title Page -->
    <section class="page-title flat-spacing-4 pt-0">
        <div class="container">
            <div class="box-title text-center justify-items-center">
                <h4 class="title">Danh sách sản phẩm</h4>
                <a href="#" class="tf-btn btn-out-line-dark2">Đọc thêm</a>
            </div>
        </div>
    </section>
    <!-- /Title Page -->

    <!-- Section Product -->
    <section class="flat-spacing-2 pt-0">
        <div class="container">
            <div class="tf-shop-control">
                <div class="tf-group-filter">
                    <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="filterShop" class="tf-btn-filter">
                        <span class="icon icon-filter"></span><span class="text">Bộ lọc</span></a>
                    <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                        <div class="btn-select">
                            <span class="text-sort-value">Bán chạy nhất</span>
                            <span class="icon icon-arr-down"></span>
                        </div>
                        <div class="dropdown-menu">
                            <div class="select-item active" data-sort-value="best-selling">
                                <span class="text-value-item">Bán chạy nhất</span>
                            </div>
                            <div class="select-item" data-sort-value="price-low-high">
                                <span class="text-value-item">Giá, thấp đến cao</span>
                            </div>
                            <div class="select-item" data-sort-value="price-high-low">
                                <span class="text-value-item">Giá, cao đến thấp</span>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="tf-control-layout">
                    <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                        <div class="item icon-list">
                            <span></span>
                            <span></span>
                        </div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                        <div class="item icon-grid-2">
                            <span></span>
                            <span></span>
                        </div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-3" data-value-layout="tf-col-3">
                        <div class="item icon-grid-3">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-4 active" data-value-layout="tf-col-4">
                        <div class="item icon-grid-4">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="wrapper-control-shop">
                <div class="meta-filter-shop">
                    <div id="product-count-grid" class="count-text">{{ $products->total() }} sản phẩm</div>
                    <div id="product-count-list" class="count-text"></div>
                    <div id="applied-filters"></div>
                    <button id="remove-all" class="remove-all-filters" style="display: none;"><i
                            class="icon icon-close"></i> Clear all filter</button>
                </div>
                <div class="wrapper-shop tf-grid-layout tf-col-4" id="gridLayout">
                    @foreach ($products as $product)
                        <div class="card-product grid card-product-size" data-availability="In stock" data-brand="Vineta">
                            <div class="card-product-wrapper">
                                <a href="{{ route('clients.shop.detail', ['id' => $product->id]) }}" class="product-img">
                                    <img class="img-product" data-src="{{ asset('storage/' . $product->hinh_anh) }}"
                                        src="{{ asset('storage/' . $product->hinh_anh) }}" alt="image-product">
                                </a>

                                @if ($product->gia_khuyen_mai)
                                    <div class="on-sale-wrap">
                                        <span class="on-sale-item">
                                            {{ round((($product->gia - $product->gia_khuyen_mai) / $product->gia) * 100) }}%
                                            Off
                                        </span>
                                    </div>
                                @endif
                                <ul class="list-product-btn">
                                    <li><a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="hover-tooltip tooltip-left box-icon">
                                            <span class="icon icon-cart2"></span><span class="tooltip">Add to
                                                Cart</span></a></li>
                                    <li class="wishlist"><a href="javascript:void(0);"
                                            class="hover-tooltip tooltip-left box-icon">
                                            <span class="icon icon-heart2"></span><span class="tooltip">Add to
                                                Wishlist</span></a></li>
                                    <li><a href="#quickView" data-bs-toggle="modal"
                                            class="hover-tooltip tooltip-left box-icon quickview">
                                            <span class="icon icon-view"></span><span class="tooltip">Quick View</span></a>
                                    </li>
                                    <li class="compare"><a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                            class="hover-tooltip tooltip-left box-icon">
                                            <span class="icon icon-compare"></span><span class="tooltip">Add to
                                                Compare</span></a></li>
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
                            <div class="card-product-info text-center">
                                <a href=""
                                    class="name-product link fw-medium text-md">{{ $product->ten_san_pham }}</a>
                                <p class="price-wrap fw-medium text-left">
                                    <span class="price-new text-primary"
                                        data-price="{{ $product->gia_khuyen_mai ?? $product->gia }}">
                                        {{ number_format($product->gia_khuyen_mai ?? $product->gia, 0, ',', '.') }}VNĐ
                                    </span>
                                    @if ($product->gia_khuyen_mai)
                                        <span class="price-old">{{ number_format($product->gia, 0, ',', '.') }}VNĐ</span>
                                    @endif
                                </p>
                                <ul class="list-color-product justify-content-center">
                                    <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                        <span class="tooltip color-filter">Yellow</span><span
                                            class="swatch-value bg-light-orange-2"></span>
                                        <img class="lazyload" data-src="{{ asset('storage/' . $product->hinh_anh) }}"
                                            src="{{ asset('storage/' . $product->hinh_anh) }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                        <span class="tooltip color-filter">Grey</span><span
                                            class="swatch-value bg-grey-4"></span>
                                        <img class="lazyload" data-src="{{ asset('storage/' . $product->hinh_anh) }}"
                                            src="{{ asset('storage/' . $product->hinh_anh) }}" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                        <span class="tooltip color-filter">Black</span><span
                                            class="swatch-value bg-dark"></span>
                                        <img class="lazyload" data-src="{{ asset('storage/' . $product->hinh_anh) }}"
                                            src="{{ asset('storage/' . $product->hinh_anh) }}" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    {{ $products->appends(request()->query())->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </section>

    <!-- Lọc Shop -->
    <div class="offcanvas offcanvas-start canvas-sidebar canvas-filter" id="filterShop">
        <div class="canvas-wrapper">
            <div class="canvas-header">
                <span class="title">Bộ Lọc</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body">
                <!-- Tìm kiếm theo tên -->
                <div class="widget-facet">
                    <div class="facet-title text-xl fw-medium">
                        <span>Tìm kiếm theo tên</span>
                    </div>
                    <div class="collapse-body">
                        <form method="GET" action="{{ route('clients.shop.index') }}">
                            <input type="text" name="search" class="form-control" placeholder="Tìm kiếm sản phẩm..."
                                value="{{ request('search') }}">
                            <button type="submit" class="tf-btn btn-primary mt-2">Tìm</button>
                        </form>
                    </div>
                </div>

                <!-- Lọc theo danh mục -->
                <div class="widget-facet">
                    <div class="facet-title text-xl fw-medium" data-bs-target="#collections" role="button"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="collections">
                        <span>Danh mục sản phẩm</span>
                        <span class="icon icon-arrow-up"></span>
                    </div>
                    <div id="collections" class="collapse show">
                        <form method="GET" action="{{ route('clients.shop.index') }}">
                            <ul class="collapse-body list-categories current-scrollbar">
                                @foreach ($categories as $category)
                                    <li class="cate-item">
                                        <input type="radio" name="category" value="{{ $category->id }}"
                                            id="category-{{ $category->id }}"
                                            {{ request('category') == $category->id ? 'checked' : '' }}>
                                        <label for="category-{{ $category->id }}" class="text-sm link">
                                            <span>{{ $category->ten_danh_muc }}</span>
                                            <span class="count">({{ $category->products->count() }})</span>
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                            <button type="submit" class="tf-btn btn-primary mt-2">Áp dụng</button>
                        </form>
                    </div>
                </div>

                <!-- Lọc theo khoảng giá -->
                <div class="widget-facet">
                    <div class="facet-title text-xl fw-medium" data-bs-target="#price" role="button"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="price">
                        <span>Giá sản phẩm</span>
                        <span class="icon icon-arrow-up"></span>
                    </div>
                    <div id="price" class="collapse show">
                        <form method="GET" action="{{ route('clients.shop.index') }}">
                            <div class="collapse-body widget-price filter-price">
                                <div class="box-value-price">
                                    <input type="number" name="min_price" class="form-control" placeholder="Từ"
                                        value="{{ request('min_price') }}" min="0">
                                    <span>-</span>
                                    <input type="number" name="max_price" class="form-control" placeholder="Đến"
                                        value="{{ request('max_price') }}" min="0">
                                </div>
                                <button type="submit" class="tf-btn btn-primary mt-2">Áp dụng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Lọc Shop -->

    <style>
        /* Bo tròn nút pagination */
        .pagination .page-link {
            border-radius: 50% !important;
            width: 42px;
            height: 42px;
            line-height: 42px;
            text-align: center;
            padding: 0;
            margin: 0 4px;
            color: #333;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        .pagination .page-link:hover {
            background-color: #ff6600;
            color: #fff;
            border-color: #ff6600;
        }

        .pagination .page-item.active .page-link {
            background-color: #ff6600;
            color: white;
            border-color: #ff6600;
        }

        .pagination .page-item.disabled .page-link {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>

    <!-- JavaScript để xử lý sắp xếp -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sortDropdown = document.querySelector('.tf-dropdown-sort');
            const sortItems = sortDropdown.querySelectorAll('.select-item');
            const currentSort = '{{ request('sort_by') }}';

            // Cập nhật giá trị hiển thị của dropdown
            sortItems.forEach(item => {
                if (item.getAttribute('data-sort-value') === currentSort) {
                    sortDropdown.querySelector('.text-sort-value').textContent = item.querySelector(
                        '.text-value-item').textContent;
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });

            // Xử lý sự kiện chọn sắp xếp
            sortItems.forEach(item => {
                item.addEventListener('click', function() {
                    const sortValue = this.getAttribute('data-sort-value');
                    const url = new URL(window.location.href);
                    url.searchParams.set('sort_by', sortValue);
                    window.location.href = url.toString();
                });
            });
        });
    </script>
@endsection
