@extends('layouts.admin')

@section('content')

<div class="container mx-auto mt-5">
    <div class="w-full border shadow-lg rounded-lg p-4 bg-white dark:bg-gray-800">
        <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Section Tambah Blog</h3>
        <form id="form-tambah-berita" action="{{ route('admin.blogstore') }}" method="POST" enctype="multipart/form-data" class="w-full">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" id="foto" name="foto" required>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Isi Berita</label>
                <textarea class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" id="body" name="body" rows="5" required></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition duration-200">Tambah Berita</button>
        </form>
    </div>
</div>

@endsection
