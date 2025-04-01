<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-shield-alt"></i> Trang Quản Trị
        </a>

        <div class="d-flex align-items-center ms-auto">
            <span class="me-3 text-white">Xin chào, <strong>{{ auth()->user()->name }}</strong></span>
        </div>
    </div>
</nav>
