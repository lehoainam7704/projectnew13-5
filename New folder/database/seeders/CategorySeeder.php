<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Phone',
                'type_id' => '1',
                'type_name' => 'Apple',
                'type_logo' => 'apple.png',
                'type_idlogo' => '1'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '2',
                'type_name' => 'Gigabyte',
                'type_logo' => 'gigabyte.png',
                'type_idlogo' => '2'
            ],

            [
                'name' => 'Tablet',
                'type_id' => '3',
                'type_name' => 'Xiaomi',
                'type_logo' => 'xiaomi.png',
                'type_idlogo' => '3'
            ],

            [
                'name' => 'Phone',
                'type_id' => '4',
                'type_name' => 'Samsung',
                'type_logo' => 'samsung.png',
                'type_idlogo' => '4'
            ],

            [
                'name' => 'Phone',
                'type_id' => '5',
                'type_name' => 'Nokia',
                'type_logo' => 'nokia.png',
                'type_idlogo' => '5'
            ],

            [
                'name' => 'Phone',
                'type_id' => '6',
                'type_name' => 'Tecno',
                'type_logo' => 'tecno.png',
                'type_idlogo' => '6'
            ],
            
            [
                'name' => 'Phone',
                'type_id' => '7',
                'type_name' => 'Sony',
                'type_logo' => 'logosony.png',
                'type_idlogo' => '7'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '8',
                'type_name' => 'Acer',
                'type_logo' => 'acer.png',
                'type_idlogo' => '8'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '9',
                'type_name' => 'Asus',
                'type_logo' => 'asus.png',
                'type_idlogo' => '9'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '10',
                'type_name' => 'LG',
                'type_logo' => 'lg.png',
                'type_idlogo' => '10'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '11',
                'type_name' => 'Microsoft',
                'type_logo' => 'microsoft.png',
                'type_idlogo' => '11'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '12',
                'type_name' => 'Lenovo',
                'type_logo' => 'lenovo.png',
                'type_idlogo' => '12'
            ],

            [
                'name' => 'Phone',
                'type_id' => '13',
                'type_name' => 'TCL',
                'type_logo' => 'tcl.png',
                'type_idlogo' => '13'
            ],

            [
                'name' => 'Phone',
                'type_id' => '14',
                'type_name' => 'Oppo',
                'type_logo' => 'oppo.png',
                'type_idlogo' => '14'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '15',
                'type_name' => 'Hp',
                'type_logo' => 'hp.png',
                'type_idlogo' => '15'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '16',
                'type_name' => 'Dell',
                'type_logo' => 'dell.png',
                'type_idlogo' => '16'
            ],

        ]);
    }
}
