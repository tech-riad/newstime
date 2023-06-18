<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::updateOrCreate([
            'name'       => 'featured',
        ]);
        Subcategory::updateOrCreate([
            'name'       => 'regular',
        ]);
        Subcategory::updateOrCreate([
            'name'       => 'popular',
        ]);
    }
}
