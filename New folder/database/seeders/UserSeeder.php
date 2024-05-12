<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str ;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '0123456789',
                'password' => Hash::make('admin123'),
                'usertype' => 'admin',
                'address' => 'tp HCM',
                'avatar' => 'admin.png',

            ],
        ]);

        for ($i = 0; $i < 30; $i++) {
            # code...

            DB::table('users')->insert([
                'name' => Str::random(10),
                'phone' => random_int(1000000000, 9999999999),
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('123456'),
                'usertype' => 'user',
                'address' => 'Thủ Đức , tp HCM',
                'avatar' => 'user.png',
            ]);
        };
    }
}
