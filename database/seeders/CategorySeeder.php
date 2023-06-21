<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::updateOrCreate([
            'category_name'    => 'সর্বশেষ',
            'slug'             => 'সর্বশেষ',
            'title'            => 'Test Category-1',
            'description'      => 'This is test category-1'
        ]);
        Category::updateOrCreate([
            'category_name'    => 'জাতীয়',
            'slug'             => 'জাতীয়',
            'title'            => 'Test Category-2',
            'description'      => 'This is test category-2'
        ]);
        Category::updateOrCreate([
            'category_name'    => 'রাজনীতি',
            'slug'             => 'রাজনীতি',
            'title'            => 'Test Category-3',
            'description'      => 'This is test category-3'
        ]);
        Category::updateOrCreate([
            'category_name'    => 'অর্থনীতি',
            'slug'             => 'অর্থনীতি',
            'title'            => 'Test Category-4',
            'description'      => 'This is test category-4'
        ]);
        Category::updateOrCreate([
            'category_name'    => 'সারাদেশ',
            'slug'             => 'সারাদেশ',
            'title'            => 'Test Category-5',
            'description'      => 'This is test category-5'
        ]);
        Category::updateOrCreate([
            'category_name'    => 'খেলাধুলা',
            'slug'             => 'খেলাধুলা',
            'title'            => 'Test Category-5',
            'description'      => 'This is test category-5'
        ]);
        Category::updateOrCreate([
            'category_name'    => 'বিনোদন ',
            'slug'             => 'বিনোদন ',
            'title'            => 'Test Category-6',
            'description'      => 'This is test category-5'
        ]);
        // Category::updateOrCreate([
        //     'category_name'    => 'Top News',
        //     'slug'             => 'top-news',
        //     'title'            => 'Test Category-1',
        //     'description'      => 'This is test category-1'
        // ]);
    }
}
