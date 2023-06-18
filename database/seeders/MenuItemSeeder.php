<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        $menuItems = [
            [
                'title' => 'Home',
                'url' => '/',
                'order' => 1,
            ],
            [
                'title' => 'Sports',
                'url' => '/sports',
                'order' => 2,
            ],
            [
                'title' => 'Technology',
                'url' => '/technology',
                'order' => 3,
            ],
            [
                'title' => 'Business',
                'url' => '/business',
                'order' => 4,
            ],
            [
                'title' => 'Entertainment',
                'url' => '/entertainment',
                'order' => 5,
            ],
            [
                'title' => 'Fashion',
                'url' => '/fashion',
                'order' => 6,
            ],
            [
                'title' => 'Contact Us',
                'url' => '/contact',
                'order' => 7,
            ],
        ];

        foreach ($menuItems as $menuItem) {
            MenuItem::create($menuItem);
        }
    }
    }

