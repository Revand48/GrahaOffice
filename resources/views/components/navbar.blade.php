
<nav class="sticky top-0 z-40 bg-white shadow-sm dark:bg-slate-800 dark:text-slate-200"
     x-data="{ openSearch:false, mobileOpen:false, darkMode: localStorage.getItem('theme') === 'dark' }"
     x-init="darkMode && document.documentElement.classList.add('dark')">

    <div class="dark:bg-slate-800 dark:text-slate-200 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <!-- Logo (kiri) -->
            <div class="flex-shrink-0">
                <a href="/">
                    <img class="w-auto h-10 sm:h-12" src="{{ asset('images/logo.png') }}" alt="RentSpace">
                </a>
            </div>

            <!-- Navigasi menu (tetap di tengah) -->
            <div class="items-center hidden space-x-6 md:flex">
                <a href="/" class="font-bold transition-transform duration-200 hover:scale-110">Beranda</a>

                <!-- Dropdown Layanan -->
                <div x-data="{open:false}" @mouseenter="open=true" @mouseleave="open=false" class="relative group">
                    <button class="flex items-center font-bold transition-transform duration-200 hover:scale-110">
                    Layanan
                <!-- underline animasi -->
                <span class="ml-1 h-0.5 w-4 bg-yellow-400 group-hover:w-8 transition-all duration-300"></span>
                    <svg class="w-4 h-4 ml-1 transition-transform duration-200"
                            :class="open && 'rotate-180'" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 -translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-2"
                         class="absolute z-50 w-48 py-1 mt-2 bg-white border rounded-md shadow-lg border-black/10" x-cloak>
                        <a href="/layanan/virtual-office" class="block px-4 py-2 font-bold text-black transition-colors duration-200 rounded-md hover:bg-yellow-400">Virtual Office</a>
                        <a href="/layanan/private-office" class="block px-4 py-2 font-bold text-black transition-colors duration-200 rounded-md hover:bg-yellow-400">Private Office</a>
                        <a href="/layanan/shared-office" class="block px-4 py-2 font-bold text-black transition-colors duration-200 rounded-md hover:bg-yellow-400">Shared Office</a>
                        <a href="/layanan/pembuatan-pt-cv" class="block px-4 py-2 font-bold text-black transition-colors duration-200 rounded-md hover:bg-yellow-400">Jasa Pembuatan PT CV</a>
                        <a href="/layanan/paket-lengkap" class="block px-4 py-2 font-bold text-black transition-colors duration-200 rounded-md hover:bg-yellow-400">Paket Hemat Pembuatan PT CV & Virtual Office</a>
                    </div>
                </div>

                <a href="/galery" class="font-bold transition-transform duration-200 hover:scale-110">Galeri</a>
                <a href="/job"    class="font-bold transition-transform duration-200 hover:scale-110">Jobs</a>
                <a href="/blog"   class="font-bold transition-transform duration-200 hover:scale-110">Blog</a>
            </div>

            <!-- Search (desktop) -->
            <div class="relative hidden md:block">
                <button @click="openSearch=!openSearch" class="p-1 rounded-full">
                    <svg class="w-6 h-6 text-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
                <!-- Kotak input desktop -->
                <div x-show="openSearch"
                     @click.away="openSearch=false"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-x-full"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 translate-x-0"
                     x-transition:leave-end="opacity-0 translate-x-full"
                     class="absolute right-0 z-50 w-64 -translate-y-1/2 shadow-lg top-1/2"
                     x-cloak>
                    <input type="text"
                           class="w-full px-3 py-2 font-bold border border-black rounded-md focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                           placeholder="Cari ruangan...">
                </div>

            </div>

            <!-- Mobile controls -->
            <div class="flex items-center md:hidden">
                <!-- Hamburger (kiri) -->
                <button @click="mobileOpen = !mobileOpen" type="button"
                        class="inline-flex items-center justify-center p-2 text-black rounded-md hover:bg-yellow-400">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': mobileOpen, 'block': !mobileOpen }" class="block"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'block': mobileOpen, 'hidden': !mobileOpen }" class="hidden"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <!-- Search icon (kanan mobile) -->
                <button @click="openSearch=!openSearch" class="p-2 ml-auto text-black rounded-md hover:bg-yellow-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Search Input (full-width) -->
    <div x-show="openSearch"
         @click.away="openSearch=false"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="border-t border-gray-200 shadow-sm md:hidden" x-cloak>
        <div class="px-4 py-2">
            <input type="text"
                   class="w-full px-3 py-2 font-bold border border-black rounded-md focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                   placeholder="Cari ruangan...">
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-data="{mobileOpen:false}" x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="border-t border-gray-200 md:hidden" x-cloak>
        <div class="px-2 pt-2 pb-4 space-y-1">
            <a href="/" class="font-bold mobile-link">Beranda</a>

            <div x-data="{open:false}">
                <button @click="open=!open" class="flex items-center justify-between w-full font-bold text-left mobile-link">
                    Layanan
                    <svg class="w-4 h-4 transition-transform" :class="open && 'rotate-180'" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="pl-4">
                    <a href="/layanan/virtual-office" class="block py-2 font-bold text-black hover:text-yellow-500">Virtual Office</a>
                    <a href="/layanan/private-office" class="block py-2 font-bold text-black hover:text-yellow-500">Private Office</a>
                    <a href="/layanan/shared-office" class="block py-2 font-bold text-black hover:text-yellow-500">Shared Office</a>
                    <a href="/layanan/pembuatan-pt-cv" class="block py-2 font-bold text-black hover:text-yellow-500">Pembuatan PT CV</a>
                    <a href="/layanan/paket-lengkap" class="block py-2 font-bold text-black hover:text-yellow-500">Paket Hemat Pembuatan PT CV & Virtual Office</a>
                </div>
            </div>

            <a href="/galeri" class="font-bold mobile-link">Galeri</a>
            <a href="/job"    class="font-bold mobile-link">Job</a>
            <a href="/blog"   class="font-bold mobile-link">Blog</a>
        </div>
    </div>
</nav>

