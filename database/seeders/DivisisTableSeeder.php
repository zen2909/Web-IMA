<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('divisis')->insert([
            [
                'name' => '1',
                'description' => 'Divisi yang bertugas untuk mengembangkan kemampuan seluruh anggota Ikatan Mahasiswa Arosbaya dalam bidang akademis.',
                'image' => 'BPH.png'
            ],
            [
                'name' => '2',
                'description' => 'Divisi yang bertugas untuk mengembangkan kemampuan seluruh anggota Ikatan Mahasiswa Arosbaya dalam bidang akademis.',
                'image' => 'Keilmuan.png'
            ],
            [
                'name' => '3',
                'description' => 'Divisi yang bertugas untuk mengembangkan kemampuan seluruh anggota Ikatan Mahasiswa Arosbaya dalam bidang akademis.',
                'image' => 'PSDM.png'
            ],
            [
                'name' => '4',
                'description' => 'Divisi yang bertugas untuk mengembangkan kemampuan seluruh anggota Ikatan Mahasiswa Arosbaya dalam bidang akademis.',
                'image' => 'IT.png'
            ],
            [
                'name' => '5',
                'description' => 'Divisi yang bertugas untuk mengembangkan kemampuan seluruh anggota Ikatan Mahasiswa Arosbaya dalam bidang akademis.',
                'image' => 'PPD.png'
            ],
            [
                'name' => '6',
                'description' => 'Divisi yang bertugas untuk mengembangkan kemampuan seluruh anggota Ikatan Mahasiswa Arosbaya dalam bidang akademis.',
                'image' => 'MINBA.png'
            ],
        ]);

        // Data program kerja
        DB::table('programs')->insert([
            ['divisi_id' => 1, 'program_name' => 'Program 1 BPH', 'program_image' => 'program1.png'],
            ['divisi_id' => 2, 'program_name' => 'Program 2 Keilmuan', 'program_image' => 'program2.png'],
            // Tambahkan data program lainnya
        ]);

        // Data anggota
        DB::table('members')->insert([
            ['divisi_id' => 1, 'member_name' => 'Anggota 1', 'position' => 'Ketua', 'member_image' => 'anggota1.png'],
            ['divisi_id' => 2, 'member_name' => 'Anggota 2', 'position' => 'Sekretaris', 'member_image' => 'anggota2.png'],
            // Tambahkan data anggota lainnya
        ]);
    }
}