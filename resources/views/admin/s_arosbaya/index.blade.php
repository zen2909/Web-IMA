@extends('layouts.admin')

@section('content')

<div class="container mx-auto mt-5">
    <div class="w-full border shadow-lg rounded-lg p-6 bg-white dark:bg-gray-800">
        <h2 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Section Sejarah Kecamatan Arosbaya</h2>
        <form action="{{ route('admin.arosbayaupdate') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('put')
            <div class="flex gap-4">
                <div class="flex flex-col w-full md:w-1/3">
                    <label for="image1" class="form-label mb-3 font-semibold text-gray-800 text-xl">Gambar 1</label>
                    <img src="{{ asset('storage/' . $arosbaya->image1) }}" class="w-full h-80 object-cover mb-4 rounded-lg shadow-md" alt="Image 1">
                    <input type="file" id="image1" name="image1" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @if($arosbaya->image1)
                    @endif
                </div>
                <div class="flex flex-col w-full md:w-1/3">
                    <label for="image2" class="form-label mb-3 font-semibold text-gray-800 text-xl">Gambar 2</label>
                    <img src="{{ asset('storage/' . $arosbaya->image2) }}" class="w-full h-80 object-cover mb-4 rounded-lg shadow-md" alt="Image 2">
                    <input type="file" id="image2" name="image2" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @if($arosbaya->image2)
                    @endif
                </div>
                <div class="flex flex-col w-full md:w-1/3">
                    <label for="image3" class="form-label mb-3 font-semibold text-gray-800 text-xl">Gambar 3</label>
                    <img src="{{ asset('storage/' . $arosbaya->image3) }}" class="w-full h-80 object-cover mb-4 rounded-lg shadow-md" alt="Image 3">
                    <input type="file" id="image3" name="image3" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @if($arosbaya->image3)
                    @endif
                </div>
            </div>

            <div class="mb-3">
                <textarea id="text" name="text" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full h-32 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500" rows="5">{{ old('text', $arosbaya->text) }}</textarea>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition duration-200">Simpan Perubahan</button>
        </form>
    </div>
</div>

@endsection
