<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Structure;
use Illuminate\Support\Facades\DB;

class StructureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('Structures')->insert([
            [
                'image' => 'images/strukturpengurus.png',
                'title' => 'Sejarah IMA',
            ],
        ]);
    }
}