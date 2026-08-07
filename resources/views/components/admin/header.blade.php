<header class="h-20 px-6 bg-white border-b border-slate-200 flex items-center justify-between">
    <!-- Breadcrumb -->
    <div class="flex items-center gap-4">
        <button class="w-10 h-10 p-2 rounded-lg hover:bg-slate-100 transition-colors lg:hidden">
            <svg class="w-4 h-3 text-slate-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <div class="flex items-center gap-2">
            <span class="text-slate-500 text-sm font-normal font-['Inter'] leading-5">Home</span>
            <svg class="w-1.5 h-2 text-slate-500" fill="currentColor" viewBox="0 0 6 10">
                <path fill-rule="evenodd" d="M0 0l6 5-6 5V0z" clip-rule="evenodd" />
            </svg>
            <span class="text-slate-800 text-sm font-medium font-['Inter'] leading-5">@yield('page-title', 'Dashboard')</span>
        </div>
    </div>

    <!-- Right Section -->
    <div class="flex items-center gap-5">
        <!-- Period Badge -->
        <div
            class="px-3 py-1.5 bg-slate-50 rounded-xl shadow-sm outline outline-1 outline-slate-200 flex items-center gap-2">
            <span class="text-slate-700 text-sm font-semibold font-['Inter'] leading-5 tracking-tight">
                Periode Aktif: {{ $activePeriod ?? '2024-2025' }}
            </span>
        </div>

        <!-- Notification -->
        <button class="px-2 py-2 relative rounded-xl hover:bg-slate-100 transition-colors">
            <svg class="w-4 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span class="w-2 h-2 top-2 right-2 absolute bg-red-500 rounded-full border-2 border-white"></span>
        </button>

        <!-- Divider -->
        <div class="w-px h-8 bg-slate-200"></div>

        <!-- User Dropdown -->
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open"
                class="flex items-center gap-3 px-1.5 pr-3 py-1.5 rounded-xl hover:bg-slate-50 transition-colors">
                <img class="w-9 h-9 rounded-full shadow-sm border border-slate-200"
                    src="{{ Auth::user()->avatar ?? 'https://placehold.co/36x36' }}" alt="User Avatar" />
                <div class="text-left">
                    <div class="text-slate-800 text-sm font-semibold font-['Inter'] leading-4">
                        {{ Auth::user()->username ?? 'Admin User' }}
                    </div>
                    <div class="text-slate-500 text-xs font-normal font-['Inter'] leading-4">
                        {{ Auth::user()->roles->first()->name ?? 'Administrator' }}
                    </div>
                </div>
                <svg class="w-2.5 h-1.5 text-slate-400" fill="currentColor" viewBox="0 0 10 6">
                    <path fill-rule="evenodd" d="M5 6L0 0h10L5 6z" clip-rule="evenodd" />
                </svg>
            </button>

            <!-- Dropdown Menu -->
            <div x-show="open" @click.away="open = false"
                class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-slate-200 py-1 z-50">
                <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 transition-colors">
                    <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                    Profile
                </a>
                <hr class="my-1 border-slate-200">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1H3zm7 3a1 1 0 00-1 1v2H7a1 1 0 000 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>
