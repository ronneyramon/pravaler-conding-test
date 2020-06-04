<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Aluno 1',
            'cpf' => '59060347064',
            'birth_date' => '1980-01-10',
            'email' => 'teste@teste.com.br',
            'mobile_number' => '11999999999',
            'address_street' => 'Rua',
            'address_number' => '1',
            'address_neighborhood' => 'Bairro',
            'address_city' => 'Cidade',
            'address_uf' => 'UF',
            'status' => 'active',
            'course_id' => 1
        ]);

        DB::table('students')->insert([
            'name' => 'Aluno 2',
            'cpf' => '72958036022',
            'birth_date' => '1980-01-10',
            'email' => 'teste@teste.com.br',
            'mobile_number' => '11999999999',
            'address_street' => 'Rua',
            'address_number' => '1',
            'address_neighborhood' => 'Bairro',
            'address_city' => 'Cidade',
            'address_uf' => 'UF',
            'status' => 'active',
            'course_id' => 2
        ]);

        DB::table('students')->insert([
            'name' => 'Aluno 3',
            'cpf' => '60084605022',
            'birth_date' => '1980-01-10',
            'email' => 'teste@teste.com.br',
            'mobile_number' => '11999999999',
            'address_street' => 'Rua',
            'address_number' => '1',
            'address_neighborhood' => 'Bairro',
            'address_city' => 'Cidade',
            'address_uf' => 'UF',
            'status' => 'inactive',
            'course_id' => 1
        ]);
    }
}
