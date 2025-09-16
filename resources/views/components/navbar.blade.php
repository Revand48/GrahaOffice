<nav
    x-data="{
        openSearch: false,
        mobileOpen: false,
        darkMode: localStorage.getItem('theme') === 'dark'
    }"
    x-init="
        if(darkMode) document.documentElement.classList.add('dark');
        $watch('darkMode', val => {
            document.documentElement.classList.toggle('dark', val);
            localStorage.setItem('theme', val ? 'dark' : 'light');
        })
    "
    class="sticky top-0 z-40 bg-white shadow-sm dark:bg-slate-900 dark:text-white"
>
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">

            <!-- Logo kiri -> TULISAN -->
            <div class="flex-shrink-0">
                <a href="/"
                   class="text-2xl font-extrabold tracking-wide text-transparent bg-gradient-to-r from-yellow-400 to-amber-500 bg-clip-text dark:from-yellow-300 dark:to-amber-400">
                    GRAHA OFFICE
                </a>
            </div>

            <!-- Menu Tengah Desktop -->
            <div class="absolute hidden space-x-6 transform -translate-x-1/2 left-1/2 md:flex">

                <!-- Beranda -->
                <a href="/"
                   class="relative font-bold transition-all duration-300
                          after:content-[''] after:absolute after:left-0 after:bottom-[-4px]
                          after:h-[3px] after:w-0 after:bg-yellow-400
                          after:transition-all after:duration-300 hover:after:w-full">
                    Beranda
                </a>

                <!-- Dropdown Layanan -->
                <div x-data="{ open:false }"
                     @mouseenter="open=true" @mouseleave="open=false"
                     class="relative">
                    <button class="flex items-center font-bold transition-all duration-300
                                   after:content-[''] after:absolute after:left-0 after:bottom-[-4px]
                                   after:h-[3px] after:w-0 after:bg-yellow-400
                                   after:transition-all after:duration-300 hover:after:w-full">
                        Layanan
                        <svg class="w-4 h-4 ml-1 transition-transform duration-200"
                             :class="open && 'rotate-180'" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>

                    <!-- Dropdown card -->
                    <div x-show="open" x-cloak
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 -translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-2"
                         class="absolute z-50 w-48 py-1 mt-2 bg-white border rounded-md shadow-lg dark:bg-slate-700 border-black/10">
                        <a href="/layanan/virtual-office" class="block px-4 py-2 font-bold text-black rounded-md dark:text-slate-200 hover:bg-yellow-400">Virtual Office</a>
                        <a href="/layanan/private-office" class="block px-4 py-2 font-bold text-black rounded-md dark:text-slate-200 hover:bg-yellow-400">Private Office</a>
                        <a href="/layanan/shared-office" class="block px-4 py-2 font-bold text-black rounded-md dark:text-slate-200 hover:bg-yellow-400">Shared Office</a>
                        <a href="/layanan/pembuatan-pt-cv" class="block px-4 py-2 font-bold text-black rounded-md dark:text-slate-200 hover:bg-yellow-400">Jasa Pembuatan PT CV</a>
                        <a href="/layanan/paket-lengkap" class="block px-4 py-2 font-bold text-black rounded-md dark:text-slate-200 hover:bg-yellow-400">Paket Hemat PT CV & Virtual Office</a>
                    </div>
                </div>

                <!-- Galeri -->
                <a href="/galeri"
                   class="relative font-bold transition-all duration-300
                          after:content-[''] after:absolute after:left-0 after:bottom-[-4px]
                          after:h-[3px] after:w-0 after:bg-yellow-400
                          after:transition-all after:duration-300 hover:after:w-full">
                    Galeri
                </a>

                <!-- Job -->
                <a href="/job"
                   class="relative font-bold transition-all duration-300
                          after:content-[''] after:absolute after:left-0 after:bottom-[-4px]
                          after:h-[3px] after:w-0 after:bg-yellow-400
                          after:transition-all after:duration-300 hover:after:w-full">
                    Jobs
                </a>

                <!-- Blog -->
                <a href="/blog"
                   class="relative font-bold transition-all duration-300
                          after:content-[''] after:absolute after:left-0 after:bottom-[-4px]
                          after:h-[3px] after:w-0 after:bg-yellow-400
                          after:transition-all after:duration-300 hover:after:w-full">
                    Blog
                </a>
            </div>

            <!-- Search + Toggle kanan -->
            <div class="flex items-center ml-auto space-x-2">
                <!-- Search -->
                <div class="relative hidden md:block">
                    <button @click="openSearch=!openSearch"
                            class="p-2 transition rounded-full hover:bg-yellow-400 hover:text-black">
                        <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>

                    <div x-show="openSearch" @click.away="openSearch=false" x-cloak
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="-translate-y-full opacity-0"
                         x-transition:enter-end="translate-y-0 opacity-100"
                         x-transition:leave="transition ease-in duration-400"
                         x-transition:leave-start="translate-y-0 opacity-100"
                         x-transition:leave-end="-translate-y-full opacity-0"
                         class="absolute right-0 flex items-center w-64 h-16 px-2 mt-1 bg-white rounded-md shadow-md top-full dark:bg-slate-800">
                        <input type="text"
                               class="w-full px-3 py-2 bg-white border rounded-md border-slate-300 dark:border-slate-600 dark:bg-slate-700 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                               placeholder="Cari ruangan... (✕ untuk tutup)">
                        <button @click="openSearch=false"
                                class="ml-2 font-bold text-gray-500 dark:text-slate-200 hover:text-red-500">✕</button>
                    </div>
                </div>

                <!-- Toggle Dark/Light -->
                <button @click="darkMode = !darkMode"
                        class="relative p-2 transition-colors duration-300 bg-gray-200 rounded-full dark:bg-slate-700">
                    <!-- Sun -->
                    <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg"
                         class="w-6 h-6 text-yellow-500 transition-transform duration-500"
                         fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.106a.75.75 0 010 1.06l-1.591 1.59a.75.75 0 01-1.06-1.06l1.59-1.59a.75.75 0 011.06 0zm-11.832 9.788a.75.75 0 010-1.06l1.59-1.59a.75.75 0 111.06 1.06l-1.59 1.59a.75.75 0 01-1.06 0zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5h2.25a.75.75 0 01.75.75zM4.5 12a.75.75 0 01.75-.75h2.25a.75.75 0 010 1.5H5.25a.75.75 0 01-.75-.75zM6.106 7.722a.75.75 0 011.06 0l1.59 1.59a.75.75 0 01-1.06 1.06l-1.59-1.59a.75.75 0 010-1.06zM15.444 16.106a.75.75 0 011.06 0l1.59 1.59a.75.75 0 01-1.06 1.06l-1.59-1.59a.75.75 0 010-1.06z"/>
                    </svg>
                    <!-- Moon -->
                    <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg"
                         class="w-6 h-6 transition-transform duration-500 text-slate-300"
                         fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </button>
            </div>

            <!-- Hamburger Mobile -->
            <div class="flex items-center md:hidden">
                <button @click="mobileOpen = !mobileOpen"
                        class="p-2 text-black transition rounded-md dark:text-white hover:bg-yellow-400">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': mobileOpen, 'block': !mobileOpen }" class="block"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'block': mobileOpen, 'hidden': !mobileOpen }" class="hidden"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileOpen" x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="px-2 pt-2 pb-4 space-y-1 border-t border-gray-200 md:hidden dark:border-slate-700">
        <a href="/" class="block py-2 font-bold">Beranda</a>

        <div x-data="{ open:false }">
            <button @click="open=!open" class="flex justify-between w-full py-2 font-bold">
                Layanan
                <svg class="w-4 h-4 transition-transform" :class="open && 'rotate-180'" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>
            <div x-show="open" x-collapse class="pl-4">
                <a href="/layanan/virtual-office" class="block py-2 font-bold">Virtual Office</a>
                <a href="/layanan/private-office" class="block py-2 font-bold">Private Office</a>
                <a href="/layanan/shared-office" class="block py-2 font-bold">Shared Office</a>
                <a href="/layanan/pembuatan-pt-cv" class="block py-2 font-bold">Pembuatan PT CV</a>
                <a href="/layanan/paket-lengkap" class="block py-2 font-bold">Paket Hemat PT CV & Virtual Office</a>
            </div>
        </div>

        <a href="/galeri" class="block py-2 font-bold">Galeri</a>
        <a href="/job" class="block py-2 font-bold">Job</a>
        <a href="/blog" class="block py-2 font-bold">Blog</a>
    </div>
</nav>
