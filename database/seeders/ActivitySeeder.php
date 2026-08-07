<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        $periodId = DB::table('periods')->where('is_active', true)->first()->id;
        
        $activities = [
            [
                'division_id' => DB::table('divisions')->where('slug', 'bph')->first()->id,
                'period_id' => $periodId,
                'title' => 'Rapat Kerja Tahunan 2024',
                'slug' => 'raker-tahunan-2024',
                'description' => 'Rapat kerja tahunan untuk menyusun program kerja organisasi tahun 2024',
                'featured_image' => 'images/activities/raker.png',
                'start_date' => '2024-01-15',
                'end_date' => '2024-01-17',
                'location' => 'Arosbaya, Bangkalan',
                'status' => 'completed',
            ],
            [
                'division_id' => DB::table('divisions')->where('slug', 'keilmuan')->first()->id,
                'period_id' => $periodId,
                'title' => 'Kajian Rutin IMA: Public Speaking',
                'slug' => 'kajian-rutin-public-speaking',
                'description' => 'Kajian dengan tema pentingnya public speaking bagi mahasiswa',
                'featured_image' => 'images/activities/kajian.png',
                'start_date' => '2024-02-10',
                'end_date' => '2024-02-10',
                'location' => 'Surabaya',
                'status' => 'completed',
            ],
            [
                'division_id' => DB::table('divisions')->where('slug', 'psdm')->first()->id,
                'period_id' => $periodId,
                'title' => 'Pelatihan Soft Skill Angkatan 2024',
                'slug' => 'pelatihan-soft-skill-2024',
                'description' => 'Pelatihan pengembangan soft skill untuk anggota baru IMA',
                'featured_image' => 'images/activities/pelatihan.png',
                'start_date' => '2024-03-01',
                'end_date' => '2024-03-03',
                'location' => 'Malang',
                'status' => 'completed',
            ],
            [
                'division_id' => DB::table('divisions')->where('slug', 'it')->first()->id,
                'period_id' => $periodId,
                'title' => 'Workshop Web Development',
                'slug' => 'workshop-web-development',
                'description' => 'Workshop pengembangan website menggunakan Laravel',
                'featured_image' => 'images/activities/workshop.png',
                'start_date' => '2024-04-15',
                'end_date' => '2024-04-17',
                'location' => 'Surabaya',
                'status' => 'completed',
            ],
            [
                'division_id' => DB::table('divisions')->where('slug', 'ppd')->first()->id,
                'period_id' => $periodId,
                'title' => 'Santunan dan Buka Bersama Anak Yatim',
                'slug' => 'santunan-buka-bersama',
                'description' => 'Pengumpulan donasi, penyaluran, dan buka bersama anak yatim di Arosbaya',
                'featured_image' => 'images/activities/santunan.png',
                'start_date' => '2024-03-25',
                'end_date' => '2024-03-25',
                'location' => 'Arosbaya, Bangkalan',
                'status' => 'completed',
            ],
            [
                'division_id' => DB::table('divisions')->where('slug', 'minba')->first()->id,
                'period_id' => $periodId,
                'title' => 'Pentas Seni Budaya Arosbaya',
                'slug' => 'pentas-seni-budaya-arosbaya',
                'description' => 'Pentas seni dan budaya untuk melestarikan kesenian Arosbaya',
                'featured_image' => 'images/activities/pentas.png',
                'start_date' => '2024-08-15',
                'end_date' => '2024-08-15',
                'location' => 'Bangkalan',
                'status' => 'planning',
            ],
            [
                'division_id' => DB::table('divisions')->where('slug', 'bph')->first()->id,
                'period_id' => $periodId,
                'title' => 'Rapat Triwulan Pengurus IMA',
                'slug' => 'rapat-triwulan-pengurus',
                'description' => 'Rapat evaluasi rutin setiap 3 bulan oleh pengurus IMA',
                'featured_image' => 'images/activities/rapat.png',
                'start_date' => '2024-05-20',
                'end_date' => '2024-05-20',
                'location' => 'Surabaya',
                'status' => 'ongoing',
            ],
        ];

        foreach ($activities as $activity) {
            DB::table('activities')->insert($activity);
        }
    }
}