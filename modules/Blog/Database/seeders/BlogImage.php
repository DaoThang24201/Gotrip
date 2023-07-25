<?php

namespace Modules\Blog\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogImage extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'blog_id'=>1,
                'path'=>'1.png',
            ],
            [
                'blog_id'=>1,
                'path'=>'single1.png',
            ],
            [
                'blog_id'=>1,
                'path'=>'1.png',
            ],
            [
                'blog_id'=>2,
                'path'=>'2.png',
            ],
            [
                'blog_id'=>2,
                'path'=>'single1.png',
            ],
            [
                'blog_id'=>2,
                'path'=>'2.png',
            ],
            [
                'blog_id'=>3,
                'path'=>'1.png',
            ],
            [
                'blog_id'=>3,
                'path'=>'single1.png',
            ],
            [
                'blog_id'=>3,
                'path'=>'3.png',
            ],
            [
                'blog_id'=>4,
                'path'=>'3.png',
            ],
            [
                'blog_id'=>4,
                'path'=>'single1.png',
            ],
            [
                'blog_id'=>4,
                'path'=>'1.png',
            ],
            [
                'blog_id'=>5,
                'path'=>'4.png',
            ],
            [
                'blog_id'=>5,
                'path'=>'single1.png',
            ],
            [
                'blog_id'=>5,
                'path'=>'2.png',
            ],
            [
                'blog_id'=>6,
                'path'=>'5.png',
            ],
            [
                'blog_id'=>6,
                'path'=>'single1.png',
            ],
            [
                'blog_id'=>6,
                'path'=>'3.png',
            ],
            [
                'blog_id'=>7,
                'path'=>'5.png',
            ],
            [
                'blog_id'=>7,
                'path'=>'single1.png',
            ],
            [
                'blog_id'=>7,
                'path'=>'3.png',
            ],
        ];

        foreach ($data as $item){
            \Modules\Blog\Models\BlogImage::create($item);
        }
    }
}
