<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Post 1',
                'content' => 'Content 1',
                'author' => 'Author 1',
                'image' => 'https://snapshot.canon-asia.com/vn/article/viet/landscape-photography-quick-tips-for-stunning-deep-focused-images',
            ],
            [
                'title' => 'Post 2',
                'content' => 'Content 2',
                'author' => 'Author 2',
                'image' => 'https://snapshot.canon-asia.com/vn/article/viet/landscape-photography-quick-tips-for-stunning-deep-focused-images',

            ]

        ]);
    }
}
