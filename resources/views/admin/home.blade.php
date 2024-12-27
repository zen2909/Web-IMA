@extends('layouts.app')

@section('content')
<style>
    .custom-table th,
    .custom-table td {

        /* Memberikan padding yang lebih besar untuk ruang lebih pada kolom */
        text-align: center;
        /* Menyusun teks di tengah */
    }

    .custom-table th {
        width: 200px;
        /* Lebar kolom header yang lebih lebar */
    }

    .custom-table td {
        max-width: 200px;
        /* Lebar kolom data yang lebih lebar */
        align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .table-responsive {
        max-width: 100%;
        overflow-x: auto;
    }

    .content-wrapper {
        margin-left: 250px;
        /* Pastikan margin sesuai lebar sidebar */
        padding: 20px;
    }

    .form-container {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        margin-bottom: 15px;
    }

</style>
<div class="content-wrapper">
    <div class="container">
        <div class="container mt-5">
            <h2>Update Carousel</h2>
            <form action="{{ route('admin.update.carousel') }}" method="POST" enctype="multipart/form-data" class="form-container">
                @csrf
                <div class="row">
                    @foreach($carousels as $carousel)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $carousel->image) }}" class="img-fluid mb-3">
                        <input type="file" name="image[]" class="form-control mb-2">
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Update Carousel</button>
            </form>

            <hr class="my-5">

            <h2>Update Histories</h2>
            <form action="{{ route('admin.update.history') }}" method="POST" enctype="multipart/form-data" class="form-container">
                @csrf
                <div class="row">
                    @foreach($histories as $index => $history)
                    <div class="col-md-4 mb-3">
                        <input type="hidden" name="history_ids[]" value="{{ $history->id }}">
                        <img src="{{ asset('storage/' . $history->image) }}" class="img-fluid mb-2">
                        <input type="file" name="images[{{ $index }}]" class="form-control mb-2">
                        <input type="text" name="titles[{{ $index }}]" class="form-control mb-2" value="{{ $history->title }}">
                        <textarea name="descriptions[{{ $index }}]" class="form-control mb-2">{{ $history->description }}</textarea>
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Update History</button>
            </form>

            <hr class="my-5">

            <h2>Update Activities</h2>
            <form action="{{ route('admin.update.activity') }}" method="POST" enctype="multipart/form-data" class="form-container">
                @csrf
                <div class="row">
                    @foreach($activities as $index => $activity)
                    <div class="col-md-4 mb-3">
                        <input type="hidden" name="activity_ids[]" value="{{ $activity->id }}">
                        <img src="{{ asset('storage/' . $activity->image) }}" class="img-fluid mb-2">
                        <input type="file" name="images[{{ $index }}]" class="form-control mb-2">
                        <input type="text" name="titles[{{ $index }}]" class="form-control mb-2" value="{{ $activity->title }}">
                        <textarea name="descriptions[{{ $index }}]" class="form-control mb-2">{{ $activity->description }}</textarea>
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Update Activities</button>
            </form>
        </div>
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
