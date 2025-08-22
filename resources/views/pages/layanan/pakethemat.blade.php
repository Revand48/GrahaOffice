@extends('layouts.app')

@section('content')

<div class="bg-white text-gray-800 min-h-screen py-16 px-4 sm:px-6" x-data="{ openModal: false }">
    <div class="text-center mb-10">
        <h1 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
            <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Paket</span>
            <span class="text-gray-900"> Lengakap </span>
            <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">PT CV</span>
        </h1>
    </div>

    <div class="grid md:grid-cols-2 gap-10 place-items-center max-w-5xl mx-auto">
        <div class="relative w-[320px] h-[580px] bg-white/70 backdrop-blur-md rounded-2xl border border-yellow-300/70 shadow-lg hover:shadow-[0_0_30px_rgba(255,215,0,.45)] hover:scale-[1.03] transition-all duration-500 flex flex-col" x-data x-intersect="$el.classList.add('animate-fadeInLeft')">
            <div class="p-6 flex flex-col items-center space-y-4 flex-grow">
                <i class="fas fa-briefcase text-[#FFD700] text-5xl mt-5"></i>
                <h3 class="text-2xl font-bold text-gray-900">Paket Lengkap PT</h3>
                <div class="text-center">
                    <p class="text-3xl font-extrabold text-gray-900">Rp 11.000.000 <span class="text-base font-normal text-gray-600">/tahun</span></p>
                </div>
                <hr class="w-3/4 border-t border-yellow-200 my-2">
                <ul class="space-y-2 text-gray-700 text-sm w-full">
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Akta Perusahaan</li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>SK Menkumham</li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>NPWP & SKT</li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>NIB</li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>BNRI</li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Untuk Anda yang ingin badan usaha dengan struktur kepemilikan dan peraturan yang jelas, modal yang terpisah dengan harta pribadi, dan impresi yang lebih bonafid</li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><strong>Paket VIRTUAL OFFICE SILVER 1 Tahun</strong></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>(Harga Belum Termasuk PPN)</li>
                </ul>
                <div class="mt-auto pt-4 w-full">
                    <button @click="openModal = true" class="w-full bg-[#FFD700] hover:bg-yellow-500 text-white font-bold py-3 rounded-xl transition">Pesan Sekarang</button>
                </div>
            </div>
        </div>

        <div class="relative w-[320px] h-[580px] bg-white/70 rounded-2xl border border-yellow-200/70 shadow-lg hover:shadow-[0_0_30px_rgba(255,215,0,.35)] hover:scale-[1.03] transition-all duration-500 flex flex-col" x-data x-intersect="$el.classList.add('animate-fadeInRight')">
            <div class="p-6 flex flex-col items-center space-y-4 flex-grow">
                <i class="fas fa-building text-[#FFD700] text-5xl mt-5"></i>
                <h3 class="text-2xl font-bold text-gray-900">Paket Lengkap CV</h3>
                <div class="text-center">
                    <p class="text-3xl font-extrabold text-gray-900">Rp 7.500.000 <span class="text-base font-normal text-gray-600">/tahun</span></p>
                </div>
                <hr class="w-3/4 border-t border-yellow-200 my-2">
                <ul class="space-y-2 text-gray-700 text-sm w-full">
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Akta Perusahaan</li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>SK Menkumham</li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>NPWP & SKT</li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>NIB</li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>BNRI</li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>Untuk Anda yang ingin badan usaha dengan modal hemat, sistem pengambilan keputusan yang lebih simple dan pajak lebih rendah</li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span><strong>Paket VIRTUAL OFFICE SILVER 1 Tahun</strong></li>
                    <li class="flex items-start"><span class="text-[#FFD700] mr-2 mt-1 text-xs">●</span>(Harga Belum Termasuk PPN)</li>
                </ul>
                <div class="mt-auto pt-4 w-full">
                    <button @click="openModal = true" class="w-full bg-[#FFD700] hover:bg-yellow-500 text-white font-bold py-3 rounded-xl transition">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <div x-show="openModal" x-transition.opacity class="fixed inset-0 bg-black/50 backdrop-blur-sm flex flex-col items-center justify-center z-50 p-4">
        @include('pages.layanan.form')
        <div class="mt-4 text-right">
            <button @click="openModal = false" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-lg transition">Tutup</button>
        </div>
    </div>
</div>



<div class="bg-white min-h-screen py-16 px-4 sm:px-6 lg:px-8 text-gray-800">
    <div class="max-w-5xl mx-auto">

    <div class="text-center mb-8">
      <h2 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Persyaratan</span>
        <span class="text-gray-900"> Pendirian </span>
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">PT</span>
      </h2>
    </div>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg overflow-hidden shadow-sm">
                <thead class="bg-yellow-100 text-gray-800">
                    <tr>
                        <th class="px-4 py-3 text-left font-semibold">No</th>
                        <th class="px-4 py-3 text-left font-semibold">Persyaratan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @php
                        $persyaratanPT = [
                            'Scan KTP Pengurus Perusahaan dan Pemegang Saham',
                            'Scan NPWP Pengurus dan Pemegang Saham',
                            'Scan KK Pengurus dan Pemegang Saham',
                            'Pas Foto Direktur Background merah 3×4 (4 lembar)',
                            'Stempel Perusahaan',
                            'Pengurus PT minimal terdiri dari 1 Direktur dan 1 Komisaris',
                            'Pendiri PT minimal terdiri dari 2 Pemegang Saham (Pemegang Saham bisa sekaligus menjabat sebagai Direktur atau Komisaris)',
                            'Suami-Istri yang mendirikan PT bersama-sama dan belum memiliki perjanjian pra-nikah harus mengikutsertakan satu orang untuk menjadi pihak ketiga',
                            'Stempel Perusahaan menyusul setelah Nama Perusahaan sudah Final (Dicek dan dipesan)',
                            'Pendirian Perusahaan Menengah dan Besar diwajibkan untuk mendaftar ke BPJS Ketenagakerjaan. Pendaftaran BPJS dapat dibantu oleh Tim kami'
                        ];
                    @endphp

                    @foreach($persyaratanPT as $i => $item)
                        <tr class="hover:bg-yellow-50 transition">
                            <td class="px-4 py-3 font-medium">{{ $i+1 }}</td>
                            <td class="px-4 py-3">{{ $item }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    <div class="text-center mt-20 mb-8">
      <h2 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Persyaratan</span>
        <span class="text-gray-900"> Pendirian </span>
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">CV</span>
      </h2>
    </div>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg overflow-hidden shadow-sm">
                <thead class="bg-yellow-100 text-gray-800">
                    <tr>
                        <th class="px-4 py-3 text-left font-semibold">No</th>
                        <th class="px-4 py-3 text-left font-semibold">Persyaratan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @php
                        $persyaratanCV = [
                            'Fotokopi KTP Persero Aktif dan Persero Pasif',
                            'Fokokopi NPWP Persero Aktif dan Persero Pasif',
                            'Fotokopi KK Persero Aktif dan Persero Pasif',
                            'Pas Foto Persero Aktif background merah 4x3 (4 lembar)',
                            'Stempel Perusahaan',
                            'Pengurus CV minimal terdiri dari 1 Persero Aktif dan 1 Persero Pasif',
                            'Suami-Istri yang mendirikan CV bersama-sama dan belum memiliki perjanjian pra-nikah harus mengikutsertakan satu orang untuk menjadi pihak ketiga'
                        ];
                    @endphp

                    @foreach($persyaratanCV as $i => $item)
                        <tr class="hover:bg-yellow-50 transition">
                            <td class="px-4 py-3 font-medium">{{ $i+1 }}</td>
                            <td class="px-4 py-3">{{ $item }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
