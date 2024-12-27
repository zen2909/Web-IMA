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
        <h1 class="mb-4">Edit Berita</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.update', $berita->id) }}" method="POST" enctype="multipart/form-data" class="form-container">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        <img src="{{ asset('storage/' . $berita->foto) }}" alt="Foto" width="100" class="mt-2">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Isi Berita</label>
                        <textarea class="form-control" id="body" name="body" rows="5" required>{{ $berita->body }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Berita</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
