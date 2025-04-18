# Ghi chú các lệnh quan trọng trong Laravel

## 1. Cài đặt Laravel

```sh
composer create-project laravel/laravel ten_du_an
```

## 2. Migrate Database

```sh
php artisan migrate  # Chạy migration để tạo bảng trong database
php artisan make:migration ten_file_migration  # Tạo file migration mới
php artisan make:migration add_category_id_to_products_table  # Tạo file migration để liên kết bảng categories với bảng products
php artisan migrate:rollback  # Rollback lại thao tác cuối cùng của migration
php artisan migrate:rollback --step=5  # Rollback lại 5 lần trước đó
php artisan migrate:rollback --batch=5  # Rollback lại bước số 5
php artisan migrate:reset  # Rollback tất cả các thao tác migration
php artisan migrate:refresh  # Reset và chạy lại migration

#Chạy lại 1 Migration cụ thể
php artisan migrate:status #Xem tất cả các migration để lấy tên file migration
php artisan migrate:rollback --path=database/migrations/tên_file_magration #Rollback lại 1 Migration
php artisan migrate --path=database/migrations/tên_file_magration #chạy lại Migration


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
php artisan make:factory TenFactory  # Tạo một factory mới
php artisan make:middleware tenMiddleware  # Tạo một middleware mới
php artisan make:controller Api/TenController --api # Tạo một controller API
```

## 5. Chạy Laravel Server

```sh
php artisan serve  # Chạy Laravel với built-in server
```

## 6. Chạy Ảnh

```sh
-php artisan storage:link # Tạo liên kết các file để hiển thị ra người dùng
php artisan make:migration add_deleted_at_to_ten_table --table=ten_table
```
