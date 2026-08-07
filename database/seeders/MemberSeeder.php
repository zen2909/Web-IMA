<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil ID dari data master yang sudah ada
        $periodId = DB::table('periods')->where('is_active', true)->first()->id;
        
        // Core Members (tanpa division_id)
        $coreMembers = [
            [
                'user_id' => 1, // Admin user
                'position_id' => DB::table('positions')->where('slug', 'ketua')->first()->id,
                'division_id' => null,
                'period_id' => $periodId,
                'campus_id' => DB::table('campuses')->where('slug', 'universitas-airlangga')->first()->id,
                'name' => 'Ahmad Fauzi',
                'slug' => 'ahmad-fauzi',
                'photo' => 'images/members/ketua.png',
                'email' => 'ketua@ima.com',
                'phone' => '08123456789',
                'bio' => 'Mahasiswa aktif Universitas Airlangga, memiliki pengalaman dalam organisasi kepemudaan.',
                'study_program' => 'Ilmu Hukum',
                'batch' => 2020,
                'is_active' => true,
                'order' => 1,
            ],
            [
                'user_id' => null,
                'position_id' => DB::table('positions')->where('slug', 'wakil-ketua')->first()->id,
                'division_id' => null,
                'period_id' => $periodId,
                'campus_id' => DB::table('campuses')->where('slug', 'its-surabaya')->first()->id,
                'name' => 'Siti Aisyah',
                'slug' => 'siti-aisyah',
                'photo' => 'images/members/wakil.png',
                'email' => 'wakil@ima.com',
                'phone' => '08123456780',
                'bio' => 'Mahasiswa ITS, aktif dalam berbagai kegiatan sosial dan kemahasiswaan.',
                'study_program' => 'Teknik Informatika',
                'batch' => 2021,
                'is_active' => true,
                'order' => 2,
            ],
            [
                'user_id' => null,
                'position_id' => DB::table('positions')->where('slug', 'sekretaris')->first()->id,
                'division_id' => null,
                'period_id' => $periodId,
                'campus_id' => DB::table('campuses')->where('slug', 'universitas-brawijaya')->first()->id,
                'name' => 'Muhammad Ali',
                'slug' => 'muhammad-ali',
                'photo' => 'images/members/sekretaris.png',
                'email' => 'sekretaris@ima.com',
                'phone' => '08123456781',
                'bio' => 'Mahasiswa UB, memiliki kemampuan administrasi dan organisasi yang baik.',
                'study_program' => 'Administrasi Publik',
                'batch' => 2020,
                'is_active' => true,
                'order' => 3,
            ],
            [
                'user_id' => null,
                'position_id' => DB::table('positions')->where('slug', 'bendahara')->first()->id,
                'division_id' => null,
                'period_id' => $periodId,
                'campus_id' => DB::table('campuses')->where('slug', 'university-negeri-surabaya')->first()->id,
                'name' => 'Dewi Kartika',
                'slug' => 'dewi-kartika',
                'photo' => 'images/members/bendahara.png',
                'email' => 'bendahara@ima.com',
                'phone' => '08123456782',
                'bio' => 'Mahasiswa UNESA, memiliki pengalaman dalam pengelolaan keuangan organisasi.',
                'study_program' => 'Akuntansi',
                'batch' => 2021,
                'is_active' => true,
                'order' => 4,
            ],
        ];

        foreach ($coreMembers as $member) {
            DB::table('members')->insert($member);
        }

        // Division Members
        $divisions = DB::table('divisions')->get();
        $headPositionId = DB::table('positions')->where('slug', 'kepala-divisi')->first()->id;
        $memberPositionId = DB::table('positions')->where('slug', 'anggota')->first()->id;

        foreach ($divisions as $index => $division) {
            // Kepala Divisi
            DB::table('members')->insert([
                'user_id' => null,
                'position_id' => $headPositionId,
                'division_id' => $division->id,
                'period_id' => $periodId,
                'campus_id' => DB::table('campuses')->where('slug', 'universitas-trunjoyo-madura')->first()->id,
                'name' => 'Kepala ' . $division->name,
                'slug' => 'kepala-' . $division->slug,
                'photo' => 'images/members/kepala-divisi.png',
                'email' => 'kepala.' . $division->slug . '@ima.com',
                'phone' => '0812345678' . ($index + 10),
                'bio' => 'Kepala Divisi ' . $division->name . ' yang bertanggung jawab atas pengelolaan divisi.',
                'study_program' => 'Ilmu Komunikasi',
                'batch' => 2020,
                'is_active' => true,
                'order' => 1,
            ]);

            // Anggota Divisi (3 anggota per divisi)
            for ($i = 1; $i <= 3; $i++) {
                DB::table('members')->insert([
                    'user_id' => null,
                    'position_id' => $memberPositionId,
                    'division_id' => $division->id,
                    'period_id' => $periodId,
                    'campus_id' => DB::table('campuses')->where('slug', 'uin-sunan-ampel')->first()->id,
                    'name' => 'Anggota ' . $division->name . ' ' . $i,
                    'slug' => 'anggota-' . $division->slug . '-' . $i,
                    'photo' => 'images/members/anggota.png',
                    'email' => 'anggota.' . $division->slug . '.' . $i . '@ima.com',
                    'phone' => '081234567' . ($i + 20 + $index * 3),
                    'bio' => 'Anggota aktif Divisi ' . $division->name,
                    'study_program' => 'Teknik Informatika',
                    'batch' => 2021 + $i,
                    'is_active' => true,
                    'order' => $i + 1,
                ]);
            }
        }

        // Update head_member_id di divisions
        foreach ($divisions as $division) {
            $headMember = DB::table('members')
                ->where('division_id', $division->id)
                ->where('position_id', $headPositionId)
                ->first();
            
            if ($headMember) {
                DB::table('divisions')
                    ->where('id', $division->id)
                    ->update(['head_member_id' => $headMember->id]);
            }
        }
    }
}