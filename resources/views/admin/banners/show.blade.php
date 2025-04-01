@extends('layouts.admin')

@section('title', 'Chi tiết sản phẩm')

@section('content')
    <h1 class="mb-4">Chi tiết Banner</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Thông tin Banner
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    @if ($banner->image)
                        <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->name }}"
                            class="img-fluid rounded">
                    @else
                        <p>Không có ảnh</p>
                    @endif
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID:</th>
                            <td>{{ $banner->id }}</td>
                        </tr>

                        <tr>
                            <th>Tên banner:</th>
                            <td>{{ $banner->name }}</td>
                        </tr>

                        <tr>
                            <th>Trạng thái:</th>
                            <td>
                                @if ($banner->trang_thai)
                                    <span class="badge bg-success">Đang bán</span>
                                @else
                                    <span class="badge bg-danger">Ngừng bán</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('admin.banners.index') }}" class="btn btn-secondary">Quay lại</a>
                <a href="" class="btn btn-warning">Sửa</a>
                <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST" style="display:inline;"
                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div>
    </div>
@endsection
