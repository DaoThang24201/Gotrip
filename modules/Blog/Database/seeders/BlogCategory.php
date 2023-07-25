<?php

namespace Modules\Blog\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'name'=>'Art and Culture',
                'qty'=>34
            ],
            [
                'name'=>'Beaches',
                'qty'=>56
            ],
            [
                'name'=>'Adventure Travel',
                'qty'=>12
            ],
            [
                'name'=>'Explore',
                'qty'=>28
            ],
            [
                'name'=>'Family Holidays',
                'qty'=>7
            ],
            [
                'name'=>'Air Travel',
                'qty'=>15
            ],
            [
                'name'=>'Food an Drink',
                'qty'=>29
            ],
        ];

        foreach ($data as $item){
            \Modules\Blog\Models\BlogCategory::create($item);
        }
    }
}
