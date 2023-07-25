<?php

namespace Modules\Blog\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tag extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'Museum'
            ],
            [
                'name'=>'Park'
            ],
            [
                'name'=>'Beach'
            ],
            [
                'name'=>'Mountain'
            ],
        ];

        foreach ($data as $item){
            \Modules\Blog\Models\Tag::create($item);
        }
    }
}
