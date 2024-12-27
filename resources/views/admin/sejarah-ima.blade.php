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
    <div class="container mt-5">
        <h1>Update Sejarah IMA</h1>
        <form action="{{ route('admin.history.ima.update') }}" method="POST" enctype="multipart/form-data" class="form-container">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <textarea id="text" name="text" class="form-control" rows="5">{{ old('text', $history_ima->text) }}</textarea>
            </div>

            <div class="d-flex flex-wrap">
                <div class="p-2 w-100 w-md-33">
                    <div class="mb-3">
                        <label for="image1" class="form-label">Image 1</label>
                        <input type="file" id="image1" name="image1" class="form-control">
                        @if($history_ima->image1)
                        <img src="{{ asset('storage/' . $history_ima->image1) }}" class="img-fluid mt-2" alt="Image 1">
                        @endif
                    </div>
                </div>
                <div class="p-2 w-100 w-md-33">
                    <div class="mb-3">
                        <label for="image2" class="form-label">Image 2</label>
                        <input type="file" id="image2" name="image2" class="form-control">
                        @if($history_ima->image2)
                        <img src="{{ asset('storage/' . $history_ima->image2) }}" class="img-fluid mt-2" alt="Image 2">
                        @endif
                    </div>
                </div>
                <div class="p-2 w-100 w-md-33">
                    <div class="mb-3">
                        <label for="image3" class="form-label">Image 3</label>
                        <input type="file" id="image3" name="image3" class="form-control">
                        @if($history_ima->image3)
                        <img src="{{ asset('storage/' . $history_ima->image3) }}" class="img-fluid mt-2" alt="Image 3">
                        @endif
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
