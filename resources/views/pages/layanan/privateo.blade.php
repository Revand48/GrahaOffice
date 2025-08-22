@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 min-h-screen py-16 px-4 sm:px-6" x-data="{ openModal: false }">

    <div class="text-center mb-10">
        <h1 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
            <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Detail</span>
            <span class="text-gray-900"> Shared </span>
            <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Office</span>
        </h1>
    </div>

    <div class="grid md:grid-cols-3 gap-10 place-items-center max-w-6xl mx-auto">

        <div class="relative w-[320px] min-h-[850px] bg-white/70 backdrop-blur-md rounded-2xl border border-yellow-300/70 shadow-lg hover:shadow-[0_0_30px_rgba(255,215,0,.45)] hover:scale-[1.03] transition-all duration-500 flex flex-col" x-data x-intersect="$el.classList.add('animate-fadeInLeft')">
            <div class="absolute -left-3 top-6 bg-gradient-to-r from-yellow-400 to-amber-500 text-white font-bold text-xs uppercase tracking-wider px-4 py-1.5 rounded-r-full shadow-md">
                Best Seller
            </div>
            <div class="p-6 flex flex-col items-center space-y-4 flex-grow">
                <i class="fas fa-briefcase text-[#FFD700] text-5xl mt-5"></i>
                <h3 class="text-2xl font-bold text-gray-900">Private Office A</h3>
                <div class="text-center">
                    <p class="text-3xl font-extrabold text-gray-900">Rp 6.000.000<span class="text-base font-normal text-gray-600">/Bulan</span></p>
                </div>
                <hr class="w-3/4 border-t border-yellow-200 my-2">
                <ul class="space-y-2 text-gray-700 text-sm w-full">
                    <li><span class="text-[#FFD700] mr-2">●</span>Ukuran &plusmn;11,5m&sup2;</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Kapasitas 6 Orang</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Alamat Bisnis Prestisius & Representatif</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Lokasi Strategis</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Layanan Resepsionis</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Pemberitahuan surat/pesan via Email/SMS/Whatsapp</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Biaya Sudah termasuk Pajak Penghasilan</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Gratis Biaya Set Up</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Ruang Meeting & Training (Diskon 50%)</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>No Telpon & Fax (Kirim & Terima)</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Parkir Luas Dan Berlangganan Lebih Murah</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Faslitas : AC,Listrik,Air,Keamanan 24 Jam,Kebersihan Umum, Meja, Kursi, Loker,Dispenser, Pantry,Ruang Tamu, Ruangan Yang Cozy Dengan View Pegunungan & Perkotaan</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Gratis Akses WIFI</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Dekat Dengan Masjid,Gedung DBL Arena, Hotel Bintang 4,Kantin, Bank,ATM Center,KFC,Hokben, Starbuck,Exelso Dll</li>
                </ul>
                <div class="mt-auto pt-4 w-full">
                    <button @click="openModal = true" class="w-full bg-[#FFD700] hover:bg-yellow-500 text-white font-bold py-3 rounded-xl transition">Pesan Sekarang</button>
                </div>
            </div>
        </div>

        <div class="relative w-[320px] min-h-[850px] bg-white/70 rounded-2xl border border-yellow-200/70 shadow-lg hover:shadow-[0_0_30px_rgba(255,215,0,.35)] hover:scale-[1.03] transition-all duration-500 flex flex-col" x-data x-intersect="$el.classList.add('animate-fadeInUp')">
            <div class="p-6 flex flex-col items-center space-y-4 flex-grow">
                <i class="fas fa-building text-[#FFD700] text-5xl mt-5"></i>
                <h3 class="text-2xl font-bold text-gray-900">Private Office B</h3>
                <div class="text-center">
                    <p class="text-3xl font-extrabold text-gray-900">Rp 5.000.000<span class="text-base font-normal text-gray-600">/Bulan</span></p>
                </div>
                <hr class="w-3/4 border-t border-yellow-200 my-2">
                <ul class="space-y-2 text-gray-700 text-sm w-full">
                    <li><span class="text-[#FFD700] mr-2">●</span>Ukuran &plusmn;8m&sup2;</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Kapasitas 4 Orang</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Alamat Bisnis Prestisius & Representatif</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Lokasi Strategis</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Layanan Resepsionis</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Pemberitahuan surat/pesan via Email/SMS/Whatsapp</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Biaya Sudah termasuk Pajak Penghasilan</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Gratis Biaya Set Up</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Ruang Meeting & Training (Diskon 50%)</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>No Telpon & Fax (Kirim & Terima)</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Parkir Luas Dan Berlangganan Lebih Murah</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Faslitas : AC,Listrik,Air,Keamanan 24 Jam,Kebersihan Umum, Meja, Kursi, Loker,Dispenser, Pantry,Ruang Tamu, Ruangan Yang Cozy Dengan View Pegunungan & Perkotaan</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Gratis Akses WIFI</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Dekat Dengan Masjid,Gedung DBL Arena, Hotel Bintang 4,Kantin, Bank,ATM Center,KFC,Hokben, Starbuck,Exelso Dll</li>
                </ul>
                <div class="mt-auto pt-4 w-full">
                    <button @click="openModal = true" class="w-full bg-[#FFD700] hover:bg-yellow-500 text-white font-bold py-3 rounded-xl transition">Pesan Sekarang</button>
                </div>
            </div>
        </div>

        <div class="relative w-[320px] min-h-[850px] bg-white/70 rounded-2xl border border-yellow-200/70 shadow-lg hover:shadow-[0_0_30px_rgba(255,215,0,.35)] hover:scale-[1.03] transition-all duration-500 flex flex-col" x-data x-intersect="$el.classList.add('animate-fadeInRight')">
            <div class="p-6 flex flex-col items-center space-y-4 flex-grow">
                <i class="fas fa-chair text-[#FFD700] text-5xl mt-5"></i>
                <h3 class="text-2xl font-bold text-gray-900">Private Office C</h3>
                <div class="text-center">
                    <p class="text-3xl font-extrabold text-gray-900">Rp 4.000.000<span class="text-base font-normal text-gray-600">/Bulan</span></p>
                </div>
                <hr class="w-3/4 border-t border-yellow-200 my-2">
                <ul class="space-y-2 text-gray-700 text-sm w-full">
                    <li><span class="text-[#FFD700] mr-2">●</span>Ukuran &plusmn;8m&sup2;</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Kapasitas 4 Orang</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Alamat Bisnis Prestisius & Representatif</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Lokasi Strategis</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Layanan Resepsionis</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Pemberitahuan surat/pesan via Email/SMS/Whatsapp</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Biaya Sudah termasuk Pajak Penghasilan</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Gratis Biaya Set Up</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Ruang Meeting & Training (Diskon 50%)</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>No Telpon & Fax (Kirim & Terima)</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Parkir Luas Dan Berlangganan Lebih Murah</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Faslitas : AC,Listrik,Air,Keamanan 24 Jam,Kebersihan Umum, Meja, Kursi, Loker,Dispenser, Pantry,Ruang Tamu, Ruangan Yang Cozy Dengan View Pegunungan & Perkotaan</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Gratis Akses WIFI</li>
                    <li><span class="text-[#FFD700] mr-2">●</span>Dekat Dengan Masjid,Gedung DBL Arena, Hotel Bintang 4,Kantin, Bank,ATM Center,KFC,Hokben, Starbuck,Exelso Dll</li>
                </ul>
                <div class="mt-auto pt-4 w-full">
                    <button @click="openModal = true" class="w-full bg-[#FFD700] hover:bg-yellow-500 text-white font-bold py-3 rounded-xl transition">Pesan Sekarang</button>
                </div>
            </div>
        </div>

    </div>

    <div x-show="openModal" x-transition.opacity class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50">
        @include('pages.layanan.form')
        <div class="mt-4 text-right">
            <button @click="openModal = false" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-lg transition">Tutup</button>
        </div>
    </div>

</div>
@endsection
