<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        $positions = [
            // Core Positions (is_core = true)
            [
                'name' => 'Ketua',
                'slug' => 'ketua',
                'level' => 100,
                'is_core' => true,
                'description' => 'Pemimpin tertinggi organisasi',
                'responsibilities' => 'Memimpin organisasi, mengambil keputusan strategis, mewakili organisasi di internal dan eksternal',
            ],
            [
                'name' => 'Wakil Ketua',
                'slug' => 'wakil-ketua',
                'level' => 90,
                'is_core' => true,
                'description' => 'Pendamping ketua dalam memimpin organisasi',
                'responsibilities' => 'Membantu ketua dalam menjalankan tugas, menggantikan ketua jika berhalangan',
            ],
            [
                'name' => 'Sekretaris',
                'slug' => 'sekretaris',
                'level' => 80,
                'is_core' => true,
                'description' => 'Pengelola administrasi dan kesekretariatan',
                'responsibilities' => 'Mengelola surat-menyurat, notulen rapat, dokumentasi, dan administrasi organisasi',
            ],
            [
                'name' => 'Bendahara',
                'slug' => 'bendahara',
                'level' => 70,
                'is_core' => true,
                'description' => 'Pengelola keuangan organisasi',
                'responsibilities' => 'Mengelola kas organisasi, membuat laporan keuangan, mengelola donasi dan dana',
            ],
            
            // Division Positions (is_core = false)
            [
                'name' => 'Kepala Divisi',
                'slug' => 'kepala-divisi',
                'level' => 60,
                'is_core' => false,
                'description' => 'Pemimpin suatu divisi',
                'responsibilities' => 'Memimpin divisi, mengkoordinasi program kerja divisi, melaporkan kinerja divisi',
            ],
            [
                'name' => 'Wakil Kepala Divisi',
                'slug' => 'wakil-kepala-divisi',
                'level' => 50,
                'is_core' => false,
                'description' => 'Pendamping kepala divisi',
                'responsibilities' => 'Membantu kepala divisi, menggantikan jika berhalangan',
            ],
            [
                'name' => 'Anggota',
                'slug' => 'anggota',
                'level' => 10,
                'is_core' => false,
                'description' => 'Anggota biasa organisasi',
                'responsibilities' => 'Mengikuti program kerja, berpartisipasi dalam kegiatan organisasi',
            ],
        ];

        foreach ($positions as $position) {
            DB::table('positions')->insert($position);
        }
    }
}