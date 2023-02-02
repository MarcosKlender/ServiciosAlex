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

        DB::table('products')->insert([
            'name' => 'Potenciador XOXO',
            'price' => 20,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Lovin Fem',
            'price' => 25,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Potenciador Macho Alfa',
            'price' => 24.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Spray Macho Alfa',
            'price' => 19.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Cápsulas Macho Alfa + Anillo',
            'price' => 29.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Pulsera Biomagnética',
            'price' => 19.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Promo American Fit 2x1',
            'price' => 49.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Litoku',
            'price' => 14.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Biotin Collagen',
            'price' => 19.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Hepadol',
            'price' => 19.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Levanthor',
            'price' => 19.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Luna Sleep',
            'price' => 19.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Up Estimulador',
            'price' => 39.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Serpidex',
            'price' => 19.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Quita Vicios',
            'price' => 29.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Anillo Vibrador',
            'price' => 9.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Combo Anillo',
            'price' => 14.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Spray XOXO',
            'price' => 19.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Combo Spray Macho Alfa',
            'price' => 29.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Promo Potenciador XOXO',
            'price' => 30,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Combo Macho Alfa',
            'price' => 39.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Promo Up Estimulador',
            'price' => 59.99,
            'stock_alejo' => 0,
            'stock_andy' => 0,
            'stock_rodolfo' => 0,
            'stock_kevin' => 0,
            'stock_hector' => 0,
            'stock_jenny' => 0,
        ]);
    }
}
