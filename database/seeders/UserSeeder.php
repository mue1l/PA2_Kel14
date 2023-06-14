<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'nomorhp' => '085267816542',
            'alamat' => 'sipoholon',
            'password' => Hash::make('password')
        ]);

        $admin->assignRole('admin');


        $pengajar = User::create([
            'name' => 'Pengajar',
            'username' => 'pengajar',
            'email' => 'pengajar@gmail.com',
            'nomorhp' => '085267816541',
            'alamat' => 'sipoholon',
            'password' => Hash::make('password')
        ]);

        $pengajar->assignRole('pengajar');

        $user = User::create([
            'name' => 'Samuel Sibua',
            'username' => 'samuel',
            'email' => 'samuel@gmail.com',
            'nomorhp' => '085267816540',
            'alamat' => 'sipoholon',
            'password' => Hash::make('password')
        ]);

        $user->assignRole('user');

    }
}
