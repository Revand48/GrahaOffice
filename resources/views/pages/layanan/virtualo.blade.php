
@extends('layouts.app')

@section('content')
<div class="min-h-screen px-4 py-16 text-gray-800 bg-white sm:px-6 dark:bg-slate-800 dark:text-slate-200" x-data="{ openModal: false }">

    <div class="mb-10 text-center">
      <h1 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Detail</span>
        <span class="text-gray-900"> Virtual </span>
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Office</span>
      </h1>
    </div>

    <div class="grid max-w-5xl gap-10 mx-auto md:grid-cols-2 place-items-center">

<div class="relative w-[320px] min-h-[550px] bg-white/70 backdrop-blur-md rounded-2xl border border-yellow-300/70 shadow-lg
            hover:shadow-[0_0_30px_rgba(255,215,0,.45)] hover:scale-[1.03] transition-all duration-500
            flex flex-col"
     x-data x-intersect="$el.classList.add('animate-fadeInLeft')">

    <div class="absolute -left-3 top-6 bg-gradient-to-r from-yellow-400 to-amber-500
                text-white font-bold text-xs uppercase tracking-wider px-4 py-1.5 rounded-r-full shadow-md">
        Best Seller
    </div>

    <div class="flex flex-col items-center flex-grow p-6 space-y-4">

        <i class="fas fa-briefcase text-[#FFD700] text-5xl mt-5"></i>
        <h3 class="text-2xl font-bold text-gray-900">Virtual Office Silver</h3>

        <div class="text-center">
            <p class="text-3xl font-extrabold text-gray-900">Rp 400.000
                <span class="text-base font-normal text-gray-600">/Bulan</span>
            </p>
        </div>

        <hr class="w-3/4 my-2 border-t border-yellow-200">

        <ul class="flex-grow w-full space-y-2 text-sm text-gray-700">
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Alamat Bisnis Prestisius...</li>
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Layanan Resepsionis...</li>
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Pemberitahuan surat/pesan...</li>
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Gratis Fasilitas Ruang Tamu (**)</li>
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Biaya Sudah termasuk Pajak Penghasilan</li>
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Gratis Biaya Set Up</li>
        </ul>

        <div class="w-full pt-4 mt-auto">
            <button @click="openModal = true"
                    class="w-full bg-[#FFD700] hover:bg-yellow-500 text-white font-bold py-3 rounded-xl transition">
                Pesan Sekarang
            </button>
        </div>
    </div>
</div>

<div class="relative w-[320px] min-h-[550px] bg-white/70 rounded-2xl border border-yellow-200/70 shadow-lg
            hover:shadow-[0_0_30px_rgba(255,215,0,.35)] hover:scale-[1.03] transition-all duration-500
            flex flex-col"
     x-data x-intersect="$el.classList.add('animate-fadeInRight')">

    <div class="flex flex-col items-center flex-grow p-6 space-y-4">

        <i class="fas fa-building text-[#FFD700] text-5xl mt-5"></i>
        <h3 class="text-2xl font-bold text-gray-900">Virtual Office Gold</h3>

        <div class="text-center">
            <p class="text-3xl font-extrabold text-gray-900">Rp 800.000
                <span class="text-base font-normal text-gray-600">/Bulan</span>
            </p>
        </div>

        <hr class="w-3/4 my-2 border-t border-yellow-200">

        <ul class="flex-grow w-full space-y-2 text-sm text-gray-700">
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Alamat Bisnis Prestisius...</li>
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Layanan Resepsionis...</li>
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Pemberitahuan surat/pesan...</li>
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Gratis Fasilitas Ruang Tamu (**)</li>
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Biaya Sudah termasuk Pajak Penghasilan</li>
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Gratis Biaya Set Up</li>
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Nomor Telepon & Fax (*)</li>
            <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Layanan Menjawab Telepon Profesional</li>
        </ul>

        <div class="w-full pt-4 mt-auto">
            <button @click="openModal = true"
                    class="w-full bg-[#FFD700] hover:bg-yellow-500 text-white font-bold py-3 rounded-xl transition">
                Pesan Sekarang
            </button>
        </div>
    </div>
</div>
<div x-show="openModal" x-transition.opacity
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">
            @include('pages.layanan.form')
            <div class="mt-4 text-right">
                <button @click="openModal = false"
                        class="px-4 py-2 transition bg-gray-300 rounded-lg hover:bg-gray-400">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
