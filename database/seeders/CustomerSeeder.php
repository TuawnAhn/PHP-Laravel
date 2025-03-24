<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => 'Nguyễn Văn A',
                'email' => 'a@gmail.com',
                'phone' => '0123456789',
                'address' => 'Ha Noi',
            ],
            [
                'name' => 'Nguyễn Văn B',
                'email' => 'b@gmail.com',
                'phone' => '0123456789',
                'address' => 'Ha Noi',
            ]
        ]);
    }
}
