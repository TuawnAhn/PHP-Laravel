<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo 10 khách hàng
        Customer::factory()->count(10)->create()->each(function ($customer) {
            // Lấy ngẫu nhiên từ 1 đến 5 sản phẩm từ bảng Product
            Product::inRandomOrder()->limit(rand(1, 5))->get()->each(function ($product) use ($customer) {
                // Tạo review cho từng sản phẩm và khách hàng
                Review::factory()->create([
                    'customer_id' => $customer->id,
                    'product_id'  => $product->id,
                ]);
            });
        });
    }
}
