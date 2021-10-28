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
            'name' => 'Samsung TV',
            'price' => '28000',
            'category' => 'TV',
            'gallery' => 'https://www.xda-developers.com/download-the-samsung-galaxy-s21-fe-wallpapers-here/',
            'description' => 'a smart TV and much more feature',
        ]);
    }
}
