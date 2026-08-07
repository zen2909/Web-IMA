@extends('layouts.admin')

@section('title', 'Dashboard - IMA Arosbaya')
@section('page-title', 'Dashboard')

@section('content')
    <div class="space-y-8">
        <!-- Header -->
        <div class="flex justify-between items-end">
            <div>
                <h1 class="text-3xl font-bold font-['Manrope'] text-green-950 leading-10">Dashboard</h1>
                <p class="text-neutral-700 text-lg font-normal font-['Inter'] leading-7">Selamat datang kembali, Admin IMA
                </p>
            </div>
            <div
                class="px-4 py-2 bg-emerald-200/30 rounded-full outline outline-1 outline-green-300 flex items-center gap-2">
                <svg class="w-2.5 h-3 text-green-800" fill="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" />
                </svg>
                <span class="text-green-800 text-xs font-medium font-['JetBrains_Mono'] uppercase leading-3 tracking-wide">
                    PERIODE AKTIF: 2025–2027
                </span>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-6 gap-4">
            @php
                $stats = [
                    [
                        'label' => 'Total Anggota',
                        'value' => '1,240',
                        'change' => '+12 bulan ini',
                        'icon' =>
                            'M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z',
                    ],
                    [
                        'label' => 'Total Pengurus',
                        'value' => '85',
                        'sub' => '15 inti, 70 anggota div',
                        'icon' =>
                            'M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z',
                    ],
                    [
                        'label' => 'Total Divisi',
                        'value' => '8',
                        'sub' => 'Termasuk BPH',
                        'icon' => 'M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h10v2H4v-2z',
                    ],
                    [
                        'label' => 'Program Kerja',
                        'value' => '32',
                        'sub' => '12 selesai, 20 berjalan',
                        'icon' =>
                            'M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z',
                    ],
                    [
                        'label' => 'Total Kegiatan',
                        'value' => '48',
                        'sub' => 'Tahun ini',
                        'icon' =>
                            'M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z',
                    ],
                    [
                        'label' => 'Total Artikel',
                        'value' => '156',
                        'sub' => '4 draf, 152 terbit',
                        'icon' => 'M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h10v2H4v-2z',
                    ],
                ];
            @endphp

            @foreach ($stats as $stat)
                <div class="px-5 pt-5 pb-8 bg-white rounded-xl shadow-sm relative overflow-hidden">
                    <div class="w-16 h-16 absolute -top-4 left-[144px] bg-emerald-200/20 rounded-full"></div>
                    <div class="flex justify-between items-start">
                        <span
                            class="text-neutral-700 text-sm font-medium font-['Inter'] leading-5">{{ $stat['label'] }}</span>
                        <div class="w-8 h-8 bg-green-900 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-3.5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="{{ $stat['icon'] }}" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-1">
                        <h2 class="text-3xl font-bold font-['Manrope'] text-green-950 leading-10">{{ $stat['value'] }}</h2>
                        @if (isset($stat['change']))
                            <div class="flex items-center gap-1 mt-1">
                                <svg class="w-2.5 h-1.5 text-green-800" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 4l-8 8h16z" />
                                </svg>
                                <span
                                    class="text-green-800 text-xs font-medium font-['JetBrains_Mono'] leading-3 tracking-wide">{{ $stat['change'] }}</span>
                            </div>
                        @endif
                        @if (isset($stat['sub']))
                            <p
                                class="text-neutral-500 text-xs font-medium font-['JetBrains_Mono'] leading-3 tracking-wide mt-1">
                                {{ $stat['sub'] }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bottom Section -->
        <div class="grid grid-cols-2 gap-6">
            <!-- Periode Aktif -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-4 bg-green-950/5 border-b border-zinc-200 flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-950" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                        </svg>
                        <span class="text-green-950 text-xl font-semibold font-['Manrope'] leading-7">Periode Kepengurusan
                            Aktif</span>
                    </div>
                    <div class="px-3 py-1 bg-emerald-200 rounded-full flex items-center gap-1">
                        <span class="w-2 h-2 bg-green-950 rounded-full"></span>
                        <span
                            class="text-green-800 text-xs font-medium font-['JetBrains_Mono'] uppercase leading-3 tracking-wide">AKTIF</span>
                    </div>
                </div>
                <div class="px-6 py-10 flex flex-col items-center">
                    <h2 class="text-6xl font-normal font-['Manrope'] text-green-950 leading-[60px]">2025–2027</h2>
                    <p
                        class="max-w-96 text-neutral-700 text-base font-normal font-['Inter'] leading-6 text-center mt-2 mb-8">
                        Kabinet progresif dengan fokus pada penguatan<br />kaderisasi dan kontribusi sosial kemasyarakatan.
                    </p>
                    <div class="grid grid-cols-4 gap-8 w-full max-w-96 mb-8">
                        <div class="text-center">
                            <div class="text-green-950 text-2xl font-semibold font-['Manrope'] leading-8">85</div>
                            <div
                                class="text-neutral-500 text-xs font-medium font-['JetBrains_Mono'] uppercase leading-3 tracking-wider">
                                PENGURUS</div>
                        </div>
                        <div class="text-center">
                            <div class="text-green-950 text-2xl font-semibold font-['Manrope'] leading-8">8</div>
                            <div
                                class="text-neutral-500 text-xs font-medium font-['JetBrains_Mono'] uppercase leading-3 tracking-wider">
                                DIVISI</div>
                        </div>
                        <div class="text-center">
                            <div class="text-green-950 text-2xl font-semibold font-['Manrope'] leading-8">32</div>
                            <div
                                class="text-neutral-500 text-xs font-medium font-['JetBrains_Mono'] uppercase leading-3 tracking-wider">
                                PROKER</div>
                        </div>
                        <div class="text-center">
                            <div class="text-green-950 text-2xl font-semibold font-['Manrope'] leading-8">48</div>
                            <div
                                class="text-neutral-500 text-xs font-medium font-['JetBrains_Mono'] uppercase leading-3 tracking-wider">
                                KEGIATAN</div>
                        </div>
                    </div>
                    <button
                        class="px-8 py-3 bg-green-900 hover:bg-green-800 active:bg-green-950 rounded-xl transition-colors flex items-center gap-2 shadow-md">
                        <span class="text-white text-base font-medium font-['Inter'] leading-6">Lihat Periode</span>
                        <svg class="w-2.5 h-2.5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M5 3l14 9-14 9V3z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Kegiatan Terbaru -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b border-zinc-200 flex justify-between items-center">
                    <span class="text-green-950 text-xl font-semibold font-['Manrope'] leading-7">Kegiatan Terbaru</span>
                    <a href="#" class="flex items-center gap-1 hover:opacity-70 transition-opacity">
                        <span
                            class="text-green-950 text-xs font-medium font-['JetBrains_Mono'] uppercase leading-3 tracking-wide">LIHAT
                            SEMUA</span>
                        <svg class="w-1.5 h-2 text-green-950" fill="currentColor" viewBox="0 0 6 10">
                            <path fill-rule="evenodd" d="M0 0l6 5-6 5V0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="p-2 space-y-1">
                    @php
                        $activities = [
                            [
                                'title' => 'Latihan Kepemimpinan Mahasiswa',
                                'division' => 'Divisi PSDM',
                                'date' => '12 Okt 2025',
                                'status' => 'Selesai',
                            ],
                            [
                                'title' => 'IMA Berbagi: Santunan Anak Yatim',
                                'division' => 'Divisi Humas',
                                'date' => '28 Sep 2025',
                                'status' => 'Selesai',
                            ],
                            [
                                'title' => 'Webinar Kewirausahaan Muda',
                                'division' => 'Divisi Ekonomi',
                                'date' => '15 Sep 2025',
                                'status' => 'Selesai',
                            ],
                            [
                                'title' => 'Turnamen Futsal IMA Cup',
                                'division' => 'Div. Minat Bakat',
                                'date' => '02 Sep 2025',
                                'status' => 'Selesai',
                            ],
                            [
                                'title' => 'Rapat Pleno Tengah Tahun',
                                'division' => 'Sekretaris',
                                'date' => '25 Ags 2025',
                                'status' => 'Selesai',
                            ],
                        ];
                    @endphp
                    @foreach ($activities as $index => $activity)
                        <div
                            class="p-4 rounded-lg {{ $index < 4 ? 'border-b border-zinc-200' : '' }} flex items-start gap-4">
                            <div class="w-10 h-10 bg-zinc-200 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-neutral-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-zinc-900 text-base font-medium font-['Inter'] leading-6">
                                    {{ $activity['title'] }}</h4>
                                <div class="flex items-center gap-3 mt-1">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-3 h-2.5 text-neutral-700" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                        </svg>
                                        <span
                                            class="text-neutral-700 text-sm font-normal font-['Inter'] leading-5">{{ $activity['division'] }}</span>
                                    </div>
                                    <span class="text-zinc-300 text-sm font-normal font-['Inter'] leading-5">•</span>
                                    <div class="flex items-center gap-1">
                                        <svg class="w-2.5 h-3 text-neutral-700" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z" />
                                        </svg>
                                        <span
                                            class="text-neutral-700 text-sm font-normal font-['Inter'] leading-5">{{ $activity['date'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-2.5 py-1.5 bg-emerald-200/50 rounded-md flex-shrink-0">
                                <span
                                    class="text-green-800 text-xs font-medium font-['JetBrains_Mono'] leading-3 tracking-wide">{{ $activity['status'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Program Kerja & Artikel & Aktivitas Admin -->
        <div class="grid grid-cols-3 gap-6">
            <!-- Program Kerja Terbaru -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="px-5 py-4 border-b border-zinc-200">
                    <h3 class="text-green-950 text-xl font-semibold font-['Manrope'] leading-7">Program Kerja Terbaru</h3>
                </div>
                <div class="px-2 pt-2 pb-10">
                    @php
                        $programs = [
                            ['name' => 'Desa Binaan', 'status' => 'Berjalan'],
                            ['name' => 'Seminar Nasional', 'status' => 'Perencanaan'],
                            ['name' => 'Pelatihan Jurnalistik', 'status' => 'Selesai'],
                        ];
                    @endphp
                    @foreach ($programs as $program)
                        <div class="p-3 rounded-lg flex items-center justify-between hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-emerald-200/20 rounded-md flex items-center justify-center">
                                    <svg class="w-3.5 h-3.5 text-green-950" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-zinc-900 text-sm font-medium font-['Inter'] leading-5">
                                        {{ $program['name'] }}</div>
                                    <div
                                        class="text-neutral-500 text-xs font-medium font-['JetBrains_Mono'] leading-3 tracking-wide">
                                        {{ $program['status'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Artikel Terbaru -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="px-5 py-4 border-b border-zinc-200">
                    <h3 class="text-green-950 text-xl font-semibold font-['Manrope'] leading-7">Artikel Terbaru</h3>
                </div>
                <div class="px-2 pt-2 pb-9">
                    @php
                        $articles = [
                            ['title' => 'Opini: Peran Mahasiswa di Era Digital', 'category' => 'Opini Mahasiswa'],
                            ['title' => 'Liputan Khusus: Mubes IMA Ke-24', 'category' => 'Liputan Kegiatan'],
                            ['title' => 'Update Kampus: Akreditasi Arosbaya', 'category' => 'Berita Kampus'],
                        ];
                    @endphp
                    @foreach ($articles as $article)
                        <div class="p-3 rounded-lg flex items-center gap-3 hover:bg-slate-50 transition-colors">
                            <div class="w-8 h-8 bg-zinc-200 rounded-md flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-neutral-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h10v2H4v-2z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-zinc-900 text-sm font-medium font-['Inter'] leading-5">
                                    {{ $article['title'] }}</div>
                                <div
                                    class="text-neutral-500 text-xs font-medium font-['JetBrains_Mono'] leading-3 tracking-wide">
                                    {{ $article['category'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Aktivitas Admin -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden relative">
                <div class="w-32 h-32 absolute -top-[80px] -right-[40px] bg-green-950/5 rounded-tl-[9999px]"></div>
                <div class="px-5 py-4 border-b border-zinc-200">
                    <h3 class="text-green-950 text-xl font-semibold font-['Manrope'] leading-7">Aktivitas Admin</h3>
                </div>
                <div class="px-8 pr-5 py-5">
                    @php
                        $activities = [
                            ['text' => 'Admin B mengunggah artikel "Liputan Mubes"', 'time' => '2 jam yang lalu'],
                            ['text' => 'Admin A menambahkan pengurus baru ke Divisi PSDM', 'time' => '5 jam yang lalu'],
                            ['text' => 'Sistem mencadangkan database otomatis', 'time' => 'Kemarin, 23:59'],
                        ];
                    @endphp
                    <div class="border-l border-zinc-200 pl-6 space-y-6">
                        @foreach ($activities as $index => $activity)
                            <div class="relative">
                                <div
                                    class="w-2 h-2 absolute -left-[9px] top-1 rounded-full {{ $index === 0 ? 'bg-green-950' : 'bg-zinc-200' }} shadow-[0_0_0_4px_white]">
                                </div>
                                <p class="text-zinc-900 text-sm font-normal font-['Inter'] leading-5">
                                    {{ $activity['text'] }}</p>
                                <p
                                    class="text-neutral-500 text-xs font-medium font-['JetBrains_Mono'] leading-3 tracking-wide mt-1">
                                    {{ $activity['time'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
