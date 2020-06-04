<?php

use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->insert([
            'name' => 'Instituição 1',
            'cnpj' => '90095809000137',
            'status' => 'active',
        ]);

        DB::table('institutions')->insert([
            'name' => 'Instituição 2',
            'cnpj' => '48867152000112',
            'status' => 'inactive',
        ]);
    }
}
