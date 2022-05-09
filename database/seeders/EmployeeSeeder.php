<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("employees")->insert([
            'nama'=> 'Abdul',
            'jenis_kelamin'=>'Laki-laki',
            'no_telp'=>'08179187676'
        ]);
    }
}
