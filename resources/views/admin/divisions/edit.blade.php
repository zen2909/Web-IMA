@extends('layouts.app')

@section('content')
<div class="container">

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
    <div class='content-wrapper'>
        <div class="container">
            <h1>Edit Divisi</h1>

            <form action="{{ route('admin.divisions.update', $division->id) }}" method="POST" enctype="multipart/form-data" class="form-container">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nama Divisi</label>
                    <input type="text" name="name" class="form-control" value="{{ $division->name }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" class="form-control" required>{{ $division->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="members">Anggota (Pisahkan dengan koma)</label>
                    <input type="text" name="members" class="form-control" value="{{ implode(', ', json_decode($division->members ?? '[]')) }}">
                </div>

                <div class="form-group">
                    <label for="roles">Jabatan Anggota (Pisahkan dengan koma)</label>
                    <input type="text" name="roles" class="form-control" value="{{ implode(', ', json_decode($division->roles ?? '[]')) }}">
                </div>

                <div class="form-group">
                    <label for="work_programs">Program Kerja (Pisahkan dengan koma)</label>
                    <input type="text" name="work_programs" class="form-control" value="{{ implode(', ', json_decode($division->work_programs ?? '[]')) }}">
                </div>

                <div class="form-group">
                    <label for="image">Gambar Divisi</label>
                    @if($division->image)
                    <div>
                        <img src="{{ asset('storage/' . $division->image) }}" alt="{{ $division->name }}" style="width: 100px; height: auto;">
                    </div>
                    @endif
                    <input type="file" name="image" class="form-control mt-3">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection
