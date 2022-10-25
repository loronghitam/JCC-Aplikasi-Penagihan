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
        User::create([
            'registered_id' => '000000',
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123'),
        ]);
    }
}
