@extends('layouts.sejarah')

@section('content')


<div class="relative hero h-screen bg-light bg-center" style="background-image: url('{{ asset('images/logoima.png') }}'); background-size: 35%; background-position: center; background-repeat: no-repeat;">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-gray-100 opacity-80"></div>

    <!-- Container for content -->
    <div class="max-w-7xl mx-auto p-6 relative z-10 flex items-center justify-between h-full">
        <!-- Left Section (Text/Explanation) -->
        <div class="w-full sm:w-1/2 text-white space-y-6 pr-5">
            <h1 class="text-4xl md:text-4xl lg:text-6xl font-bold text-green-700 mb-4">
                Sejarah
                <span class="block mt-2">Kecamatan Arosbaya</span>
            </h1>
            <p class="text-black text-lg">
                Arosbaya: Daerah penuh sejarah dari barat pulau Madura.
            </p>
            @php
            // Membagi teks berdasarkan titik dengan batas pemisahan pada titik ke-3
            $paragraphs = preg_split('/\./', $arosbaya->text, 4); // 4 bagian: 3 paragraf + sisanya
            @endphp
            <div class="text-container bg-white-50 text-black text-justify p-4 rounded-lg shadow-md overflow-y-auto mt-4" style="max-height: 300px;">
                <div>
                    <!-- Gabungkan paragraf pertama hingga ketiga -->
                    <p class="text-black text-justify leading-relaxed" style="text-indent : 2em">
                        {{ implode('.', array_slice($paragraphs, 0, 4)) }}.
                    </p>
                    <!-- Paragraf sisanya, jika ada -->
                    @if(isset($paragraphs[3]))
                    <p class="text-black text-justify leading-relaxed mt-4" style="text-indent : 2em">
                        {{ trim($paragraphs[3]) }}
                    </p>
                    @endif
                </div>
            </div>
        </div>
        <!-- Right Section (Images) -->
        <div class="grid grid-cols-2 grid-rows-2 gap-4">
            <!-- Gambar pertama di tengah vertikal -->
            <div class="flex justify-center items-center row-span-2">
                <img class="w-full h-48 object-cover rounded-xl" src="{{ asset('storage/' . $arosbaya->image1) }}" alt="Image 1">
            </div>

            <!-- Gambar kedua -->
            <div class="col-span-1">
                <img class="w-full h-48 object-cover rounded-xl" src="{{ asset('storage/' . $arosbaya->image2) }}" alt="Image 2">
            </div>

            <!-- Gambar ketiga -->
            <div class="col-span-1">
                <img class="w-full h-48 object-cover rounded-xl" src="{{ asset('storage/' . $arosbaya->image3) }}" alt="Image 3">
            </div>
        </div>

    </div>
</div>
@endsection
