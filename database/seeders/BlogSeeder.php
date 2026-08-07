<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'user_id' => 1, // Admin user
                'title' => 'Sejarah Berdirinya IMA',
                'slug' => 'sejarah-berdirinya-ima',
                'content' => '<p>Ikatan Mahasiswa Arosbaya (IMA) didirikan pada tanggal 22 Desember 2018 oleh sekelompok mahasiswa asal Kecamatan Arosbaya. Organisasi ini lahir dari keinginan kuat para mahasiswa untuk memiliki wadah yang dapat menampung aspirasi dan mempererat silaturahmi.</p>
                              <p>Latar belakang pendirian IMA adalah kesadaran akan pentingnya peran pemuda dalam pembangunan dan kemajuan daerah. Para pendiri merasakan kebutuhan akan sebuah organisasi yang dapat menjadi tempat berkumpul, berdiskusi, dan berkolaborasi dalam berbagai kegiatan yang bermanfaat bagi masyarakat Arosbaya.</p>
                              <p>Sejak berdirinya, IMA telah berkomitmen untuk mengabdi kepada masyarakat dengan moto "Alombhar Ta Adhina Asal" yang berarti "Di manapun kita berada, jangan sampai melupakan asal kita".</p>',
                'featured_image' => 'images/blog/sejarah-ima.png',
                'excerpt' => 'Ikatan Mahasiswa Arosbaya (IMA) didirikan pada tanggal 22 Desember 2018 sebagai wadah bagi mahasiswa Arosbaya untuk bersatu dan berkontribusi.',
                'is_published' => true,
                'published_at' => '2024-01-01 08:00:00',
                'views' => 150,
            ],
            [
                'user_id' => 1,
                'title' => 'Kegiatan Santunan dan Buka Bersama IMA 2024',
                'slug' => 'kegiatan-santunan-buka-bersama-ima-2024',
                'content' => '<p>Pada bulan Ramadan tahun 2024, IMA mengadakan kegiatan santunan dan buka bersama untuk anak yatim di Kecamatan Arosbaya. Kegiatan ini merupakan program tahunan yang dilaksanakan oleh Divisi PPD.</p>
                              <p>Kegiatan diawali dengan pengumpulan donasi dari para anggota dan alumni IMA. Donasi yang terkumpul kemudian disalurkan kepada anak yatim dan masyarakat yang membutuhkan di Arosbaya.</p>
                              <p>Acara puncak dilaksanakan dengan buka bersama yang dihadiri oleh anak yatim, pengurus IMA, dan masyarakat sekitar. Kegiatan ini diharapkan dapat memberikan kebahagiaan dan manfaat bagi masyarakat Arosbaya.</p>',
                'featured_image' => 'images/blog/santunan-2024.png',
                'excerpt' => 'IMA mengadakan santunan dan buka bersama untuk anak yatim di Kecamatan Arosbaya pada bulan Ramadan 2024.',
                'is_published' => true,
                'published_at' => '2024-03-26 10:30:00',
                'views' => 89,
            ],
            [
                'user_id' => 1,
                'title' => 'Peluncuran Website Baru IMA',
                'slug' => 'peluncuran-website-baru-ima',
                'content' => '<p>IMA dengan bangga mengumumkan peluncuran website resmi baru sebagai portal informasi dan sistem manajemen organisasi. Website ini dikembangkan oleh Divisi IT dengan menggunakan framework Laravel.</p>
                              <p>Website baru ini memiliki fitur-fitur modern seperti sistem admin panel, manajemen anggota, program kerja, kegiatan, dan galeri. Dengan website ini, diharapkan informasi tentang IMA dapat diakses dengan lebih mudah oleh seluruh anggota dan masyarakat.</p>
                              <p>Kami mengucapkan terima kasih kepada seluruh pihak yang telah berkontribusi dalam pengembangan website ini. Semoga website ini dapat bermanfaat bagi kemajuan IMA dan Kecamatan Arosbaya.</p>',
                'featured_image' => 'images/blog/website-baru.png',
                'excerpt' => 'IMA meluncurkan website resmi baru sebagai portal informasi dan sistem manajemen organisasi.',
                'is_published' => true,
                'published_at' => '2024-08-07 12:00:00',
                'views' => 45,
            ],
        ];

        foreach ($blogs as $blog) {
            DB::table('blogs')->insert($blog);
        }
    }
}