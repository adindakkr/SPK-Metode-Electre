<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElectreAlternatives extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'A1',
            ],
            [
                'name' => 'A2',
            ],
            [
                'name' => 'A3',
            ],
            [
                'name' => 'A4',
            ],
            [
                'name' => 'A5',
            ],
        ];
    
        DB::table('electre_alternatives')->insert($data);
    }
}
