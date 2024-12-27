@extends('layouts.sejarah')

@section('content')

@php
// Memecah body menjadi array berdasarkan titik
$paragraphs = explode('.', $berita->body);

// Menghapus elemen kosong dari array
$paragraphs = array_filter($paragraphs);

// Menghitung jumlah kalimat
$totalSentences = count($paragraphs);

// Menentukan batas untuk paragraf pertama
$splitIndex = ceil($totalSentences / 2); // Membagi kalimat menjadi dua bagian

// Menggabungkan kalimat menjadi dua paragraf
$firstParagraph = implode('.', array_slice($paragraphs, 0, $splitIndex)) . '.';
$secondParagraph = implode('.', array_slice($paragraphs, $splitIndex)) . '.';
@endphp

<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-0 relative">
    <div class="bg-cover bg-center text-center overflow-hidden" style="min-height: 500px; background-image: url('{{ asset('storage/' . $berita->foto) }}')">
    </div>
    <div class="max-w-3xl mx-auto">
        <div class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
            <div class="bg-white relative top-0 -mt-32 p-5 sm:p-10">
                <h1 class="text-gray-900 font-bold text-3xl mb-2">{{$berita->judul}}</h1>
                <h3 class="text-2xl font-bold my-5"># What is {{$berita->judul}} ?</h3>
                <p class="text-base leading-8 my-5 text-justify">
                    {{ $firstParagraph }} <!-- Paragraf pertama -->
                </p>
                <p class="text-base leading-8 my-5 text-justify">
                    {{ $secondParagraph }} <!-- Paragraf kedua -->
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
