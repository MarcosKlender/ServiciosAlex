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
    }
}
