@extends('layouts.app')

@section('content')
<div class="min-h-screen px-4 py-16 text-gray-800 bg-white sm:px-6 dark:bg-slate-800 dark:text-slate-200" x-data="{ openModal: false }">

   <div class="mb-10 text-center">
      <h1 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Detail</span>
        <span class="text-gray-900"> Shared </span>
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Office</span>
      </h1>
    </div>

    <div class="grid max-w-5xl gap-10 mx-auto md:grid-cols-2 place-items-center">


        <div class="relative w-[320px] bg-white/70 backdrop-blur-md rounded-2xl border border-yellow-300/70 shadow-lg
                    hover:shadow-[0_0_30px_rgba(255,215,0,.45)] hover:scale-[1.03] transition-all duration-500"
             x-data x-intersect="$el.classList.add('animate-fadeInLeft')">

            <div class="absolute -left-3 top-6 bg-gradient-to-r from-yellow-400 to-amber-500
                        text-white font-bold text-xs uppercase tracking-wider px-4 py-1.5 rounded-r-full shadow-md">
                Best Seller
            </div>

            <div class="flex flex-col items-center p-6 space-y-4">
                <i class="fas fa-briefcase text-[#FFD700] text-5xl mt-5"></i>
                <h3 class="text-2xl font-bold text-gray-900">Open A</h3>

                <div class="text-center">
                    <p class="text-3xl font-extrabold text-gray-900">Rp 1.500.000<span class="text-base font-normal text-gray-600">/Bulan</span></p>
                </div>

                <hr class="w-3/4 my-2 border-t border-yellow-200">

                <ul class="w-full space-y-2 text-sm text-gray-700">
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Kapasitas 1 Orang</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Alamat Bisnis Prestisius & Resresentif</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Lokasi Strategis</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Layanan Resepsionis</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Pemberitahuan surat/pesan via Email/SMS/Whatsapp</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Biaya Sudah termasuk Pajak Penghasilan</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Gratis Biaya Set Up</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Ruang Meeting & Training ( Diskon 50 % )</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>No Telpon & Fax ( Kirim & Terima )</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Parkir Luas Dan Berlangganan Lebih Murah</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Faslitas : AC,Listrik,Air,Keamanan 24 Jam,Kebersihan Umum, Meja, Kursi, Loker,Dispenser, Pantry,Ruang Tamu, Ruangan Yang Cozy Dengan View Pegunungan & Perkotaan</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Gratis Akses WIFI</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Dekat Dengan Masjid, Gedung DBL Arena,Hotel Bintang 4,Kantin, Bank,ATM Center,KFC,Hokben, Starbuck,Exelso Dll</span></li>
                </ul>

                <div class="w-full pt-4 mt-auto">
                    <button @click="openModal = true"
                            class="w-full bg-[#FFD700] hover:bg-yellow-500 text-white font-bold py-3 rounded-xl transition">
                        Pesan Sekarang
                    </button>
                </div>
            </div>
        </div>

        <div class="relative w-[320px] bg-white/70 rounded-2xl border border-yellow-200/70 shadow-lg
                    hover:shadow-[0_0_30px_rgba(255,215,0,.35)] hover:scale-[1.03] transition-all duration-500"
             x-data x-intersect="$el.classList.add('animate-fadeInRight')">

            <div class="flex flex-col items-center p-6 space-y-4">

                <i class="fas fa-building text-[#FFD700] text-5xl mt-5"></i>
                <h3 class="text-2xl font-bold text-gray-900">Open B</h3>

                <div class="text-center">
                    <p class="text-3xl font-extrabold text-gray-900">Rp 1.000.000<span class="text-base font-normal text-gray-600">/Bulan</span></p>
                </div>

                <hr class="w-3/4 my-2 border-t border-yellow-200">

                <ul class="w-full space-y-2 text-sm text-gray-700">
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Kapasitas 1 Orang</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Alamat Bisnis Prestisius & Resresentif</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Lokasi Strategis</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Layanan Resepsionis</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Pemberitahuan surat/pesan via Email/SMS/Whatsapp</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Biaya Sudah termasuk Pajak Penghasilan</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Gratis Biaya Set Up</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Ruang Meeting & Training ( Diskon 50 % )</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>No Telpon & Fax ( Kirim & Terima )</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Parkir Luas Dan Berlangganan Lebih Murah</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Faslitas : AC,Listrik,Air,Keamanan 24 Jam,Kebersihan Umum, Meja, Kursi, Loker,Dispenser, Pantry,Ruang Tamu, Ruangan Yang Cozy Dengan View Pegunungan & Perkotaan</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Gratis Akses WIFI</span></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><span>Dekat Dengan Masjid, Gedung DBL Arena,Hotel Bintang 4,Kantin, Bank,ATM Center,KFC,Hokben, Starbuck,Exelso Dll</span></li>
                </ul>

                <div class="w-full pt-4 mt-auto">
                    <button @click="openModal = true"
                            class="w-full bg-[#FFD700] hover:bg-yellow-500 text-white font-bold py-3 rounded-xl transition">
                        Pesan Sekarang
                    </button>
                </div>
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
