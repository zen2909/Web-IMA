<aside class="w-72 h-screen bg-green-900 overflow-y-auto sticky top-0">
    <!-- Brand -->
    <div class="h-20 px-6 border-b border-white/10 flex items-center gap-3">
        <img class="w-10 h-10 rounded-full shadow-sm" src="{{ asset('images/logoima.png') }}" alt="Logo IMA" />
        <div>
            <div class="text-white text-sm font-bold font-inter leading-4 tracking-tight">
                Ikatan Mahasiswa<br />Arosbaya
            </div>
            <div class="text-white/60 text-xs font-medium font-['Inter'] leading-4">
                Admin Panel
            </div>
        </div>
    </div>

    <!-- Menu -->
    <nav class="px-4 py-6 space-y-6">
        <!-- MAIN -->
        <div class="space-y-1">
            <div class="px-3 pb-2">
                <span class="text-white/50 text-xs font-semibold font-['Inter'] leading-4 tracking-wide">MAIN</span>
            </div>
            <a href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl {{ request()->routeIs('admin.dashboard') ? 'bg-white/10' : 'hover:bg-white/5' }} transition-colors">
                <svg class="w-3.5 h-3.5 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
                <span class="text-white text-sm font-medium font-['Inter'] leading-5">Dashboard</span>
            </a>
        </div>

        <!-- ORGANISASI -->
        <div class="space-y-1">
            <div class="px-3 pb-2">
                <span
                    class="text-white/50 text-xs font-semibold font-['Inter'] leading-4 tracking-wide">ORGANISASI</span>
            </div>

            <!-- Kepengurusan dengan dropdown -->
            <div x-data="{ open: {{ request()->routeIs('admin.periods.*') || request()->routeIs('admin.positions.*') || request()->routeIs('admin.members.*') ? 'true' : 'false' }} }">
                <button @click="open = !open"
                    class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl hover:bg-white/5 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-2.5 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 0v12h8V4H6z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M8 6a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1zm0 4a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1zm0 4a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Kepengurusan</span>
                    </div>
                    <svg class="w-2 h-1.5 text-white/50 transition-transform duration-200"
                        :class="open ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 10 6">
                        <path fill-rule="evenodd" d="M5 6L0 0h10L5 6z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="pl-4 border-l border-white/10 space-y-1 mt-1">
                    <a href="#"
                        class="block px-3 py-2 rounded-lg text-white/60 text-sm font-normal hover:bg-white/5 transition-colors {{ request()->routeIs('admin.periods.*') ? 'bg-white/5 text-white' : '' }}">
                        Periode Kepengurusan
                    </a>
                    <a href="#"
                        class="block px-3 py-2 rounded-lg text-white/60 text-sm font-normal hover:bg-white/5 transition-colors">
                        Pengurus Harian
                    </a>
                    <a href="#"
                        class="block px-3 py-2 rounded-lg text-white/60 text-sm font-normal hover:bg-white/5 transition-colors">
                        Struktur Organisasi
                    </a>
                    <a href="#"
                        class="block px-3 py-2 rounded-lg text-white/60 text-sm font-normal hover:bg-white/5 transition-colors {{ request()->routeIs('admin.positions.*') ? 'bg-white/5 text-white' : '' }}">
                        Master Jabatan
                    </a>
                </div>
            </div>

            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/5
                transition-colors {{ request()->routeIs('admin.divisions.*') ? 'bg-white/10' : '' }}">
                <svg class="w-4 h-3.5 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1z" />
                </svg>
                <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Divisi</span>
            </a>

            <!-- Anggota & Kampus dengan dropdown -->
            <div x-data="{ open: {{ request()->routeIs('admin.members.*') || request()->routeIs('admin.campuses.*') ? 'true' : 'false' }} }">
                <button @click="open = !open"
                    class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl hover:bg-white/5 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-3.5 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                        <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Anggota & Kampus</span>
                    </div>
                    <svg class="w-2 h-1.5 text-white/50 transition-transform duration-200"
                        :class="open ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 10 6">
                        <path fill-rule="evenodd" d="M5 6L0 0h10L5 6z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="pl-4 border-l border-white/10 space-y-1 mt-1">
                    <a href="#"
                        class="block px-3 py-2 rounded-lg text-white/60 text-sm font-normal hover:bg-white/5 transition-colors {{ request()->routeIs('admin.members.*') ? 'bg-white/5 text-white' : '' }}">
                        Anggota
                    </a>
                    <a href="#"
                        class="block px-3 py-2 rounded-lg text-white/60 text-sm font-normal hover:bg-white/5 transition-colors {{ request()->routeIs('admin.campuses.*') ? 'bg-white/5 text-white' : '' }}">
                        Kampus
                    </a>
                </div>
            </div>
        </div>

        <!-- PROGRAM & KEGIATAN -->
        <div class="space-y-1">
            <div class="px-3 pb-2">
                <span class="text-white/50 text-xs font-semibold font-['Inter'] leading-4 tracking-wide">PROGRAM &
                    KEGIATAN</span>
            </div>
            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/5 transition-colors {{ request()->routeIs('admin.programs.*') ? 'bg-white/10' : '' }}">
                <svg class="w-3.5 h-4 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Program Kerja</span>
            </a>
            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/5 transition-colors {{ request()->routeIs('admin.activities.*') ? 'bg-white/10' : '' }}">
                <svg class="w-4 h-3.5 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Kegiatan</span>
            </a>
            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/5 transition-colors {{ request()->routeIs('admin.galleries.*') ? 'bg-white/10' : '' }}">
                <svg class="w-4 h-4 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Galeri</span>
            </a>
        </div>

        <!-- PUBLIKASI -->
        <div class="space-y-1">
            <div class="px-3 pb-2">
                <span
                    class="text-white/50 text-xs font-semibold font-['Inter'] leading-4 tracking-wide">PUBLIKASI</span>
            </div>
            <div x-data="{ open: {{ request()->routeIs('admin.blogs.*') ? 'true' : 'false' }} }">
                <button @click="open = !open"
                    class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl hover:bg-white/5 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-3.5 h-3.5 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Blog</span>
                    </div>
                    <svg class="w-2 h-1.5 text-white/50 transition-transform duration-200"
                        :class="open ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 10 6">
                        <path fill-rule="evenodd" d="M5 6L0 0h10L5 6z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="pl-4 border-l border-white/10 space-y-1 mt-1">
                    <a href="#"
                        class="block px-3 py-2 rounded-lg text-white/60 text-sm font-normal hover:bg-white/5 transition-colors {{ request()->routeIs('admin.blogs.*') ? 'bg-white/5 text-white' : '' }}">
                        Artikel
                    </a>
                    <a href="#"
                        class="block px-3 py-2 rounded-lg text-white/60 text-sm font-normal hover:bg-white/5 transition-colors">
                        Kategori
                    </a>
                </div>
            </div>
        </div>

        <!-- KONTEN WEBSITE -->
        <div class="space-y-1">
            <div class="px-3 pb-2">
                <span class="text-white/50 text-xs font-semibold font-['Inter'] leading-4 tracking-wide">KONTEN
                    WEBSITE</span>
            </div>
            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/5 transition-colors">
                <svg class="w-4 h-3.5 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Profil IMA</span>
            </a>
            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/5 transition-colors">
                <svg class="w-3.5 h-4 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                    <path fill-rule="evenodd"
                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Sejarah IMA</span>
            </a>
            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/5 transition-colors">
                <svg class="w-3.5 h-4 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Sejarah Arosbaya</span>
            </a>
        </div>

        <!-- MEDIA -->
        <div class="space-y-1">
            <div class="px-3 pb-2">
                <span class="text-white/50 text-xs font-semibold font-['Inter'] leading-4 tracking-wide">MEDIA</span>
            </div>
            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/5 transition-colors">
                <svg class="w-5 h-4 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Media Library</span>
            </a>
        </div>

        <!-- SISTEM -->
        <div class="space-y-1 pt-2">
            <div class="px-3 pb-2">
                <span class="text-white/50 text-xs font-semibold font-['Inter'] leading-4 tracking-wide">SISTEM</span>
            </div>
            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/5 transition-colors">
                <svg class="w-4 h-4 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Pengaturan</span>
            </a>
            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/5 transition-colors">
                <svg class="w-3.5 h-4 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-white/70 text-sm font-medium font-['Inter'] leading-5">Pengguna & Hak Akses</span>
            </a>
        </div>
    </nav>
</aside>
