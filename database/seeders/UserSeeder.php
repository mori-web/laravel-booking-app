<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
          'name' => '管理者(一般B)',
          'email' => 'tadanaga.web318@gmail.com',
          'password' => Hash::make('morimori'),
        ]);
    }
}
