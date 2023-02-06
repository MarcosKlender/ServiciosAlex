<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Julisa Moreira',
            'email' => 'serviciosalexsd@gmail.com',
            'password' => bcrypt('WpasswordW'),
        ]);

        DB::table('stocks')->insert([
            'stock1_name' => 'Jenny',
            'stock2_name' => 'Alejo',
            'stock3_name' => 'Cristhian',
            'stock4_name' => 'Kevin',
            'stock5_name' => 'Lenin',
            'stock6_name' => 'Hector',
        ]);

        DB::table('products')->insert([
            'name' => 'Potenciador XOXO',
            'price' => 20,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Lovin Fem',
            'price' => 25,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Potenciador Macho Alfa',
            'price' => 24.99,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Spray Macho Alfa',
            'price' => 19.99,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Cápsulas Macho Alfa + Anillo',
            'price' => 29.99,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Pulsera Biomagnética',
            'price' => 19.99,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Promo American Fit 2x1',
            'price' => 49.99,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Litoku',
            'price' => 14.99,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Biotin Collagen',
            'price' => 19.99,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Hepadol',
            'price' => 19.99,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Levanthor',
            'price' => 19.99,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Luna Sleep',
            'price' => 19.99,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Up Estimulador',
            'price' => 39.99,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Serpidex',
            'price' => 19.99,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
        ]);
    }
}
