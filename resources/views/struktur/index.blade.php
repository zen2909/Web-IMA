@extends("layouts.sejarah")

@section('content')
<nav class="navbar sticky-top navbar-expand-lg navbar-light ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/sejarah-IMA">Sejarah IMA</a></li>
                        <li><a class="dropdown-item" href="/sejarah-arosbaya">Sejarah Arosbaya</a></li>
                        <li><a class="dropdown-item" href="/struktur">Struktur Kepengurusan Organisasi</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/divisi">Daftar Divisi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container text-center my-5">
    @foreach($Structures as $index => $Structure)
    <h2 class="card-title">{{ $Structure->title }}</h2>
    <img src="{{ asset('storage/' . $Structure->image) }}" class="d-block mx-auto w-50">
    @endforeach
</div>

<footer class="footer mt-auto py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>Ikatan Mahasiswa Arosbaya adalah sebuah organisasi daerah yang berasal dari arosbaya,bangkalan. organisasi ini memiliki jargon yaitu "Alombhar Ta' Adhina Asal" yang artinya kemanapun kita pergi harus tetap ingat asal kita.</p>
            </div>
            <div class="col-md-4">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="/berita">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contact</h5>
                <ul class="list-unstyled">
                    <li><a href="mailto:imaarosbayaa@gmail.com">imaarosbayaa@gmail.com</a></li>
                    <li>
                        <a href="https://youtube.com/@imaarosbaya647?feature=shared" target="_blank" class="text-white me-3"><i class="fab fa-youtube">Youtube</i></a>
                    </li>
                    <li><a href="https://www.instagram.com/imaarosbaya/" target="_blank" class="text-white me-3">
                            <i class="fab fa-instagram">Instagram</i>
                        </a>
                    </li>
                    <li><a href="https://www.facebook.com/share/vhdj9WWP113dbNcr/?mibextid=qi2Omg" target="_blank" class="text-white me-3">
                            <i class="fab fa-facebook">Facebook</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-center py-3">
            <p>&copy; 2024 Ikatan Mahasiswa Arosbaya. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection
