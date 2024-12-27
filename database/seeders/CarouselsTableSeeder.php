<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('carousels')->insert([
            ['image' => 'images/fotopengurus.png'],
            // Tambahkan lebih banyak data jika perlu
        ]);
    }
}