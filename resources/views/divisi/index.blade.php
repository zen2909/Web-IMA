@extends('layouts.dashboard')

@section('content')


<div class="bg-gray-100 py-5 lg:py-10">
    <div class="text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
            Daftar Divisi IMA
        </h2>
        <p class="mt-4 text-lg text-gray-600">
            Seluruh Profil Divisi Dalam Ikatan Mahasiswa Arosbaya
        </p>
    </div>
    <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl bg-gray-100">
        <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">
            @foreach($divisis as $divisi)
            <div class="flex flex-col p-6 border border-gray-300 rounded-xl transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
                <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl" src="{{ asset('storage/' . $divisi->image) }}" alt="blog">

                <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">{{ $divisi->name }}</h1>
                <p class="mx-auto text-base leading-relaxed text-gray-500 flex-grow">
                    {{ Str::limit($divisi->description, 150) }}
                </p>
                <div class="mt-auto">
                    <a href="{{ route('divisi.detail', $divisi->id) }}" class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600" title="read more">Selengkapnya <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1 pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
