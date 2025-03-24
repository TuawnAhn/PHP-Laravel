<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banners')->insert([
            [
                'image' => 'https://snapshot.canon-asia.com/vn/article/viet/landscape-photography-quick-tips-for-stunning-deep-focused-images',
            ],
            [
                'image' => 'https://snapshot.canon-asia.com/vn/article/viet/landscape-photography-quick-tips-for-stunning-deep-focused-images',
            ]
        ]);
    }
}
