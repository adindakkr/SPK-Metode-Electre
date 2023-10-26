<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElectreCriteria extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'criteria' => 'Kualitas',
                'weight' => 2,
            ],
            [
                'criteria' => 'Prestasi',
                'weight' => 3,
            ],
            [
                'criteria' => 'Fasilitas',
                'weight' => 4,
            ],
            [
                'criteria' => 'Reputasi',
                'weight' => 4,
            ],
        ];
    
        DB::table('electre_criterias')->insert($data);
    }
}
