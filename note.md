# Ghi chú các lệnh quan trọng trong Laravel

## 1. Cài đặt Laravel

```sh
composer create-project laravel/laravel ten_du_an
```

## 2. Migrate Database

```sh
php artisan migrate  # Chạy migration để tạo bảng trong database
php artisan make:migration ten_file_migration  # Tạo file migration mới
php artisan migrate:rollback  # Rollback lại thao tác cuối cùng của migration
php artisan migrate:rollback --step=5  # Rollback lại 5 lần trước đó
php artisan migrate:rollback --batch=5  # Rollback lại bước số 5
php artisan migrate:reset  # Rollback tất cả các thao tác migration
php artisan migrate:refresh  # Reset và chạy lại migration

```

## 3. Seed Database

```sh
php artisan make:seeder ten_file_seeder  # Tạo file seeder mới
php artisan db:seed  # Chạy toàn bộ seeder
php artisan db:seed --class=UserSeeder  # Chạy một class seeder cụ thể
php artisan migrate:fresh --seed  # Reset database, chạy lại migration và seed dữ liệu

```

## 4. TẠO

```sh
php artisan make:model TênModel  # Tạo một model mới
php artisan make:controller TenController  # Tạo một controller mới
```

## 5. Chạy Laravel Server

```sh
php artisan serve  # Chạy Laravel với built-in server
```

## 6. Chạy Ảnh

```sh
-php artisan storage:link # Tạo liên kết các file để hiển thị ra người dùng
```
