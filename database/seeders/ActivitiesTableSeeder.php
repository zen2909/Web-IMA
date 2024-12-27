<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('activities')->insert([
            ['image' => 'images/kegiatan1.png', 'title' => 'Kajian Rutin IMA', 'description' => 'kajian dengan tema pentingnya public speaking.'],
            ['image' => 'images/kegiatan2.png', 'title' => 'Rapat Triwulan', 'description' => 'Rapat rutin setiap 3 bulan sekali oleh pengurus ima untuk evaluasi.'],
            ['image' => 'images/kegiatan3.png', 'title' => 'Santunan dan buka bersama', 'description' => 'pengumpulan donasi, penyaluran, sekaligus buka bersama anak yatim.'],
            // Tambahkan lebih banyak data jika perlu
        ]);
    }
}