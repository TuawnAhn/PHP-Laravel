<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('products')->insert([
        //     [
        //         'ma_san_pham' => 'SP03',
        //         'ten_san_pham' => 'Iphone 12',
        //         'category_id' => '1',
        //         'gia' => 20000000,
        //         'gia_khuyen_mai' => 19000000,
        //         'so_luong' => 100,
        //         'ngay_nhap' => '2022-01-01',
        //         'mo_ta' => 'Iphone 12',
        //         'trang_thai' => true,
        //         'created_at' => now(),
        //     ],
        //     [
        //         'ma_san_pham' => 'SP04',
        //         'ten_san_pham' => 'Acer nitro 5',
        //         'category_id' => '2',
        //         'gia' => 20000000,
        //         'gia_khuyen_mai' => 19000000,
        //         'so_luong' => 100,
        //         'ngay_nhap' => '2022-01-01',
        //         'mo_ta' => 'Iphone 13',
        //         'trang_thai' => true,
        //         'created_at' => now(),
        //     ]
        // ]);

        Category::factory()->count(5)->create()->each(function ($category) {
            Product::factory()->count(10)->create(['category_id' => $category->id]);
        });
    }
}
