<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // "Ketua", "Wakil Ketua", dll
            $table->string('slug')->unique();
            $table->integer('level')->default(0); 
            // 100=Ketua, 90=Wakil Ketua, 80=Sekretaris, 70=Bendahara
            // 60=Kepala Divisi, 50=Wakil Kepala Divisi, 10=Anggota
            $table->boolean('is_core')->default(false); 
            // true untuk Ketua, Wakil, Sekretaris, Bendahara
            $table->text('description')->nullable();
            $table->text('responsibilities')->nullable(); // Tanggung jawab
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};