@extends('layouts.admin')

@section('content')

<div class="container mx-auto mt-5">
    <div class="w-full border shadow-lg rounded-lg p-4 bg-white dark:bg-gray-800">
        <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Section Edit Blog</h3>
        <form action="{{ route('admin.blogupdate', $blog->id) }}" method="POST" enctype="multipart/form-data" class="form-container">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" id="judul" name="judul" value="{{ $blog->judul }}" required>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" id="foto" name="foto">
                <img src="{{ asset('storage/' . $blog->foto) }}" alt="Foto" width="100" class="w-60 h-40 object-cover mb-4 rounded-lg shadow-md">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Isi blog</label>
                <textarea class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" id="body" name="body" rows="5" required>{{ $blog->body }}</textarea>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition duration-200">Simpan Perubahan</button>
        </form>
    </div>
</div>

@endsection
