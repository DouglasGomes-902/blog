<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('funcionario')->insert([
                'name' => 'joão'
            ]);
            DB::table('funcionario')->insert([
                'name' => 'joaquina'
            ]);
            DB::table('funcionario')->insert([
                'name' => 'maria'
            ]);
        
    }
}
