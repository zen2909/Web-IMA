@extends('layouts.dashboard')

@section('content')

@php

$paragraphs = explode('.', $berita->body);

$paragraphs = array_filter($paragraphs);

$totalSentences = count($paragraphs);

$splitIndex = ceil($totalSentences / 2);

$firstParagraph = implode('.', array_slice($paragraphs, 0, $splitIndex)) . '.';
$secondParagraph = implode('.', array_slice($paragraphs, $splitIndex)) . '.';
@endphp

<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-0 relative">
    <div class="bg-cover bg-center text-center overflow-hidden" style="min-height: 500px; background-image: url('{{ asset('storage/' . $berita->foto) }}')">
    </div>
    <div class="max-w-3xl mx-auto">
        <div class="mt-3 bg- rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
            <div class="bg-white relative top-0 -mt-32 p-5 sm:p-10 bg-gray-100">
                <h1 class="text-gray-900 font-bold text-3xl mb-2">{{$berita->judul}}</h1>
                <h3 class="text-2xl font-bold my-5"># What is {{$berita->judul}} ?</h3>
                <p class="text-base leading-8 my-5 text-justify">
                    {{ $firstParagraph }}
                </p>
                <p class="text-base leading-8 my-5 text-justify">
                    {{ $secondParagraph }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
