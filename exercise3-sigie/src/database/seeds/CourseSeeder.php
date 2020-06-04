<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'Curso 1',
            'duration_type' => 'days',
            'duration_value' => 5,
            'status' => 'active',
            'institution_id' => 1,
        ]);

        DB::table('courses')->insert([
            'name' => 'Curso 2',
            'duration_type' => 'months',
            'duration_value' => 6,
            'status' => 'active',
        ]);

        DB::table('courses')->insert([
            'name' => 'Curso 3',
            'duration_type' => 'years',
            'duration_value' => 1,
            'status' => 'inactive',
            'institution_id' => 1,
        ]);

        DB::table('courses')->insert([
            'name' => 'Curso 4',
            'duration_type' => 'weeks',
            'duration_value' => 2,
            'status' => 'inactive'
        ]);
    }
}
