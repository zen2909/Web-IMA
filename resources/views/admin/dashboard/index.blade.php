@extends('layouts.admin')

@section('content')

<div class="container mx-auto mt-5">
    <div class="bg-white rounded-lg shadow-md p-4">
        <div class="w-full">
            <div>
                <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Section Dashboard</h3>
                <form action="{{ route('admin.update.carousel') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @foreach($carousels as $carousel)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $carousel->image) }}" class="img-fluid mb-3">
                        <input type="file" name="image[]" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    @endforeach
                    <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 rounded transition duration-200">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container mx-auto mt-5">
    <div class="w-full border shadow-lg rounded-lg p-6 bg-white dark:bg-gray-800">
        <h2 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Section Sejarah</h2>
        <form action="{{ route('admin.update.history') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($histories as $index => $history)
                <div class="bg-white p-4 rounded-lg shadow">
                    <input type="hidden" name="history_ids[]" value="{{ $history->id }}">
                    <img src="{{ asset('storage/' . $history->image) }}" class="w-full h-80 object-cover mb-4 rounded-lg shadow-md">
                    <input type="file" name="images[{{ $index }}]" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <textarea name="descriptions[{{ $index }}]" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full h-32 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Description">{{ $history->description }}</textarea>
                </div>
                @endforeach
            </div>
            <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 rounded transition duration-200">Simpan Perubahan</button>
        </form>
    </div>
</div>

<div class="container mx-auto mt-5">
    <div class="bg-white rounded-lg shadow-md p-4">
        <div class="w-full">
            <div>
                <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Section Struktur Kepengurusan</h3>
                <form action="{{ route('admin.update.structure') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @foreach($struktur as $index => $Structure)
                    <div class="bg-white p-4 rounded-lg shadow">
                        <input type="hidden" name="activity_ids[]" value="{{ $Structure->id }}">
                        <img src="{{ asset('storage/' . $Structure->image) }}" class="img-fluid mb-2 0bject-cover">
                        <input type="file" name="images[{{ $index }}]" class="form-control mb-2">
                    </div>
                    @endforeach
                    <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 rounded transition duration-200">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto mt-5">
    <div class="w-full border shadow-lg rounded-lg p-6 bg-white dark:bg-gray-800">
        <h2 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Section Kegiatan Terbaru</h2>
        <form action="{{ route('admin.update.activity') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($activities as $index => $activity)
                <div class="mb-3">
                    <input type="hidden" name="activity_ids[]" value="{{ $activity->id }}">
                    <img src="{{ asset('storage/' . $activity->image) }}" class="w-full h-80 object-cover mb-4 rounded-lg shadow-md">
                    <input type="file" name="images[{{ $index }}]" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="text" name="titles[{{ $index }}]" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $activity->title }}">
                    <textarea name="descriptions[{{ $index }}]" class="form-control mb-4 border border-gray-300 rounded-lg p-3 w-full h-32 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $activity->description }}</textarea>
                </div>
                @endforeach
            </div>
            <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 rounded transition duration-200">Simpan Perubahan</button>
        </form>
    </div>
</div>






@endsection
