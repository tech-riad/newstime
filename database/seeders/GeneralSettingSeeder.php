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
            'name'      => 'Newstime24',
            'email'     => 'email@email.com',
            'phone'     => '01758964235',
            'location'  => '123 Terry Lane, New York, USA',
            'facebook'  => 'https://facebook.com/',
            'twitter'   => 'https://twitter.com/',
            'instagram' => 'https://instagram.com/',
            'linkdein'  => 'https://bd.linkedin.com/',
            'youtube'   => 'https://youtube.com/',
            'notice'    => 'Test Notice',


        ]);
    }
}
