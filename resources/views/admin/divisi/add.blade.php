@extends('layouts.admin')

@section('content')

<div class="container mx-auto mt-5">
    <div class="w-full border shadow-lg rounded-lg p-4 bg-white dark:bg-gray-800">
        <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Section Tambah Blog</h3>
        <form action="{{ route('admin.divisistore') }}" method="POST" enctype="multipart/form-data" class="form-container">
            @csrf
            <div class="form-group">
                <label for="name">Nama Divisi</label>
                <input type="text" name="name" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>
            <div class="form-group">
                <label for="members">Anggota strong (Pisahkan dengan koma)</label>
                <input type="text" name="members" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="form-group">
                <label for="roles">Jabatan Anggota (Pisahkan dengan koma)</label>
                <input type="text" name="roles" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="form-group">
                <label for="work_programs">Program Kerja (Pisahkan dengan koma)</label>
                <input type="text" name="work_programs" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="form-group">
                <label for="image">Gambar Divisi</label>
                <input type="file" name="image" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition duration-200">Tambah Divisi</button>
        </form>
    </div>
</div>

@endsection
