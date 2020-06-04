<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Carla Freitas',
            'email' => 'carla.freitas@teste.com.br',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Pedro Silva',
            'email' => 'pedro.silva@teste.com.br',
            'password' => Hash::make('12345678'),
        ]);
    }
}
