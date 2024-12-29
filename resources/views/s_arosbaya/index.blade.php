@extends('layouts.dashboard')

@section('content')


<div class="relative hero h-screen bg-light bg-center" style="background-image: url('{{ asset('images/logoima.png') }}'); background-size: 35%; background-position: center; background-repeat: no-repeat;">

    <div class="absolute inset-0 bg-gray-100 opacity-80"></div>

    <div class="max-w-7xl mx-auto p-6 relative z-10 flex items-center justify-between h-full">

        <div class="w-full sm:w-1/2 text-white space-y-6 pr-5">
            <h1 class="text-4xl md:text-4xl lg:text-6xl font-bold text-green-700 mb-4">
                Sejarah
                <span class="block mt-2">Kecamatan Arosbaya</span>
            </h1>
            <p class="text-black text-lg">
                Arosbaya: Daerah penuh sejarah dari barat pulau Madura.
            </p>
            @php
            $paragraphs = preg_split('/\./', $arosbaya->text, 4);
            @endphp
            <div class="text-container bg-white-50 text-black text-justify p-4 rounded-lg shadow-md overflow-y-auto mt-4" style="max-height: 300px;">
                <div>
                    <p class="text-black text-justify leading-relaxed" style="text-indent : 2em">
                        {{ implode('.', array_slice($paragraphs, 0, 4)) }}.
                    </p>
                    @if(isset($paragraphs[3]))
                    <p class="text-black text-justify leading-relaxed mt-4" style="text-indent : 2em">
                        {{ trim($paragraphs[3]) }}
                    </p>
                    @endif
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 md:grid-rows-2 gap-4">
            <div class="flex justify-center items-center md:row-span-2">
                <img class="w-full h-48 object-cover rounded-xl" src="{{ asset('storage/' . $arosbaya->image1) }}" alt="Image 1">
            </div>

            <div class="col-span-1">
                <img class="w-full h-48 object-cover rounded-xl" src="{{ asset('storage/' . $arosbaya->image2) }}" alt="Image 2">
            </div>

            <div class="col-span-1">
                <img class="w-full h-48 object-cover rounded-xl" src="{{ asset('storage/' . $arosbaya->image3) }}" alt="Image 3">
            </div>
        </div>

    </div>
</div>
@endsection
