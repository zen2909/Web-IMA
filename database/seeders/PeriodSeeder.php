<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PeriodSeeder extends Seeder
{
    public function run(): void
    {
        $periods = [
            [
                'name' => 'Periode 2018-2019',
                'slug' => 'periode-2018-2019',
                'start_date' => '2018-12-22',
                'end_date' => '2019-12-31',
                'is_active' => false,
                'description' => 'Periode pertama organisasi IMA',
            ],
            [
                'name' => 'Periode 2020-2021',
                'slug' => 'periode-2020-2021',
                'start_date' => '2020-01-01',
                'end_date' => '2021-12-31',
                'is_active' => false,
                'description' => 'Periode kedua organisasi IMA',
            ],
            [
                'name' => 'Periode 2022-2023',
                'slug' => 'periode-2022-2023',
                'start_date' => '2022-01-01',
                'end_date' => '2023-12-31',
                'is_active' => false,
                'description' => 'Periode ketiga organisasi IMA',
            ],
            [
                'name' => 'Periode 2024-2025',
                'slug' => 'periode-2024-2025',
                'start_date' => '2024-01-01',
                'end_date' => '2025-12-31',
                'is_active' => true,
                'description' => 'Periode keempat organisasi IMA (periode aktif)',
            ],
        ];

        foreach ($periods as $period) {
            DB::table('periods')->insert($period);
        }
    }
}