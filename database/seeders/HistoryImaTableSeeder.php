<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryImaTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('history_ima')->insert([
            'text' => 'Ikatan Mahasiswa Arosbaya (IMA) didirikan pada tanggal 22 Desember 2018 oleh sekelompok mahasiswa asal Kecamatan Arosbaya, Kabupaten Bangkalan, Jawa Timur. Latar belakang pendirian IMA adalah keinginan kuat dari para mahasiswa untuk memiliki sebuah wadah yang dapat menampung aspirasi, mempererat silaturahmi, serta berkontribusi nyata bagi kemajuan daerah asal mereka. Kecamatan Arosbaya, yang kaya akan budaya dan sejarah, memerlukan perhatian dan dedikasi dari generasi mudanya, terutama mereka yang sedang menimba ilmu di berbagai perguruan tinggi. Pendiri IMA adalah para mahasiswa yang menyadari pentingnya peran pemuda dalam pembangunan dan kemajuan daerah. Mereka merasakan kebutuhan akan sebuah organisasi yang dapat menjadi tempat berkumpul, berdiskusi, dan berkolaborasi dalam berbagai kegiatan yang bermanfaat bagi masyarakat Arosbaya. Dengan semangat kebersamaan dan rasa cinta terhadap kampung halaman, mereka sepakat untuk mendirikan IMA sebagai wadah bagi mahasiswa Arosbaya untuk bersatu dan berkontribusi. Sejak berdirinya, IMA telah berkomitmen untuk mengabdi kepada masyarakat Kecamatan Arosbaya. Salah satu moto yang selalu dipegang teguh oleh organisasi ini adalah "Alombhar Ta Adhina Asal", yang berarti "Di manapun kita berada, jangan sampai melupakan asal kita". Moto ini mencerminkan semangat dan komitmen IMA untuk selalu membawa dan melestarikan nilai-nilai budaya serta tradisi Arosbaya dalam setiap kegiatan dan langkah yang mereka ambil. Dalam perjalanannya, IMA terus berkembang dan aktif mengadakan berbagai program dan kegiatan yang berfokus pada pendidikan, sosial, dan budaya. Dengan semangat kebersamaan dan dedikasi tinggi, IMA berusaha untuk menjadi agen perubahan yang positif dan memberikan kontribusi nyata bagi kemajuan Kecamatan Arosbaya. Keberadaan IMA diharapkan dapat menjadi inspirasi bagi generasi muda lainnya untuk selalu ingat dan berbakti kepada daerah asal mereka.',
            'image1' => 'images/sejarah1.png',
            'image2' => 'images/sejarah2.png',
            'image3' => 'images/sejarah3.png',
        ]);
    }
}