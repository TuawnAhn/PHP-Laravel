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
        <a href="#" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-th-list me-2"></i> Danh mục
        </a>
        <a href="#" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-users me-2"></i> Người dùng
        </a>
        <a href="#" class="list-group-item list-group-item-action text-light">
            <i class="fas fa-cog me-2"></i> Cài đặt
        </a>
    </div>

    <div class="sidebar-footer text-center py-3">
        <a href="" class="btn btn-danger w-75">
            <i class="fas fa-sign-out-alt me-2"></i> Đăng xuất
        </a>
    </div>
</div>
