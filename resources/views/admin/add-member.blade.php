<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin - Blog Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin-divisi/styles.css') }}">
</head>

<body>
    <div class="d-flex">
        <nav class="sidebar">
            <a class="navbar-brand mb-4">Admin Panel</a>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/homemanage" id="menu-home">Panel Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin-ima" id="menu-tambah-berita">Panel Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/history-ima-manage" id="menu-home">Panel Sejarah IMA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/history-arosbaya-manage" id="menu-home">Panel Sejarah Arosbaya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/structure-manage" id="menu-home">Panel Struktur Kepengurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/list-division-manage" id="menu-home">Panel Daftar Divisi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/division-manage" id="menu-home">Panel Divisi</a>
                </li>
            </ul>
            <div class="mt-auto">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-button">Logout</button>
                </form>
            </div>
        </nav>

        <div class="container">
            <h1>Tambah Anggota untuk Divisi: {{ $divisi->name }}</h1>
            <form action="{{ route('admin.divisi.members.store', $divisi->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Nama Anggota -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Anggota</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <!-- Jabatan Anggota -->
                <div class="mb-3">
                    <label for="position" class="form-label">Jabatan Anggota</label>
                    <input type="text" name="position" class="form-control" required>
                </div>

                <!-- Gambar Anggota -->
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Anggota</label>
                    <input type="file" name="image" class="form-control" required>
                </div>

                <!-- Tombol Simpan -->
                <button type="submit" class="btn btn-primary">Simpan Anggota</button>
            </form>
        </div>

        <!-- Daftar Anggota -->
        <h2 class="mt-4">Daftar Anggota</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($divisi->members as $member)
                <tr>
                    <td>{{ $member->member_name }}</td>
                    <td>{{ $member->position }}</td>
                    <td>
                        @if ($member->member_image)
                        <img src="{{ asset('storage/' . $member->member_image) }}" alt="Gambar Anggota" width="100">
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
