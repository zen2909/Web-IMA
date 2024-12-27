<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryArosbayaTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('history_arosbaya')->insert([
            'text' => 'Dalam literatur kuna, disebutkan tentang salah satu asal usul penyebutan Arosbaya. Salah satunya yang dikutip RTA Zainalfattah Notoadikusumo dalam bukunya yang berjudul â€œSedjarah Tjaranja Pemerintahan DaerahDaerah di Kepulauan Madura dengan Hubungannjaâ€ (Pamekasan, 1951). Di buku tersebut Kangjeng Sinal (sebutan Zainalfattah) menyebut bahwa Arosbaya berasal dari dua kata, yaitu arus atau aros, dan baya atau baja atau bahaya.
                    Di sini Zainalfattah terkesan mengoreksi pelafalan atau sebutan sebagian orang tentang Arisbaya atau Res Baja. Alasannya, atau pertimbangan yang digunakan oleh Zainalfattah adalah letak geografis Arosbaya. Yang mana letak desa Arosbaya berada di tepi laut, di pantai Utara Pulau Madura. Sehingga penyebutan Arosbaya dinilai Zainalfattah lebih tepat. Pasalnya, ada kata arus atau aros (Madura). Sedang kata baya diambil dari baja atau bahaya atau babaja (Madura). Meski demikian, Zainalfattah tidak lantas menyalahkan dengan serta merta penyebutan Arisbaya atau Res Baja. Kendati di kemudian hari memang nama Arosbaya dipilih sebagai nama resmi kecamatan saat ini.
                    Sedang dalam sebuah sumber, disebutkan bahwa nama Arisbaya lebih dulu dari pada Arosbaya. Sumber dalam wikipedia tentang nama Arosbaya menyebut secara singkat. Berikut kutipan aslinya: â€œasal mula Arosbaya diceritakan bahwa pada masa pemerintahan Panembahan Ki Lemah Duwur raja islam pertama di madura pada tahun 1531 â€“ 1592. Arosbaya dulunya di berinama aris-banggi (ada aturan), dan berubah menjadi aris beje, resbeje dan terakhir arosbaya. kerajaan arosbaya pada masa pemerintahan Panembahan Lemah Duwur, kerajaan Arosbaya telah meluaskan daerah kekuasaannya hingga ke seluruh Madura barat (Kab.Bangkalan), termasuk Sampang dan Blegaâ.',
            'image1' => 'images/makamagung.jpg',
            'image2' => 'images/bukitkapur.png',
            'image3' => 'images/aermata_ebhu.jpg',
        ]);
    }
}