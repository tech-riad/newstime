<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tags::updateOrCreate([
            'name'    => 'National',
        ]);
        Tags::updateOrCreate([
            'name'    => 'International',
        ]);
        Tags::updateOrCreate([
            'name'    => 'Economics',
        ]);
        Tags::updateOrCreate([
            'name'    => 'Politics',
        ]);
    }
}
