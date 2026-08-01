<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            CarouselsTableSeeder::class,
            ActivitiesTableSeeder::class,
            HistoriesTableSeeder::class,
            HistoryImaTableSeeder::class,
            HistoryArosbayaTableSeeder::class,
            StructureTableSeeder::class,
            DivisisTableSeeder::class,
        ]);
    }
}