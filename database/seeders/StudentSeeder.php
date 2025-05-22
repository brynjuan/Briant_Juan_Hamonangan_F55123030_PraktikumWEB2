<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                'name' => 'Briant Juan Hamonangan',
                'student_id_number' => 'F55123030',
                'email' => 'BriantJuan@gmail.com',
                'phone_number' => '085232408053',
                'birth_date' => '2006-07-10',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Kocan ',
                'student_id_number' => 'F55123021',
                'email' => 'Kocann@gmail.com',
                'phone_number' => '0852802901232',
                'birth_date' => '2005-09-02',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 2,
            ]
        ]);
    }
}
