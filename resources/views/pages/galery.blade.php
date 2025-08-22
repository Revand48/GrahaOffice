@extends('layouts.app')
@section('title', 'Galeri Priva')

@section('content')

<section class="relative py-16 bg-white isolate">
  <div class="absolute inset-0 overflow-hidden -z-10">

    <div class="absolute top-[10%] left-[8%] h-20 w-20 rotate-[-12deg] rounded-md bg-yellow-300/70 shadow-lg"></div>
    <div class="absolute bottom-[15%] right-[12%] h-16 w-16 rotate-[10deg] rounded-md bg-yellow-200/60 shadow-md"></div>
    <div class="absolute top-[40%] right-[20%] h-12 w-12 rotate-[5deg] rounded-md bg-yellow-400/50 shadow-sm"></div>

    <div class="absolute top-[-4rem] left-[-2rem] h-48 w-48 rounded-full bg-yellow-400/20 blur-3xl"></div>
    <div class="absolute bottom-[-2rem] right-[-4rem] h-40 w-40 rounded-full bg-yellow-300/20 blur-3xl"></div>

    <div class="absolute left-0 w-full h-px top-1/2 bg-yellow-200/30"></div>
    <div class="absolute left-0 w-full h-px top-1/3 bg-yellow-100/20"></div>
  </div>

  <div class="relative max-w-4xl px-4 mx-auto text-center">
    <h1 class="text-5xl font-bold tracking-tight sm:text-6xl md:text-7xl">
      <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">
        Galeri
      </span>
    </h1>
  </div>
</section>

<div class="container px-6 mx-auto mt-15">

    <div class="text-center">
      <h2 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Private </span>
        <span class="text-gray-900">Office</span>
      </h2>
      <p class="mt-4 text-base leading-7 text-gray-600 sm:mt-2 font-pj">
        Semua kebutuhan bisnis Anda dalam tempat ini
      </p>
    </div>

    <div class="mt-12 mb-10 text-center">
        <h3 class="font-bold leading-tight font-pj">
            <span class="mx-2 text-3xl font-bold text-black">PRIVATE OFFICE</span>
            <span class="inline-block text-3xl text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">
                A
            </span>
        </h3>
    </div>

    <div class="grid max-w-4xl grid-cols-1 gap-6 mx-auto md:grid-cols-2">
        <div x-data="{ open: false }" class="max-w-[280px] mx-auto p-2 bg-white shadow rounded-xl border border-gray-300 aspect-[4/3]">
            <div @click="open = true"
                 class="aspect-[4/3] overflow-hidden rounded-md border border-yellow-300 shadow-md shadow-yellow-200 cursor-pointer transition duration-200">
                <img src="{{ asset('galeri/privc/a.jpg') }}" alt="Private Office A - 1"
                     class="object-cover w-full h-full">
            </div>

            <div x-show="open" @click.self="open = false"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
                <div class="relative max-w-full max-h-full">
                    <img src="{{ asset('galeri/privc/a.jpg') }}" alt="Lihat Penuh - 1"
                         class="object-contain max-h-screen transition duration-300 rounded-md">
                    <button @click="open = false"
                            class="absolute p-2 text-white rounded-full top-2 right-2 bg-black/50 hover:bg-black/70">
                        ✕
                    </button>
                </div>
            </div>
        </div>

        <div x-data="{ open: false }" class="max-w-[280px] mx-auto p-2 bg-white shadow rounded-xl border border-gray-300 aspect-[4/3]">
            <div @click="open = true"
                 class="aspect-[4/3] overflow-hidden rounded-md border border-yellow-300 shadow-md shadow-yellow-200 cursor-pointer transition duration-200">
                <img src="{{ asset('galeri/privc/b.jpg') }}" alt="Private Office A - 2"
                     class="object-cover w-full h-full">
            </div>

            <div x-show="open" @click.self="open = false"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
                <div class="relative max-w-full max-h-full">
                    <img src="{{ asset('galeri/privc/b.jpg') }}" alt="Lihat Penuh - 2"
                         class="object-contain max-h-screen transition duration-300 rounded-md">
                    <button @click="open = false"
                            class="absolute p-2 text-white rounded-full top-2 right-2 bg-black/50 hover:bg-black/70">
                        ✕
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="relative mt-12">
        <div class="absolute inset-x-0 top-0 h-0.5 bg-gradient-to-r from-gray-300 via-yellow-300 to-gray-300"></div>
    </div>
</div>



<div class="relative grid h-screen grid-cols-4 grid-rows-4 gap-6 p-6 pb-10 overflow-hidden">

    <div class="absolute top-0 bottom-12 w-0.5 bg-gradient-to-b from-yellow-300 to-gray-300 left-[calc(50%)] -ml-px pointer-events-none z-10"></div>

    <div class="flex flex-col justify-center col-span-1 row-span-4 pl-6 text-left">
        <h3 class="text-3xl font-bold text-black">PRIVATE</h3>
        <h3 class="text-3xl font-bold text-black">OFFICE</h3>
        <h3 class="inline-block text-3xl font-bold text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">B</h3>
    </div>

    <div x-data="{ open: false }" class="w-full max-w-md mx-auto p-2 bg-white shadow rounded-xl border border-gray-300 row-span-2 aspect-[4/3]">
        <div @click="open = true" class="aspect-[4/3] overflow-hidden rounded-md border border-yellow-300 shadow-md shadow-yellow-200 cursor-pointer transition duration-200">
            <img src="{{ asset('galeri/privb/a.jpg') }}" alt="Foto Galeri" class="object-cover w-full h-full">
        </div>
        <div
            x-show="open"
            @click.self="open = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm"
        >
            <div class="relative max-w-full max-h-full">
                <img src="{{ asset('galeri/privb/a.jpg') }}" alt="Foto Full" class="object-contain max-h-screen transition duration-300 rounded-md">
                <button @click="open = false" class="absolute p-2 text-white rounded-full top-2 right-2 bg-black/50 hover:bg-black/70">✕</button>
            </div>
        </div>
    </div>

    <div x-data="{ open: false }" class="w-full max-w-md mx-auto p-2 bg-white shadow rounded-xl border border-gray-300 row-span-2 col-start-2 row-start-3 aspect-[4/3]">
        <div @click="open = true" class="aspect-[4/3] overflow-hidden rounded-md border border-yellow-300 shadow-md shadow-yellow-200 cursor-pointer transition duration-200">
            <img src="{{ asset('galeri/privb/b.jpg') }}" alt="Foto Galeri" class="object-cover w-full h-full">
        </div>
        <div
            x-show="open"
            @click.self="open = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm"
        >
            <div class="relative max-w-full max-h-full">
                <img src="{{ asset('galeri/privb/b.jpg') }}" alt="Foto Full" class="object-contain max-h-screen transition duration-300 rounded-md">
                <button @click="open = false" class="absolute p-2 text-white rounded-full top-2 right-2 bg-black/50 hover:bg-black/70">✕</button>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center col-span-1 col-start-3 row-span-4 pl-6 text-left">
        <h3 class="text-3xl font-bold text-black">PRIVATE</h3>
        <h3 class="text-3xl font-bold text-black">OFFICE</h3>
        <h3 class="inline-block text-3xl font-bold text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">
            C
        </h3>
    </div>

    <div x-data="{ open: false }" class="w-full max-w-md mx-auto p-2 bg-white shadow rounded-xl border border-gray-300 row-span-2 col-start-4 row-start-1 aspect-[4/3]">
        <div @click="open = true" class="aspect-[4/3] overflow-hidden rounded-md border border-yellow-300 shadow-md shadow-yellow-200 cursor-pointer transition duration-200">
            <img src="{{ asset('galeri/privc/a.jpg') }}" alt="Foto Galeri" class="object-cover w-full h-full">
        </div>
        <div
            x-show="open"
            @click.self="open = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm"
        >
            <div class="relative max-w-full max-h-full">
                <img src="{{ asset('galeri/privc/a.jpg') }}" alt="Foto Full" class="object-contain max-h-screen transition duration-300 rounded-md">
                <button @click="open = false" class="absolute p-2 text-white rounded-full top-2 right-2 bg-black/50 hover:bg-black/70">✕</button>
            </div>
        </div>
    </div>

    <div x-data="{ open: false }" class="w-full max-w-md mx-auto p-2 bg-white shadow rounded-xl border border-gray-300 row-span-2 col-start-4 row-start-3 aspect-[4/3]">
        <div @click="open = true" class="aspect-[4/3] overflow-hidden rounded-md border border-yellow-300 shadow-md shadow-yellow-200 cursor-pointer transition duration-200">
            <img src="{{ asset('galeri/privc/b.jpg') }}" alt="Foto Galeri" class="object-cover w-full h-full">
        </div>
        <div
            x-show="open"
            @click.self="open = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm"
        >
            <div class="relative max-w-full max-h-full">
                <img src="{{ asset('galeri/privc/b.jpg') }}" alt="Foto Full" class="object-contain max-h-screen transition duration-300 rounded-md">
                <button @click="open = false" class="absolute p-2 text-white rounded-full top-2 right-2 bg-black/50 hover:bg-black/70">✕</button>
            </div>
        </div>
    </div>

</div>


<div class="container px-6 mx-auto mt-10">
    <div class="text-center">
      <h2 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Shared </span>
        <span class="text-gray-900">Office</span>
      </h2>
      <p class="mt-4 text-base leading-7 text-gray-600 sm:mt-2 font-pj">
        Semua kebutuhan bisnis Anda dalam tempat ini
      </p>
    </div>

    <div class="grid max-w-4xl grid-cols-1 gap-6 mx-auto mt-12 md:grid-cols-2">
        <div x-data="{ open: false }" class="max-w-[280px] mx-auto p-2 bg-white shadow rounded-xl border border-gray-300 aspect-[4/3]">
            <div @click="open = true"
                 class="aspect-[4/3] overflow-hidden rounded-md border border-yellow-300 shadow-md shadow-yellow-200 cursor-pointer transition duration-200">
                <img src="{{ asset('galeri/shared/a.jpg') }}" alt="Private Office A - 1"
                     class="object-cover w-full h-full">
            </div>

            <div x-show="open" @click.self="open = false"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
                <div class="relative max-w-full max-h-full">
                    <img src="{{ asset('galeri/shared/a.jpg') }}" alt="Lihat Penuh - 1"
                         class="object-contain max-h-screen transition duration-300 rounded-md">
                    <button @click="open = false"
                            class="absolute p-2 text-white rounded-full top-2 right-2 bg-black/50 hover:bg-black/70">
                        ✕
                    </button>
                </div>
            </div>
        </div>

        <div x-data="{ open: false }" class="max-w-[280px] mx-auto p-2 bg-white shadow rounded-xl border border-gray-300 aspect-[4/3]">
            <div @click="open = true"
                 class="aspect-[4/3] overflow-hidden rounded-md border border-yellow-300 shadow-md shadow-yellow-200 cursor-pointer transition duration-200">
                <img src="{{ asset('galeri/shared/b.jpg') }}" alt="Private Office A - 2"
                     class="object-cover w-full h-full">
            </div>

            <div x-show="open" @click.self="open = false"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
                <div class="relative max-w-full max-h-full">
                    <img src="{{ asset('galeri/shared/b.jpg') }}" alt="Lihat Penuh - 2"
                         class="object-contain max-h-screen transition duration-300 rounded-md">
                    <button @click="open = false"
                            class="absolute p-2 text-white rounded-full top-2 right-2 bg-black/50 hover:bg-black/70">
                        ✕
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-6 mx-auto mt-15">
    <div class="text-center">
        <h2 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
            <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Ruang </span>
            <span class="text-gray-900">Meeting & </span>
            <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Training</span>
        </h2>
        <p class="mt-4 text-base leading-7 text-gray-600 sm:mt-2 font-pj">
            Semua kebutuhan bisnis Anda dalam tempat ini
        </p>
    </div>

    <div class="grid max-w-4xl grid-cols-1 gap-10 mx-auto mt-12 mb-15 md:grid-cols-3">
        <div x-data="{ open: false }" class="max-w-[280px] mx-auto p-2 bg-white shadow rounded-xl border border-gray-300 aspect-[4/3]">
            <div @click="open = true"
                 class="aspect-[4/3] overflow-hidden rounded-md border border-yellow-300 shadow-md shadow-yellow-200 cursor-pointer transition duration-200">
                <img src="{{ asset('galeri/meeting/a.jpg') }}" alt="Private Office A - 1"
                     class="object-cover w-full h-full">
            </div>

            <div x-show="open" @click.self="open = false"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
                <div class="relative max-w-full max-h-full">
                    <img src="{{ asset('galeri/meeting/a.jpg') }}" alt="Lihat Penuh - 1"
                         class="object-contain max-h-screen transition duration-300 rounded-md">
                    <button @click="open = false"
                            class="absolute p-2 text-white rounded-full top-2 right-2 bg-black/50 hover:bg-black/70">
                        ✕
                    </button>
                </div>
            </div>
        </div>

        <div x-data="{ open: false }" class="max-w-[280px] mx-auto p-2 bg-white shadow rounded-xl border border-gray-300 aspect-[4/3]">
            <div @click="open = true"
                 class="aspect-[4/3] overflow-hidden rounded-md border border-yellow-300 shadow-md shadow-yellow-200 cursor-pointer transition duration-200">
                <img src="{{ asset('galeri/meeting/b.jpg') }}" alt="Private Office A - 2"
                     class="object-cover w-full h-full">
            </div>

            <div x-show="open" @click.self="open = false"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
                <div class="relative max-w-full max-h-full">
                    <img src="{{ asset('galeri/meeting/b.jpg') }}" alt="Lihat Penuh - 2"
                         class="object-contain max-h-screen transition duration-300 rounded-md">
                    <button @click="open = false"
                            class="absolute p-2 text-white rounded-full top-2 right-2 bg-black/50 hover:bg-black/70">
                        ✕
                    </button>
                </div>
            </div>
        </div>

        <div x-data="{ open: false }" class="max-w-[280px] mx-auto p-2 bg-white shadow rounded-xl border border-gray-300 aspect-[4/3]">
            <div @click="open = true"
                 class="aspect-[4/3] overflow-hidden rounded-md border border-yellow-300 shadow-md shadow-yellow-200 cursor-pointer transition duration-200">
                <img src="{{ asset('galeri/meeting/c.jpg') }}" alt="Private Office A - 3"
                     class="object-cover w-full h-full">
            </div>

            <div x-show="open" @click.self="open = false"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
                <div class="relative max-w-full max-h-full">
                    <img src="{{ asset('galeri/meeting/c.jpg') }}" alt="Lihat Penuh - 3"
                         class="object-contain max-h-screen transition duration-300 rounded-md">
                    <button @click="open = false"
                            class="absolute p-2 text-white rounded-full top-2 right-2 bg-black/50 hover:bg-black/70">
                        ✕
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
