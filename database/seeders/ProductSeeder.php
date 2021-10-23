<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'LG Fridge',
            'price' => '15000',
            'description' => 'a smart and good cooling ans so much features',
            'category' => 'Fridge',
            'gallery' => 'https: //image.shutterstock.com/image-photo/open-refrigerator-filled-fresh-fruits-260nw-1910245906.jpg
',
        ]);

    }
}
