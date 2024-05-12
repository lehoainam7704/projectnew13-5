<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoris')->insert([
            [
                'name' => 'Phone',
            ],

            [
                'name' => 'Laptop',
            ],

            [
                'name' => 'Tablet',
            ],

        ]);
    }
}
