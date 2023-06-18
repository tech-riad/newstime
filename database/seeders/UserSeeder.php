<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt(12345678),
            'status'    => 1
        ]);
    }
}
