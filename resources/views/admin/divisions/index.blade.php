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
        <h1>Daftar Divisi</h1>

        <!-- Form Tambah Divisi -->
        <form action="{{ route('admin.divisions.store') }}" method="POST" enctype="multipart/form-data" class="form-container">
            @csrf
            <div class="form-group">
                <label for="name">Nama Divisi</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="members">Anggota (Pisahkan dengan koma)</label>
                <input type="text" name="members" class="form-control">
            </div>
            <div class="form-group">
                <label for="roles">Jabatan Anggota (Pisahkan dengan koma)</label>
                <input type="text" name="roles" class="form-control">
            </div>
            <div class="form-group">
                <label for="work_programs">Program Kerja (Pisahkan dengan koma)</label>
                <input type="text" name="work_programs" class="form-control">
            </div>
            <div class="form-group">
                <label for="image">Gambar Divisi</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>

        <!-- Tabel Daftar Divisi -->
        <div class="table-responsive">
            <table class="table mt-5 custom-table table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Anggota</th>
                        <th>Jabatan</th>
                        <th>Program Kerja</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($divisions as $division)
                    <tr>
                        <td>{{ $division->name }}</td>
                        <td>{{ $division->description }}</td>
                        <td>{{ is_array(json_decode($division->members)) ? implode(', ', json_decode($division->members)) : $division->members }}</td>
                        <td>{{ is_array(json_decode($division->roles)) ? implode(', ', json_decode($division->roles)) : $division->roles }}</td>
                        <td>{{ is_array(json_decode($division->work_programs)) ? implode(', ', json_decode($division->work_programs)) : $division->work_programs }}</td>
                        <td>
                            @if($division->image)
                            <img src="{{ asset('storage/' . $division->image) }}" alt="{{ $division->name }}" style="width: 100px; height: auto;">
                            @else
                            Tidak ada gambar
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.divisions.edit', $division->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.divisions.destroy', $division->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
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
