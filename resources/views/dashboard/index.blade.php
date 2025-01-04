@extends('layouts.dashboard')

@section('content')


<div id="loading" class="fixed inset-0 flex items-center justify-center bg-white z-50" style="display: none;">
    <div class="relative">
        <div class="h-24 w-24 rounded-full border-t-8 border-b-8 border-gray-200"></div>
        <div class="absolute top-0 left-0 h-24 w-24 rounded-full border-t-8 border-b-8 border-blue-500 animate-spin"></div>
    </div>
</div>
@foreach($carousels as $carousel)
<div id="hero-1" class="hero h-screen relative bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $carousel->image) }}'); background-size: cover; background-position: center; min-height: 100vh; object-cover;">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative container mx-auto flex flex-col lg:flex-row items-center justify-center h-full px-4">
        <div class="card rounded-box grid h-auto w-full lg:w-1/2 flex-grow place-items-center lg:mb-0 px-10 md:px-20 order-1 lg:order-2 lg:mr-4">
            <img src="images/logoima.png" class="lg:h-auto rounded-lg animate-float" alt="Gambar Hero" />
        </div>
        <div class="card rounded-box grid h-auto lg:w-1/2 flex-grow place-items-center lg:mb-0 px-10 md:px-20 order-2 lg:order-1 lg:ml-4">
            <div class="text-center lg:text-left">
                <h1 class="text-3xl md:text-4xl lg:text-8xl font-bold text-white leading-tight text-shadow-lg" style="font-family: 'Poppins', sans-serif;">
                    IKATAN MAHASISWA AROSBAYA
                </h1>
                <p class="text-2xl md:text-xl lg:text-3xl text-white text-shadow-lg mb-6">
                    Alombhar Ta' Adhina Asal
                </p>
                <a id="scroll-button" href="#hero-2" class="btn bg-green-700 text-white text-sm md:text-lg px-6 py-2 rounded-lg transform transition-all duration-300 ease-in-out hover:bg-white hover:text-green-500 hover:scale-105 hover:shadow-xl">
                    Selengkapnya
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach


<div id="hero-2" class="relative flex flex-col items-center w-full px-4 mx-auto md:flex-row sm:px-6 p-8 h-screen">
    <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pr-10">
        <div class="relative w-full p-3 rounded md:p-8">
            <div class="rounded-lg bg-white text-black w-full h-full">
                <img src="{{ asset('storage/' . $ima->image) }}" class="w-full h-full object-cover rounded-lg" />
            </div>
        </div>
    </div>
    <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
        <div class="text-left px-8">
            <h1 class="text-4xl lg:text-6xl font-bold">Ikatan<span class="text-green-700"> Mahasiswa</span> Arosbaya</h1>
            <div class="w-20 h-2 bg-green-700 my-4"></div>
            <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                {{ $ima->description }}</p>
            <div class="mt-5 sm:flex md:mt-8">
                <div class="rounded-md shadow">
                    <a href="" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-green-700 border border-transparent rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
                        Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative flex flex-col items-center w-full px-4 mx-auto md:flex-row sm:px-6 p-8 bg-gray-100 h-screen">
    <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
        <div class="text-left px-8">
            <h2 class="text-4xl font-extrabold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-6xl">
                Kecamatan
                <span class="font-bold text-green-700">Arosbaya</span>
                <div class="w-20 h-2 bg-green-700 my-4"></div>
            </h2>
            <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                {{ $arosbaya->description }}</p>
            <div class="mt-5 sm:flex md:mt-8">
                <div class="rounded-md shadow">
                    <a href="" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-green-700 border border-transparent rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
                        Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
        <div class="relative w-full p-3 rounded md:p-8">
            <div class="rounded-lg bg-white text-black w-full h-full">
                <img src="{{ asset('storage/' . $arosbaya->image) }}" class="w-full h-full object-cover rounded-lg" />
            </div>
        </div>
    </div>
</div>

<div class="relative flex flex-col items-center w-full px-4 mx-auto md:flex-row sm:px-6 p-8 bg-white h-screen">
    <div class="flex items-center py-5 py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
        <div class="relative w-full p-3 rounded md:p-8">
            <div class="rounded-lg bg-white text-black w-full h-full">
                @if($struktur && $struktur->image)
                <img src="{{ asset('storage/' . $struktur->image)}}" class="w-full h-auto object-cover rounded-lg" />
                @else
                <p class="text-center text-gray-500">Gambar tidak tersedia.</p>
                @endif
            </div>
        </div>
    </div>

    <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
        <div class="text-left px-4 sm:px-8">
            <h2 class="text-3xl font-extrabold leading-10 tracking-tight text-gray-800 sm:text-4xl md:text-5xl lg:text-6xl">
                Struktur Kepengurusan
                <span class="font-bold text-green-700">Ikatan Mahasiswa Arosbaya</span>
                <div class="w-20 h-2 bg-green-700 my-4"></div>
            </h2>
        </div>
    </div>
</div>

<div class="relative bg-gray-100 dark:bg-neutral-900">
    <div class="h-screen flex items-center justify-center text-center px-6 sm:px-12">
        <div class="max-w-7xl w-full space-y-6">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-white">
                Kegiatan Terbaru
            </h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($activities as $card)
                <div class="flex flex-col bg-white dark:bg-neutral-800 rounded-xl shadow-sm overflow-hidden transform transition-all hover:scale-105 hover:shadow-lg duration-300">
                    <img class="w-full h-48 object-cover rounded-t-xl sm:rounded-se-none" src="{{ asset('storage/' . $card->image) }}" alt="Card Image">
                    <div class="p-4 flex-1 md:p-5">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">{{ $card->title }}</h3>
                        <p class="mt-1 text-gray-500 dark:text-neutral-400">{{ $card->description }}</p>
                    </div>
                    <div class="p-4 border-t sm:px-5 dark:border-neutral-700">
                        <p class="text-xs text-gray-500 dark:text-neutral-500">
                            Last updated {{ $card->updated_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('loading').style.display = 'flex';
    });

    window.addEventListener("load", function() {
        setTimeout(function() {
            document.getElementById('loading').style.display = 'none';
        }, 4000);
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const scrollButton = document.getElementById('scroll-button');

        scrollButton.addEventListener('click', function(e) {
            e.preventDefault();

            const target = document.getElementById('hero-2');
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                    , block: 'start'
                });
            } else {
                console.error('Target element not found: #hero-2');
            }
        });
    });

</script>
@endsection
