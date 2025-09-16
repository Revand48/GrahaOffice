<!-- resources/views/layouts/sidebar.blade.php -->
<aside x-data="{ crudOpen: {{ request()->is('jobs*') || request()->is('berita*') ? 'true' : 'false' }} }"
       class="flex flex-col w-64 h-full bg-white shadow-lg">

    <!-- Menu -->
    <nav class="flex-1 p-4 space-y-2">

        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center px-4 py-2 rounded-lg font-semibold transition-all duration-200 ease-out
                  {{ request()->is('dashboard') ? 'bg-yellow-500 text-black' : 'text-gray-800 hover:bg-yellow-100 hover:text-yellow-700' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 0l-7 7-7-7"/>
            </svg>
            Dashboard
        </a>

        <!-- CRUD Menu -->
        <div>
            <button @click="crudOpen = !crudOpen"
                    class="flex items-center justify-between w-full px-4 py-2 font-semibold text-gray-800 transition-all duration-200 ease-out rounded-lg hover:bg-yellow-100 hover:text-yellow-700">
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 17v-2h6v2m-7-6h8M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z"/>
                    </svg>
                    Menu CRUD
                </span>
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5 transition-transform duration-200 ease-out transform"
                     :class="{ 'rotate-90': crudOpen }"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5l7 7-7 7"/>
                </svg>
            </button>

            <!-- Submenu -->
            <div x-show="crudOpen"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="mt-2 ml-10 space-y-2">

                <a href="{{ route('job.index') }}"
                   class="block px-3 py-2 rounded-lg transition-all duration-200 ease-out
                          {{ request()->is('jobs*') ? 'bg-yellow-500 text-black' : 'text-gray-700 hover:bg-yellow-100 hover:text-yellow-700' }}">
                    CRUD Job
                </a>

                <a href="{{ route('berita.index') }}"
                   class="block px-3 py-2 rounded-lg transition-all duration-200 ease-out
                          {{ request()->is('berita*') ? 'bg-yellow-500 text-black' : 'text-gray-700 hover:bg-yellow-100 hover:text-yellow-700' }}">
                    CRUD Berita
                </a>
            </div>
        </div>
    </nav>

    <!-- Separator -->
    <hr class="mx-6 border-gray-200">

    <!-- Logout -->
    <div class="p-4">
        <form method="POST" >
            @csrf
            <button type="submit"
                    class="flex items-center justify-center w-full px-4 py-2 text-gray-700 transition-all duration-200 ease-out group hover:text-yellow-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
                <span class="relative">
                    Logout
                    <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-200 ease-out transform scale-x-0 bg-yellow-600 group-hover:scale-x-100"></span>
                </span>
            </button>
        </form>
    </div>
</aside>
