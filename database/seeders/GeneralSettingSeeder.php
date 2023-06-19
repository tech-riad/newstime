<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::updateOrCreate([
            'name' => 'Newstime24',
            'email' => 'Newstime24',
            'phone' => 'Newstime24',
            'facebook' => 'Newstime24',
            'twitter' => 'Newstime24',
            'instagram' => 'Newstime24',
            'linkdein' => 'Newstime24',
            'youtube' => 'Newstime24',
            'notice' => 'Newstime24',


        ]);
    }
}
