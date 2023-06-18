<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::updateOrCreate([
            'category_id'       => 1,
            'subcategory_id'    => 1,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/11',
            'title'             => 'Top Post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 1,
            'subcategory_id'    => 1,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/13',
            'title'             => 'Top Post1',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 1,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '2nd post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 1,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '3rd post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 1,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '4th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);

        News::updateOrCreate([
            'category_id'       => 1,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '5th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);


        // Sports News
        News::updateOrCreate([
            'category_id'       => 2,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '6th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 2,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '7th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 2,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '8th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 2,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '9th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        // Technology News
        News::updateOrCreate([
            'category_id'       => 3,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '6th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 3,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '7th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 3,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '8th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 3,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '9th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
// Entertainment News
        News::updateOrCreate([
            'category_id'       => 4,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '6th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 4,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '7th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 4,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '8th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 4,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '9th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);


    }
}
