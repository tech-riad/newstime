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
                'url'   => '/',
                'order' => 1,
            ],
            [
                'title'      => 'Technology',
                'type'        => 'category',
                'category_id' => 3,
                'order'       => 2,
            ],
            [
                'title'      => 'Contact',
                'type'        => 'url',
                'order'       => 3,
                'url'       => '/contact',
            ],

        ];

        foreach ($menuItems as $menuItem) {
            MenuItem::create($menuItem);
        }
    }
    }

