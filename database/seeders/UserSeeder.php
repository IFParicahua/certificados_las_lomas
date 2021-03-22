<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'name' => 'Administrador',
                'email' => 'administrador@gmail.com',
                'password' => Hash::make('123456789'),
                'rol_id' => 1,
                'company_id' => 1,
            ],[
                'name' => 'Ing.Montserrat Zamorano',
                'email' => 'montserrat.zamorano@laslomas.com.bo',
                'password' => Hash::make('montserrat.zamorano'),
                'rol_id' => 2,
                'company_id' => 1,
            ]
        ]);
    }
}
