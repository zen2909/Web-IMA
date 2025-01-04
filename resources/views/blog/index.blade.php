@extends('layouts.dashboard')

@section('content')


<div class="bg-gray-100 py-5 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                Blog IMA
            </h2>
            <p class="mt-4 text-lg text-gray-600">
                Seluruh Kegiatan Ikatan Mahasiswa Arosbaya
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-12 bg-gray-100">
            @foreach ($berita as $berita)
            <a href="{{ route('blog.detail', $berita->id) }}" class="group bg-white focus:outline-none focus:bg-white rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10 transform transition-all hover:scale-105 hover:shadow-lg duration-300">
                <div class="aspect-w-16 aspect-h-10">
                    <img class="w-full h-48 object-cover rounded-xl" src="{{ asset('storage/' . $berita->foto) }}" alt="Blog Image">
                </div>
                <h3 class="mt-5 text-xl text-gray-800 dark:text-neutral-300 dark:hover:text-white font-bold">
                    {{ $berita->judul }}
                </h3>
                <p class="mt-3 text-sm font-semibold text-gray-800 dark:text-neutral-200 ">
                    {{ Str::limit($berita->body, 100) }}
                </p>
                <p class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold text-blue-500 dark:text-neutral-200">
                    Selengkapnya
                    <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1 pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </p>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
