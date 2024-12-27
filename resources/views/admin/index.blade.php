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
    <h1 class="mb-4">Tambah Berita</h1>
    <div class="card mb-4">
        <div class="card-body">
            <form id="form-tambah-berita" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" class="form-container">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Isi Berita</label>
                    <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Berita</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Daftar Berita
        </div>
        <div class="card-body">
            <table class="table table-striped table-responsive custom-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Foto</th>
                        <th>Isi Berita</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($beritas as $index => $berita)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $berita->judul }}</td>
                        <td><img src="{{ asset('storage/' . $berita->foto) }}" alt="Foto" width="100"></td>
                        <td>{{ Str::limit($berita->body, 100) }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $berita->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.destroy', $berita->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
