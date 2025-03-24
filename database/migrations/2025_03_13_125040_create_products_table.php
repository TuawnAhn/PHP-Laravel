<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Migration dùng để thao tác với CSDL
    // Trong 1 file migration bắt buộc phải có 2 phương thức up() và down()
    // Hàm up() sẽ chứa các câu lệnh để tạo bảng, chỉnh sửa bảng, xóa bảng
    // Hàm down() thực hiện các công việc ngược lại với hàm UP();
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //Xét độ dài và quy định không trùng lặp
            $table->string('ma_san_pham', 50)->unique();
            $table->string('ten_san_pham', 255);
            $table->decimal('gia', 10, 2);
            //nullable cho phép giá trị có thể null
            $table->decimal('gia_khuyen_mai', 10, 2)->nullable();
            $table->unsignedInteger('so_luong'); //unsignedInteger không âm
            $table->date('ngay_nhap');
            $table->text('mo_ta')->nullable();
            $table->boolean('trang_thai')->default(true); //Xét giá trị mặc định
            $table->timestamps(); //Tự tạo 2 cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
