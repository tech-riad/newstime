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
                'title'      => 'জাতীয়',
                'type'        => 'category',
                'category_id' => 2,
                'order'       => 2,
            ],
            [
                'title'      => 'রাজনীতি',
                'type'        => 'category',
                'category_id' => 3,
                'order'       => 3,
            ],
            [
                'title'       => 'অর্থনীতি',
                'type'        => 'category',
                'category_id' => 4,
                'order'       => 4,
            ],
            [
                'title'      => 'বিনোদন ',
                'type'        => 'category',
                'category_id' => 7,
                'order'       => 5,
            ],
            [
                'title'      => 'Contact',
                'type'        => 'url',
                'order'       => 10,
                'url'       => '/contact',
            ],

        ];

        foreach ($menuItems as $menuItem) {
            MenuItem::create($menuItem);
        }
    }
    }

