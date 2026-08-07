<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // Master Data
            PositionSeeder::class,
            PeriodSeeder::class,
            CampusSeeder::class,
            DivisionSeeder::class,
            
            // Spatie Permission & Admin User
            RolePermissionSeeder::class,
            
            // Member Data
            MemberSeeder::class,
            
            // Content Data
            ProgramSeeder::class,
            ActivitySeeder::class,
            BlogSeeder::class,
            GallerySeeder::class,
            
        ]);
    }
}