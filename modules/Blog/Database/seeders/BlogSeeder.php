<?php

namespace Modules\Blog\Database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Blog\Models\Blog;
use function Nette\Utils\in;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'auth_id'=>1,
                'category_id'=>1,
                'title'=>'9 Award-Winning Ski Resorts Near Salt Lake City',
                'subtitle'=>'elit. Curabitur ipsum lorem, iaculis ac sodales eu, laoreet in justo. Nunc facilisis purus in consequat fringilla. Fusce in elit augue',
                'content'=>'',
                'status'=>'Confirmed',
                'slug'=>'blog-1'
            ],
            [
                'auth_id'=>2,
                'category_id'=>1,
                'title'=>'The top 7 places in Japan to see cherry blossom',
                'subtitle'=>'Quisque sed velit mi. Fusce euismod sodales purus, eget commodo neque tempus at. Sed sagittis dui gravida elit s',
                'content'=>'',
                'status'=>'Pending',
                'slug'=>'blog-2'
            ],
            [
                'auth_id'=>3,
                'category_id'=>2,
                'title'=>'Baby’s first trip, from glamping to luxury resorts',
                'subtitle'=>'t sollicitudin sodales. Nulla ullamcorper neque quis lacinia cursus.',
                'content'=>'',
                'status'=>'Confirmed',
                'slug'=>'blog-3'
            ],
            [
                'auth_id'=>4,
                'category_id'=>2,
                'title'=>'Top places to see tulips in the Netherlands',
                'subtitle'=>'Pellentesque sed elementum nulla. Maecenas varius, massa et dignissim tincidu',
                'content'=>'',
                'status'=>'Confirmed',
                'slug'=>'blog-4'
            ],
            [
                'auth_id'=>5,
                'category_id'=>4,
                'title'=>'A weekend guide to the Great Northern Catskills',
                'subtitle'=>'ed posuere, arcu eu fringilla gravida, mi magna viverra massa, sed finibus ligula nibh vel dui. Donec dignissim dapibus ipsum,',
                'content'=>'',
                'status'=>'Rejected',
                'slug'=>'blog-5'
            ],
            [
                'auth_id'=>6,
                'category_id'=>1,
                'title'=>'m dolor sit amet, consectetur adipiscing elit. Curabitur i',
                'subtitle'=>' primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam gravida mauris a eros placerat tempus. Duis aliquet eleifend feugi',
                'content'=>'',
                'status'=>'Rejected',
                'slug'=>'blog-6'
            ],
            [
                'auth_id'=>7,
                'category_id'=>3,
                'title'=>'ulis rhoncus id at velit. Sed placerat id ipsum vitae gravida. A',
                'subtitle'=>'ed placerat id ipsum vitae gravida. Aliquam ut mi rutrum, suscipit risus vel, malesu',
                'content'=>'',
                'status'=>'Pending',
                'slug'=>'blog-7'
            ],
        ];

        foreach ($data as $item){
            \Modules\Blog\Models\Blog::create($item);
        }
    }
}
