<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElectreData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_alternative' => 1,
                'id_criteria' => 1,
                'value' => 7,
            ],
            [
                'id_alternative' => 1,
                'id_criteria' => 2,
                'value' => 7,
            ],
            [
                'id_alternative' => 1,
                'id_criteria' => 3,
                'value' => 8,
            ],
            [
                'id_alternative' => 1,
                'id_criteria' => 4,
                'value' => 8,
            ],
            [
                'id_alternative' => 2,
                'id_criteria' => 1,
                'value' => 8,
            ],
            [
                'id_alternative' => 2,
                'id_criteria' => 2,
                'value' => 8,
            ],
            [
                'id_alternative' => 2,
                'id_criteria' => 3,
                'value' => 8,
            ],
            [
                'id_alternative' => 2,
                'id_criteria' => 4,
                'value' => 9,
            ],
            [
                'id_alternative' => 3,
                'id_criteria' => 1,
                'value' => 7,
            ],
            [
                'id_alternative' => 3,
                'id_criteria' => 2,
                'value' => 6,
            ],
            [
                'id_alternative' => 3,
                'id_criteria' => 3,
                'value' => 8,
            ],
            [
                'id_alternative' => 3,
                'id_criteria' => 4,
                'value' => 7,
            ],
            [
                'id_alternative' => 4,
                'id_criteria' => 1,
                'value' => 8,
            ],
            [
                'id_alternative' => 4,
                'id_criteria' => 2,
                'value' => 8,
            ],
            [
                'id_alternative' => 4,
                'id_criteria' => 3,
                'value' => 9,
            ],
            [
                'id_alternative' => 4,
                'id_criteria' => 4,
                'value' => 8,
            ],
            [
                'id_alternative' => 5,
                'id_criteria' => 1,
                'value' => 9,
            ],
            [
                'id_alternative' => 5,
                'id_criteria' => 2,
                'value' => 8,
            ],
            [
                'id_alternative' => 5,
                'id_criteria' => 3,
                'value' => 8,
            ],
            [
                'id_alternative' => 5,
                'id_criteria' => 4,
                'value' => 9,
            ],
        ];
        DB::table('electre_evaluations')->insert($data);
    }
}
