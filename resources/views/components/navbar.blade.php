<div class="navbar bg-base-100 sticky top-0 z-50 font-semibold py-1">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a class="text-xl" href="{{ route('dashboard.index') }}">Dashboard</a></li>
                <li>
                    <a class="text-xl">Sejarah</a>
                    <ul class="p-2">
                        <li><a href="{{ route('arosbaya.index') }}" class="text-lg">Sejarah Arosbaya</a></li>
                        <li><a href="{{ route('ima.index') }}" class="text-lg">Sejarah Ikatan Mahasiswa Arosbaya</a></li>
                    </ul>
                </li>
                <li><a class="text-xl" href="{{ route('blog.index') }}">Blog</a></li>
                <li><a class="text-xl" href="{{ route('divisi.index') }}">Divisi</a></li>
            </ul>
        </div>

        <img src="{{ asset('images/logoima.svg') }}" alt="logoima" class="h-10 ml-5 m-w-xl hidden lg:block">
    </div>

    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a class="text-lg" href="{{ route('dashboard.index') }}">Dashboard</a></li>
            <li>
                <details class="group">
                    <summary class="cursor-pointer text-lg">Sejarah</summary>
                    <ul class="p-2">
                        <li><a class="text-lg" href="{{ route('arosbaya.index') }}">Sejarah Arosbaya</a></li>
                        <li><a class="text-lg" href="{{ route('ima.index') }}">Sejarah IMA</a></li>
                    </ul>
                </details>
            </li>
            <li><a class="text-lg" href="{{ route('blog.index') }}">Blog</a></li>
            <li><a class="text-lg" href="{{ route('divisi.index') }}">Divisi</a></li>
        </ul>
    </div>

    <div class="navbar-end ml-auto">
        <img src="{{ asset('images/logoima.svg') }}" alt="logoima" class="h-10 m-w-xl lg:hidden">
    </div>
</div>
