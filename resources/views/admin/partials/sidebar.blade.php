<div class="sidebar bg-dark text-light">
    <div class="sidebar-header text-center py-3">
        <h3>Quản trị viên</h3>
    </div>

    <div class="list-group list-group-flush">
        <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
        </a>
        <a href="{{ route('admin.products.index') }}" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-boxes me-2"></i> Sản phẩm
        </a>
        <a href="{{ route('admin.categories.index') }}" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-th-list me-2"></i> Danh mục
        </a>
        {{-- <a href="#" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-users me-2"></i> Người dùng
        </a> --}}

        <!-- Các mục mới -->
        <a href="{{ route('admin.banners.index') }}" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-images me-2"></i> Banners
        </a>
        <a href="{{ route('admin.customers.index') }}" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-user-friends me-2"></i> Customers
        </a>
        <a href="{{ route('admin.contacts.index') }}" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-envelope me-2"></i> Contacts
        </a>
        <a href="{{ route('admin.posts.index') }}" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-edit me-2"></i> Posts
        </a>
        <a href="{{ route('admin.reviews.index') }}" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-star me-2"></i> Reviews
        </a>

        <a href="" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-cog me-2"></i> Cài đặt
        </a>
    </div>

    <div class="sidebar-footer text-center py-3">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger w-75">
                <i class="fas fa-sign-out-alt me-2"></i> Đăng xuất
            </button>
        </form>
    </div>

</div>
