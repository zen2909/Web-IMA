<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('histories')->insert([
            [
                'image' => 'images/fotocard.jpg',
                'title' => 'Sejarah IMA',
                'description' => 'Ikatan Mahasiswa Arosbaya (IMA) adalah sebuah organisasi daerah di kecamatan Arosbaya,
              Bangkalan. Organisasi ini beranggotakan seluruh mahasiswa asal Arosbaya yang sedang berkuliah di berbagai
              kampus di Indonesia.'
            ],
            [
                'image' => 'images/aermata_ebhu.jpg',
                'title' => 'Sejarah Arosbaya',
                'description' => 'Diceritakan bahwa pada masa pemerintahan Panembahan Ki Lemah Duwur, raja Islam pertama
              di Madura pada tahun 1531–1592, Arosbaya dulunya diberi nama "Aris-Banggi" (ada aturan), kemudian namanya
              berubah menjadi "Aris Beje".'
            ],
        ]);
    }
}