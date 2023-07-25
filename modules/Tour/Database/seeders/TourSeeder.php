<?php

namespace Modules\Tour\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Tour\Models\Tour;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ([
            [
                'category_id'=>1,
                'other_id'=>1,
                'duration_id'=>1,
                'language_id'=>1,
                'title'=>'Leeds Castle, Cliffs of Dover and Canterbury Day Trip from London with Guided Cathedral Tour',
                'hour'=>1,
                'day'=>1,
                'place'=>'Westminster Borough, London',
                'safety'=>'Taking safety measures',
                'price'=>100,
                'review'=>100,
                'slug'=>'tour-1',
            ],
            [
                'category_id'=>2,
                'other_id'=>2,
                'duration_id'=>2,
                'language_id'=>2,
                'title'=>'Leeds Castle, Cliffs of Dover and Canterbury Day Trip from London with Guided Cathedral Tour',
                'hour'=>2,
                'day'=>2,
                'place'=>'Westminster Borough, London',
                'safety'=>'Taking safety measures',
                'price'=>200,
                'review'=>200,
                'slug'=>'tour-2',
            ],
            [
                'category_id'=>3,
                'other_id'=>3,
                'duration_id'=>3,
                'language_id'=>3,
                'title'=>'Leeds Castle, Cliffs of Dover and Canterbury Day Trip from London with Guided Cathedral Tour',
                'hour'=>3,
                'day'=>3,
                'place'=>'Westminster Borough, London',
                'safety'=>'Taking safety measures',
                'price'=>300,
                'review'=>300,
                'slug'=>'tour-3',
            ],
        ]);

        Tour::insert($data);
    }

}
