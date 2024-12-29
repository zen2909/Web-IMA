@extends('layouts.dashboard')

@section('content')

<div class="relative bg-gradient-to-r from-purple-600 to-blue-600 h-screen text-white overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('storage/' . $divisi->image) }}" class="object-cover object-center w-full h-full" />
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>

    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center">
        <h1 class="text-5xl font-bold leading-tight mb-4">{{ $divisi->name }}</h1>
        <p class="text-lg text-gray-300 mb-8">{{ $divisi->description }}</p>
    </div>
</div>

<div class="container mx-auto p-4 bg-gray-100">
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/2 pr-4 mb-4 md:mb-0">
            <div class="bg-white shadow-lg rounded-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                <div class="p-4 bg-gray-600">
                    <h2 class="text-2xl text-white font-bold text-center">Daftar Anggota</h2>
                </div>
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-neutral-700">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center font-bold text-xs font-medium text-gray-700 uppercase dark:text-neutral-500">Nama</th>
                                        <th scope="col" class="px-6 py-3 text-center font-bold text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700 font-semibold">
                                    @if (is_array(json_decode($divisi->members)))
                                    @foreach (json_decode($divisi->members) as $index => $member)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-700 dark:text-neutral-200">{{ $member }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-700 dark:text-neutral-200">{{ json_decode($divisi->roles)[$index] ?? 'N/A' }}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $divisi->members }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{ $divisi->roles }}</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 pr-4">
            <div class="bg-white shadow-lg rounded-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                <div class="p-4 bg-gray-600">
                    <h2 class="text-2xl text-white font-bold text-center">Daftar Program Kerja</h2>
                </div>
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-neutral-700">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center font-bold text-xs font-medium text-gray-700 uppercase dark:text-neutral-500">Program Kerja Divisi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700 font-semibold">
                                    @if (is_array(json_decode($divisi->work_programs)))
                                    @foreach (json_decode($divisi->work_programs) as $index => $proker)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-700 dark:text-neutral-200">{{ $proker }}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-700 dark:text-neutral-200">Program Kerja Tidak Ditemukan</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
