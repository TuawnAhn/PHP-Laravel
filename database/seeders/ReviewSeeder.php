<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'customer_id' => 1,
                'product_id' => 1,
                'content' => 'Sản phẩm rất tốt',
                'rating' => 1,
            ],
            [
                'product_id' => 1,
                'user_id' => 2,
                'content' => 'Sản phẩm không tốt',
                'rating' => 2,
            ]
        ]);
    }
}
