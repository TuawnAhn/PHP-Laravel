<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            [
                'name' => 'Nguyễn Văn A',
                'email' => 'a@gmail.com',
                'subject' => 'OK',
                'message' => 'OK',
            ],
            [
                'name' => 'Nguyễn Văn B',
                'email' => 'b@gmail.com',
                'sdt' => '0123456789',
                'subject' => 'OK',
                'message' => 'OK',
            ]
        ]);
    }
}
