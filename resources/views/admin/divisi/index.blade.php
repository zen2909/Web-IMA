@extends('layouts.admin')

@section('content')

<div class="container mx-auto mt-5">
    <div class="overflow-x-auto w-full border shadow-lg rounded-lg p-4 bg-white dark:bg-gray-800">
        <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Section Divisi</h3>
        <button onclick="window.location.href='{{ route('admin.divisiadd') }}'" class="flex items-center py-2.5 px-6 rounded-lg text-sm font-medium text-white bg-blue-600 mt-5 mb-5 hover:bg-blue-700 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-2">
                <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
            </svg>
            Add Divisi
        </button>
        <div class="overflow-hidden">
            <table class="min-w-full rounded-xl table-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th scope="col" class="p-5 text-center text-xl leading-6 font-semibold text-gray-900 capitalize">Nama</th>
                        <th scope="col" class="p-5 text-center text-xl leading-6 font-semibold text-gray-900 capitalize">Deskripsi</th>
                        <th scope="col" class="p-5 text-center text-xl leading-6 font-semibold text-gray-900 capitalize">Anggota</th>
                        <th scope="col" class="p-5 text-center text-xl leading-6 font-semibold text-gray-900 capitalize">Jabatan</th>
                        <th scope="col" class="p-5 text-center text-xl leading-6 font-semibold text-gray-900 capitalize">Program Kerja</th>
                        <th scope="col" class="p-5 text-center text-xl leading-6 font-semibold text-gray-900 capitalize">Foto Divisi</th>
                        <th scope="col" class="p-5 text-center text-xl leading-6 font-semibold text-gray-900 capitalize">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @foreach($divisions as $division)
                    <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                        <td class="p-4 text-center">{{ $division->name }}</td>
                        <td class="p-4 text-center">{{ $division->description }}</td>
                        <td class="p-4 text-center">{{ is_array(json_decode($division->members)) ? implode(', ', json_decode($division->members)) : $division->members }}</td>
                        <td class="p-4 text-center">{{ is_array(json_decode($division->roles)) ? implode(', ', json_decode($division->roles)) : $division->roles }}</td>
                        <td class="p-4 text-center">{{ is_array(json_decode($division->work_programs)) ? implode(', ', json_decode($division->work_programs)) : $division->work_programs }}</td>
                        <td class="p-4 text-center">
                            <img src="{{ asset('storage/' . $division->image) }}" alt="Foto" class="w-40 h-24 object-cover mx-auto">
                        </td>
                        <td class="p-4 text-center flex pt-12 gap-4">
                            <a href="{{ route('admin.divisiedit', $division->id) }}" class="text-indigo-500 hover:text-indigo-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="inline-block">
                                    <path class="fill-blue-600" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h6.525q.5 0 .75.313t.25.687t-.262.688T11.5 5H5v14h14v-6.525q0-.5.313-.75t.687-.25t.688.25t.312.75V19q0 .825-.587 1.413T19 21zm4-7v-2.425q0-.4.15-.763t.425-.637l8.6-8.6q.3-.3.675-.45t.75-.15q.4 0 .763.15t.662.45L22.425 3q.275.3.425.663T23 4.4t-.137.738t-.438.662l-8.6 8.6q-.275.275-.637.438t-.763.162H10q-.425 0-.712-.288T9 14m12.025-9.6l-1.4-1.4zM11 13h1.4l5.8-5.8l-.7-.7l-.725-.7L11 11.575zm6.5-6.5l-.725-.7zl.7.7z" />
                                </svg>
                            </a>
                            <form action="{{ route('admin.divisidestroy', $division->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-red">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="inline-block">
                                        <path class="fill-red-600" d="M7 21q-.825 0-1.412-.587T 5 19V6q-.425 0-.712-.288T4 5t.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5t-.288.713T19 6v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zm-7 11q.425 0 .713-.288T11 16V9q0-.425-.288-.712T10 8t-.712.288T9 9v7q0 .425.288.713T10 17m4 0q.425 0 .713-.288T15 16V9q0-.425-.288-.712T14 8t-.712.288T13 9v7q0 .425.288.713T14 17M7 6v13z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
