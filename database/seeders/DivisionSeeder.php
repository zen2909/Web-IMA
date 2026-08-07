<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DivisionSeeder extends Seeder
{
    public function run(): void
    {
        $divisions = [
            [
                'name' => 'Badan Pengurus Harian (BPH)',
                'slug' => 'bph',
                'description' => 'Badan yang bertanggung jawab atas pengelolaan organisasi secara keseluruhan, terdiri dari Ketua, Wakil Ketua, Sekretaris, dan Bendahara.',
                'vision' => 'Menjadi pengurus yang profesional dan bertanggung jawab',
                'mission' => 'Mengelola organisasi dengan baik, menjaga komunikasi antar divisi',
                'icon' => 'images/icon/bph.png',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Divisi Keilmuan',
                'slug' => 'keilmuan',
                'description' => 'Divisi yang bertugas untuk mengembangkan kemampuan akademis dan intelektual seluruh anggota IMA.',
                'vision' => 'Menciptakan anggota IMA yang cerdas dan berwawasan luas',
                'mission' => 'Mengadakan kajian ilmiah, diskusi, dan pengembangan akademik',
                'icon' => 'images/icon/keilmuan.png',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Divisi PSDM',
                'slug' => 'psdm',
                'description' => 'Divisi yang bertugas mengembangkan sumber daya manusia dan soft skill anggota IMA.',
                'vision' => 'Menciptakan anggota IMA yang kompeten dan berkarakter',
                'mission' => 'Mengadakan pelatihan, workshop, dan pengembangan kepribadian',
                'icon' => 'images/icon/psdm.png',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Divisi IT',
                'slug' => 'it',
                'description' => 'Divisi yang bertugas mengelola teknologi informasi dan sistem digital organisasi.',
                'vision' => 'Menjadi organisasi yang modern dan digital',
                'mission' => 'Mengembangkan website, sistem informasi, dan infrastruktur digital',
                'icon' => 'images/icon/it.png',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Divisi PPD',
                'slug' => 'ppd',
                'description' => 'Divisi yang bertugas mengelola pengembangan dan pemberdayaan masyarakat.',
                'vision' => 'Menjadi agen perubahan bagi masyarakat Arosbaya',
                'mission' => 'Mengadakan program pengabdian masyarakat, sosial, dan pemberdayaan',
                'icon' => 'images/icon/ppd.png',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Divisi MINBA',
                'slug' => 'minba',
                'description' => 'Divisi yang bertugas mengelola minat dan bakat anggota IMA.',
                'vision' => 'Mengembangkan potensi seni dan budaya Arosbaya',
                'mission' => 'Mengadakan kegiatan seni, budaya, dan pengembangan bakat',
                'icon' => 'images/icon/minba.png',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($divisions as $division) {
            DB::table('divisions')->insert($division);
        }
    }
}