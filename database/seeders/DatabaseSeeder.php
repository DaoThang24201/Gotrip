<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Blog\Database\seeders\Auth;
use Modules\Blog\Database\seeders\BlogCategory;
use Modules\Blog\Database\seeders\BlogComment;
use Modules\Blog\Database\seeders\BlogImage;
use Modules\Blog\DataBase\Seeders\BlogSeeder;
use Illuminate\Support\Facades\DB;
use Modules\Blog\Database\seeders\BlogTag;
use Modules\Blog\Database\seeders\CommentImage;
use Modules\Blog\Database\seeders\Tag;
use Modules\Blog\Database\seeders\User;
use Modules\Tour\Database\seeders\TourSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BlogSeeder::class,
            Auth::class,
            BlogCategory::class,
            BlogComment::class,
            BlogImage::class,
            BlogTag::class,
            CommentImage::class,
            Tag::class,
            User::class,



            TourSeeder::class,
        ]);
    }
}
