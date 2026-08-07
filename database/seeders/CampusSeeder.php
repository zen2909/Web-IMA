<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CampusSeeder extends Seeder
{
    public function run(): void
    {
        $campuses = [
            [
                'name' => 'Universitas Airlangga',
                'slug' => 'universitas-airlangga',
                'short_name' => 'UNAIR',
                'logo' => 'images/logo/unair.png',
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'is_active' => true,
            ],
            [
                'name' => 'Institut Teknologi Sepuluh Nopember',
                'slug' => 'its-surabaya',
                'short_name' => 'ITS',
                'logo' => 'images/logo/its.png',
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'is_active' => true,
            ],
            [
                'name' => 'Universitas Brawijaya',
                'slug' => 'universitas-brawijaya',
                'short_name' => 'UB',
                'logo' => 'images/logo/ub.png',
                'city' => 'Malang',
                'province' => 'Jawa Timur',
                'is_active' => true,
            ],
            [
                'name' => 'Universitas Negeri Surabaya',
                'slug' => 'university-negeri-surabaya',
                'short_name' => 'UNESA',
                'logo' => 'images/logo/unesa.png',
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'is_active' => true,
            ],
            [
                'name' => 'Universitas Trunojoyo Madura',
                'slug' => 'universitas-trunjoyo-madura',
                'short_name' => 'UTM',
                'logo' => 'images/logo/utm.png',
                'city' => 'Bangkalan',
                'province' => 'Jawa Timur',
                'is_active' => true,
            ],
            [
                'name' => 'UIN Sunan Ampel Surabaya',
                'slug' => 'uin-sunan-ampel',
                'short_name' => 'UINSA',
                'logo' => 'images/logo/uinsa.png',
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'is_active' => true,
            ],
        ];

        foreach ($campuses as $campus) {
            DB::table('campuses')->insert($campus);
        }
    }
}