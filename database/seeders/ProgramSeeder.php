<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $periodId = DB::table('periods')->where('is_active', true)->first()->id;
        
        $programs = [
            // BPH Programs
            [
                'division_id' => DB::table('divisions')->where('slug', 'bph')->first()->id,
                'period_id' => $periodId,
                'name' => 'Rapat Kerja Tahunan',
                'slug' => 'raker-tahunan',
                'description' => 'Rapat kerja tahunan untuk menyusun program kerja organisasi',
                'objectives' => 'Menyusun program kerja yang terstruktur dan terarah',
                'target' => 'Tersusunnya program kerja untuk satu periode',
                'status' => 'completed',
                'start_date' => '2024-01-15',
                'end_date' => '2024-01-20',
                'progress' => 100,
                'is_priority' => true,
            ],
            [
                'division_id' => DB::table('divisions')->where('slug', 'bph')->first()->id,
                'period_id' => $periodId,
                'name' => 'Evaluasi Tengah Periode',
                'slug' => 'evaluasi-tengah-periode',
                'description' => 'Evaluasi kinerja organisasi di pertengahan periode',
                'objectives' => 'Mengevaluasi capaian program dan kinerja pengurus',
                'target' => 'Laporan evaluasi dan rekomendasi perbaikan',
                'status' => 'active',
                'start_date' => '2024-07-01',
                'end_date' => '2024-07-15',
                'progress' => 60,
                'is_priority' => true,
            ],
            
            // Keilmuan Programs
            [
                'division_id' => DB::table('divisions')->where('slug', 'keilmuan')->first()->id,
                'period_id' => $periodId,
                'name' => 'Kajian Ilmiah Rutin',
                'slug' => 'kajian-ilmiah-rutin',
                'description' => 'Kajian ilmiah yang diadakan setiap bulan',
                'objectives' => 'Meningkatkan wawasan dan pengetahuan anggota',
                'target' => '12 kali kajian dalam satu tahun',
                'status' => 'active',
                'start_date' => '2024-02-01',
                'end_date' => '2024-12-31',
                'progress' => 50,
                'is_priority' => false,
            ],
            [
                'division_id' => DB::table('divisions')->where('slug', 'keilmuan')->first()->id,
                'period_id' => $periodId,
                'name' => 'Seminar Nasional',
                'slug' => 'seminar-nasional',
                'description' => 'Seminar nasional dengan tema kepemudaan dan pembangunan',
                'objectives' => 'Meningkatkan kapasitas intelektual anggota',
                'target' => '150 peserta seminar',
                'status' => 'planning',
                'start_date' => '2024-11-01',
                'end_date' => '2024-11-30',
                'progress' => 20,
                'is_priority' => true,
            ],
            
            // PSDM Programs
            [
                'division_id' => DB::table('divisions')->where('slug', 'psdm')->first()->id,
                'period_id' => $periodId,
                'name' => 'Pelatihan Soft Skill',
                'slug' => 'pelatihan-soft-skill',
                'description' => 'Pelatihan pengembangan soft skill untuk anggota',
                'objectives' => 'Meningkatkan kemampuan komunikasi dan kepemimpinan',
                'target' => '50 anggota terlatih',
                'status' => 'completed',
                'start_date' => '2024-03-01',
                'end_date' => '2024-03-15',
                'progress' => 100,
                'is_priority' => false,
            ],
            
            // IT Programs
            [
                'division_id' => DB::table('divisions')->where('slug', 'it')->first()->id,
                'period_id' => $periodId,
                'name' => 'Pengembangan Website IMA',
                'slug' => 'pengembangan-website-ima',
                'description' => 'Pengembangan dan pemeliharaan website organisasi',
                'objectives' => 'Memiliki website profesional sebagai portal informasi',
                'target' => 'Website selesai dan online',
                'status' => 'active',
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'progress' => 70,
                'is_priority' => true,
            ],
            
            // PPD Programs
            [
                'division_id' => DB::table('divisions')->where('slug', 'ppd')->first()->id,
                'period_id' => $periodId,
                'name' => 'Bakti Sosial Arosbaya',
                'slug' => 'bakti-sosial-arosbaya',
                'description' => 'Program pengabdian masyarakat di Kecamatan Arosbaya',
                'objectives' => 'Memberikan kontribusi nyata bagi masyarakat Arosbaya',
                'target' => '100 keluarga terdampak',
                'status' => 'active',
                'start_date' => '2024-06-01',
                'end_date' => '2024-08-31',
                'progress' => 40,
                'is_priority' => true,
            ],
            
            // MINBA Programs
            [
                'division_id' => DB::table('divisions')->where('slug', 'minba')->first()->id,
                'period_id' => $periodId,
                'name' => 'Festival Budaya Arosbaya',
                'slug' => 'festival-budaya-arosbaya',
                'description' => 'Festival untuk melestarikan budaya Arosbaya',
                'objectives' => 'Melestarikan dan mempromosikan budaya Arosbaya',
                'target' => '500 pengunjung',
                'status' => 'planning',
                'start_date' => '2024-10-01',
                'end_date' => '2024-10-15',
                'progress' => 10,
                'is_priority' => true,
            ],
        ];

        foreach ($programs as $program) {
            DB::table('programs')->insert($program);
        }
    }
}