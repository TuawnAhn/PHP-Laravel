<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('categories')->insert([
        //     [
        //         'ten_danh_muc' => 'Điện thoại',
        //         'trang_thai' => true,
        //     ],
        //     [
        //         'ten_danh_muc' => 'Laptop',
        //         'trang_thai' => true,
        //     ]
        // ]);
        Category::factory()->count(5)->create();
    }
}
