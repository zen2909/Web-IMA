@extends('layouts.admin')

@section('content')

<div class="container mx-auto mt-5">
    <div class="w-full border shadow-lg rounded-lg p-4 bg-white dark:bg-gray-800">
        <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Section Edit Divisi</h3>
        <form action="{{ route('admin.divisiupdate', $division->id) }}" method="POST" enctype="multipart/form-data" class="form-container">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nama Divisi</label>
                <input type="text" name="name" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $division->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ $division->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="members">Anggota (Pisahkan dengan koma)</label>
                <input type="text" name="members" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ implode(', ', json_decode($division->members ?? '[]')) }}">
            </div>

            <div class="form-group">
                <label for="roles">Jabatan Anggota (Pisahkan dengan koma)</label>
                <input type="text" name="roles" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ implode(', ', json_decode($division->roles ?? '[]')) }}">
            </div>

            <div class="form-group">
                <label for="work_programs">Program Kerja (Pisahkan dengan koma)</label>
                <input type="text" name="work_programs" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ implode(', ', json_decode($division->work_programs ?? '[]')) }}">
            </div>

            <div class="form-group">
                <label for="image">Gambar Divisi</label>
                @if($division->image)
                <div>
                    <img src="{{ asset('storage/' . $division->image) }}" alt="{{ $division->name }}" style="width: 100px; height: auto;">
                </div>
                @endif
                <input type="file" name="image" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mt-3">
            </div>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition duration-200">Update Divisi</button>
        </form>
    </div>
</div>

@endsection
