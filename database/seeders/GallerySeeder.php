<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        // Gallery untuk Activities
        $activities = DB::table('activities')->get();
        
        foreach ($activities as $activity) {
            // Tambahkan 2-3 gambar untuk setiap activity
            for ($i = 1; $i <= 3; $i++) {
                DB::table('galleries')->insert([
                    'galleryable_id' => $activity->id,
                    'galleryable_type' => 'App\Models\Activity',
                    'image' => 'images/gallery/activities/' . $activity->slug . '-' . $i . '.png',
                    'title' => 'Foto ' . $activity->title . ' ' . $i,
                    'description' => 'Dokumentasi kegiatan ' . $activity->title,
                    'order' => $i,
                    'is_featured' => $i === 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Gallery untuk Programs
        $programs = DB::table('programs')->get();
        
        foreach ($programs as $program) {
            // Tambahkan 2 gambar untuk setiap program
            for ($i = 1; $i <= 2; $i++) {
                DB::table('galleries')->insert([
                    'galleryable_id' => $program->id,
                    'galleryable_type' => 'App\Models\Program',
                    'image' => 'images/gallery/programs/' . $program->slug . '-' . $i . '.png',
                    'title' => 'Dokumentasi ' . $program->name . ' ' . $i,
                    'description' => 'Dokumentasi program kerja ' . $program->name,
                    'order' => $i,
                    'is_featured' => $i === 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Gallery untuk Blogs
        $blogs = DB::table('blogs')->get();
        
        foreach ($blogs as $blog) {
            // Tambahkan 2 gambar untuk setiap blog
            for ($i = 1; $i <= 2; $i++) {
                DB::table('galleries')->insert([
                    'galleryable_id' => $blog->id,
                    'galleryable_type' => 'App\Models\Blog',
                    'image' => 'images/gallery/blogs/' . $blog->slug . '-' . $i . '.png',
                    'title' => 'Gambar ' . $blog->title . ' ' . $i,
                    'description' => 'Gambar pendukung artikel ' . $blog->title,
                    'order' => $i,
                    'is_featured' => $i === 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}