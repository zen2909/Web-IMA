<style>
    /* Custom styles for the sidebar */
    .sidebar {
        height: 100vh;
        background-color: #343a40;
        color: white;
        position: fixed;
        width: 250px;
        transition: all 0.3s ease;
    }

    .sidebar .nav-link {
        color: #adb5bd;
    }

    .sidebar .nav-link:hover {
        color: white;
        background-color: #495057;
    }

    .content {
        margin-left: 250px;
        padding: 20px;
        transition: all 0.3s ease;
    }

    .collapsed .sidebar {
        width: 80px;
    }

    .collapsed .content {
        margin-left: 80px;
    }

    .sidebar-toggler {
        font-size: 1.5rem;
        cursor: pointer;
    }

    .sidebar-toggler:hover {
        color: #adb5bd;
    }

</style>

<div class="d-flex">
    <!-- Sidebar -->
    <nav class="sidebar d-flex flex-column p-3">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="text-white">Menu</h4>
            <span class="sidebar-toggler text-white">&#9776;</span>
        </div>
        <hr class="text-secondary">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('admin.homemanage') }}" class="nav-link"><i class="bi bi-house"></i> Panel Beranda</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link"><i class="bi bi-info-circle"></i> Panel Berita</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.history.ima.manage') }}" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Panel Sejarah IMA</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.history.arosbaya.manage') }}" class="nav-link"><i class="bi bi-envelope"></i> Panel Sejarah Arosbaya</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.structure.manage') }}" class="nav-link"><i class="bi bi-envelope"></i> Panel Struktur Kepengurusan</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.divisions.index') }}" class="nav-link"><i class="bi bi-envelope"></i> Panel Divisi</a>
            </li>
        </ul>
        <div class="mt-auto">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-button">Logout</button>
            </form>
        </div>
    </nav>
</div>
</div>
