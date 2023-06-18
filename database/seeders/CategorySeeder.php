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
            'category_name'    => 'Top News',
            'slug'             => 'top-news',
            'title'            => 'Test Category-1',
            'description'      => 'This is test category-1'
        ]);
        Category::updateOrCreate([
            'category_name'    => 'Sports',
            'slug'             => 'sports',
            'title'            => 'Test Category-2',
            'description'      => 'This is test category-2'
        ]);
        Category::updateOrCreate([
            'category_name'    => 'Technology',
            'slug'             => 'technology',
            'title'            => 'Test Category-3',
            'description'      => 'This is test category-3'
        ]);
        Category::updateOrCreate([
            'category_name'    => 'Business',
            'slug'             => 'business',
            'title'            => 'Test Category-4',
            'description'      => 'This is test category-4'
        ]);
        Category::updateOrCreate([
            'category_name'    => 'Entertainment',
            'slug'             => 'entertainment',
            'title'            => 'Test Category-5',
            'description'      => 'This is test category-5'
        ]);
        Category::updateOrCreate([
            'category_name'    => 'Entertainment',
            'slug'             => 'entertainment',
            'title'            => 'Test Category-5',
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
