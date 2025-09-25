@extends('layouts.app')
@section('content')
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <div x-data="{
        open: false,
        loading: false,
        position: '',
        type: '',
        location: '',
        openDetail: null,
    
        resetModal() {
            this.loading = false;
        }
    }" class="w-full">

        <section class="relative py-16 bg-white isolate">
            <div class="absolute inset-0 overflow-hidden dark:bg-slate-800 -z-10">
                <div class="absolute top-[10%] left-[8%] h-20 w-20 rotate-[-12deg] rounded-md bg-yellow-300/70 shadow-lg">
                </div>
                <div
                    class="absolute bottom-[15%] right-[12%] h-16 w-16 rotate-[10deg] rounded-md bg-yellow-200/60 shadow-md">
                </div>
                <div class="absolute top-[40%] right-[20%] h-12 w-12 rotate-[5deg] rounded-md bg-yellow-400/50 shadow-sm">
                </div>
                <div class="absolute top-[-4rem] left-[-2rem] h-48 w-48 rounded-full bg-yellow-400/20 blur-3xl"></div>
                <div class="absolute bottom-[-2rem] right-[-4rem] h-40 w-40 rounded-full bg-yellow-300/20 blur-3xl"></div>
                <div class="absolute left-0 w-full h-px top-1/2 bg-yellow-200/30"></div>
                <div class="absolute left-0 w-full h-px top-1/3 bg-yellow-100/20"></div>
            </div>

            <div class="relative max-w-4xl px-4 mx-auto text-center">
                <h1 class="text-5xl font-bold tracking-tight sm:text-6xl md:text-7xl">
                    <span
                        class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">
                        Jobs
                    </span>
                </h1>
            </div>
        </section>

        <div class="min-h-screen px-4 py-10 mt-1 dark:bg-slate-800 bg-gray-50 md:px-16">
            <div
                class="relative p-1 mb-10 transition-all duration-300 ease-out bg-white rounded-lg shadow-sm dark:bg-slate-700 dark:text-slate-200 hover:shadow-md focus-within:shadow-lg">
                <div class="flex items-center gap-3 px-4 py-2">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-400 dark:bg-slate-700" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path
                            d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.386-1.414 1.415-4.387-4.387zM8 14A6 6 0 108 2a6 6 0 000 12z" />
                    </svg>
                    <input type="text" id="searchProfession" placeholder="Posisi"
                        class="flex-1 min-w-0 text-gray-700 placeholder-gray-400 transition-colors duration-300 bg-transparent border-b-2 border-transparent focus:outline-none focus:ring-0 focus:border-orange-400" />
                    <div class="w-px h-6 bg-gray-200"></div>
                    <select id="searchType"
                        class="text-gray-700 transition-colors duration-300 bg-transparent border-b-2 border-transparent cursor-pointer dark:text-slate-400 focus:outline-none focus:ring-0 focus:border-orange-400">
                        <option value="">Tipe Pekerjaan</option>
                        <option value="internship">Internship</option>
                        <option value="full time">Full Time</option>
                    </select>
                    <button onclick="filterJobs()"
                        class="px-4 py-2 text-white bg-orange-400 rounded shadow hover:bg-orange-500">Cari</button>
                    <button onclick="resetJobs()"
                        class="px-4 py-2 text-orange-500 border border-orange-400 rounded shadow hover:bg-orange-50">Tampilkan
                        Semua</button>
                </div>
            </div>
            <div id="jobList" class="space-y-8">

                {{-- Card 1: Digital Marketing --}}
                <div class="p-6 bg-white rounded-lg shadow-md dark:bg-slate-400 dark:text-slate-200"
                    data-profession="digital marketing" data-location="graha pena surabaya" data-type="internship">
                    <div class="flex items-center gap-4">
                        <div class="p-3 bg-blue-100 rounded-full">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-xl font-bold text-gray-800 dark:text-slate-900">Digital Marketing</h2>
                            <p class="text-sm text-gray-500">4 Posisi Tersedia</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 mt-4 text-sm font-medium text-gray-700 md:grid-cols-4">
                        <div>
                            <p class="text-gray-400 dark:text-slate-500">Posisi</p>
                            <p class="dark:text-slate-900">Digital Marketing</p>
                        </div>
                        <div>
                            <p class="text-gray-400 dark:text-slate-500">Tipe</p>
                            <p class="dark:text-slate-900">Internship</p>
                        </div>
                        <div>
                            <p class="text-gray-400 dark:text-slate-500">Lokasi</p>
                            <p class="dark:text-slate-900">Graha Pena Surabaya</p>
                        </div>
                        <div class="flex gap-2 mt-4 md:mt-0">
                            {{-- BUKA MODAL --}}
                            <button
                                @click="
                open = true;
                position = 'Digital Marketing';
                type = 'internship';
                location = 'Graha Pena Surabaya';
                $nextTick(() => { window.scrollTo({top:0, behavior:'smooth'}); });
              "
                                class="px-4 py-2 text-white bg-orange-400 rounded shadow hover:bg-orange-500">
                                Daftar
                            </button>

                            <button @click="openDetail === 0 ? openDetail = null : openDetail = 0"
                                class="px-4 py-2 text-orange-500 border border-orange-400 rounded shadow hover:bg-orange-50">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                    <div x-show="openDetail === 0" x-collapse
                        class="p-4 mt-6 border border-gray-200 rounded dark:bg-slate-300 bg-gray-50" x-cloak>
                        <p class="mb-2 font-semibold text-gray-700 dark:text-slate-900">Syarat:</p>
                        <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside dark:text-slate-900">
                            <li>Mahasiswa atau siswa SMK aktif</li>
                            <li>Memahami media sosial (Instagram, TikTok dll)</li>
                            <li>Kreatif dan suka membuat konten</li>
                            <li>Dapat bekerja tim maupun individu</li>
                            <li>Menguasai dasar desain (Canva/Corel/PS)</li>
                            <li>Disiplin dan tepat waktu</li>
                            <li>Penempatan di Surabaya</li>
                        </ul>
                    </div>
                </div>

                {{-- Card 2: Cleaning Service --}}
                <div class="p-6 bg-white rounded-lg shadow-md dark:bg-slate-400" data-profession="cleaning service"
                    data-location="graha pena surabaya" data-type="full time">
                    <div class="flex items-center gap-4">
                        <div class="p-3 bg-blue-100 rounded-full">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-xl font-bold text-gray-800 dark:text-slate-900">Cleaning Service</h2>
                            <p class="text-sm text-gray-500">1 Posisi Tersedia</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 mt-4 text-sm font-medium text-gray-700 md:grid-cols-4">
                        <div>
                            <p class="text-gray-400 dark:text-slate-500">Posisi</p>
                            <p class="dark:text-slate-900">Cleaning Service</p>
                        </div>
                        <div>
                            <p class="text-gray-400 dark:text-slate-500">Tipe</p>
                            <p class="dark:text-slate-900">Full Time</p>
                        </div>
                        <div>
                            <p class="text-gray-400 dark:text-slate-500">Lokasi</p>
                            <p class="dark:text-slate-900">Graha Pena Surabaya</p>
                        </div>
                        <div class="flex gap-2 mt-4 md:mt-0">
                            {{-- BUKA MODAL --}}
                            <button
                                @click="
                open = true;
                position = 'Cleaning Service';
                type = 'full time';
                location = 'Graha Pena Surabaya';
                $nextTick(() => { window.scrollTo({top:0, behavior:'smooth'}); });
              "
                                class="px-4 py-2 text-white bg-orange-400 rounded shadow hover:bg-orange-500">
                                Daftar
                            </button>

                            <button @click="openDetail === 1 ? openDetail = null : openDetail = 1"
                                class="px-4 py-2 text-orange-500 border border-orange-400 rounded shadow hover:bg-orange-50">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                    <div x-show="openDetail === 1" x-collapse
                        class="p-4 mt-6 border border-gray-200 rounded dark:bg-slate-300 bg-gray-50" x-cloak>
                        <p class="mb-2 font-semibold text-gray-700 dark:text-slate-900">Syarat:</p>
                        <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside dark:text-slate-900">
                            <li>Pria/wanita usia 20–40 tahun</li>
                            <li>Pengalaman min. 1 tahun lebih diutamakan</li>
                            <li>Rajin, jujur, dan bertanggung jawab</li>
                            <li>Mampu bekerja secara mandiri maupun tim</li>
                            <li>Sehat jasmani dan rohani</li>
                            <li>Menguasai Teknik Pembersihan yang Higienis</li>
                            <li>Penempatan di Surabaya</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 scale-90 translate-y-10"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-90 translate-y-10"
            class="fixed inset-0 z-50 flex items-center justify-center px-4 py-6 overflow-y-auto backdrop-blur-md bg-black/30"
            @keydown.escape.window="open=false; resetModal();" @click.self="open=false; resetModal();">
            <div class="relative w-full max-w-xl overflow-hidden bg-white border border-yellow-100 shadow-xl rounded-3xl">
                <div
                    class="max-h-[85vh] overflow-y-auto bg-white dark:bg-slate-900 text-gray-900 dark:text-slate-100 modal-body">
                    <div class="relative px-6 pt-6 pb-4">
                        <button @click="open=false; resetModal();"
                            class="absolute z-10 text-2xl font-bold text-gray-400 hover:text-red-500 top-4 right-4 dark:text-slate-400"
                            aria-label="Tutup modal">&times;</button>

                        <h2 class="mb-6 text-2xl font-extrabold text-center text-gray-800 md:text-3xl dark:text-slate-100">
                            Form Lamaran Kerja
                        </h2>

                        @if (session('success'))
                            <div
                                class="px-4 py-3 mb-6 text-sm border rounded-lg text-emerald-800 bg-emerald-100 border-emerald-300 dark:text-emerald-200 dark:bg-emerald-900/40 dark:border-emerald-700">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>

                    <form action="{{ route('job.submit') }}" method="POST" @submit="loading = true"
                        class="px-6 pb-6 space-y-5" enctype="multipart/form-data">
                        @csrf

                        {{-- ROW 1 --}}
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div>
                                <label class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">Nama
                                    Lengkap</label>
                                <input name="nama" value="{{ old('nama') }}"
                                    class="w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-400 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 dark:bg-slate-800 dark:text-slate-100 dark:placeholder-slate-400 dark:border-slate-600"
                                    required>
                                @error('nama')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">Tempat
                                    Lahir</label>
                                <input name="tempat_lahir" value="{{ old('tempat_lahir') }}"
                                    class="w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-400 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 dark:bg-slate-800 dark:text-slate-100 dark:placeholder-slate-400 dark:border-slate-600"
                                    required>
                                @error('tempat_lahir')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">Tanggal
                                    Lahir</label>
                                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                    class="w-full px-4 py-2 text-sm border rounded-lg bg-white text-gray-900
                           border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400
                           dark:bg-slate-800 dark:text-slate-100 dark:border-slate-600 [color-scheme:light] dark:[color-scheme:dark]"
                                    required>
                                @error('tanggal_lahir')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">Jenis
                                    Kelamin</label>
                                <select name="jenis_kelamin"
                                    class="w-full px-4 py-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 dark:bg-slate-800 dark:text-slate-100 dark:border-slate-600"
                                    required>
                                    <option value="" class="dark:bg-slate-800">-- Pilih --</option>
                                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}
                                        class="dark:bg-slate-800">Laki-laki</option>
                                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}
                                        class="dark:bg-slate-800">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- ALAMAT --}}
                        <div>
                            <label
                                class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">Alamat</label>
                            <textarea name="alamat" rows="2"
                                class="w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-400 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 dark:bg-slate-800 dark:text-slate-100 dark:placeholder-slate-400 dark:border-slate-600"
                                required>{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- ROW 2 --}}
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div>
                                <label
                                    class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">WhatsApp</label>
                                <input name="whatsapp" value="{{ old('whatsapp') }}"
                                    class="w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-400 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 dark:bg-slate-800 dark:text-slate-100 dark:placeholder-slate-400 dark:border-slate-600"
                                    required>
                                @error('whatsapp')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label
                                    class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-400 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 dark:bg-slate-800 dark:text-slate-100 dark:placeholder-slate-400 dark:border-slate-600"
                                    required>
                                @error('email')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- ROW 3 --}}
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div>
                                <label class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">Nama
                                    Institusi</label>
                                <input name="institusi" value="{{ old('institusi') }}"
                                    class="w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-400 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 dark:bg-slate-800 dark:text-slate-100 dark:placeholder-slate-400 dark:border-slate-600"
                                    required>
                                @error('institusi')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label
                                    class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">Jurusan</label>
                                <input name="jurusan" value="{{ old('jurusan') }}"
                                    class="w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-400 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 dark:bg-slate-800 dark:text-slate-100 dark:placeholder-slate-400 dark:border-slate-600"
                                    required>
                                @error('jurusan')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- KEAHLIAN --}}
                        <div>
                            <label
                                class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">Keahlian</label>
                            <textarea name="keahlian" rows="3" placeholder="Contoh: Canva, SEO, Microsoft Office, Kerja Tim"
                                class="w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-400 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 dark:bg-slate-800 dark:text-slate-100 dark:placeholder-slate-400 dark:border-slate-600"
                                required>{{ old('keahlian') }}</textarea>
                            @error('keahlian')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- POSISI --}}
                        <div>
                            <label class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">Posisi yang
                                Dilamar</label>
                            <input name="posisi" x-model="position" readonly
                                class="w-full px-4 py-2 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 dark:bg-slate-700 dark:text-slate-100 dark:border-slate-600">
                        </div>

                        {{-- Hidden --}}
                        <input type="hidden" name="type" x-model="type">
                        <input type="hidden" name="location" x-model="location">

                        {{-- FILES --}}
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div>
                                <label class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">Upload
                                    CV</label>
                                <input type="file" name="cv" accept=".pdf,.doc,.docx"
                                    class="w-full text-gray-900 bg-white border border-gray-300 rounded-lg file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-yellow-400 file:text-black hover:file:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 dark:bg-slate-800 dark:text-slate-100 dark:border-slate-600 dark:file:text-black"
                                    required>
                                @error('cv')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block mb-1 text-sm font-semibold text-gray-800 dark:text-slate-100">Upload
                                    Pas Foto</label>
                                <input type="file" name="foto" accept=".jpg,.jpeg,.png"
                                    class="w-full text-gray-900 bg-white border border-gray-300 rounded-lg file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-yellow-400 file:text-black hover:file:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 dark:bg-slate-800 dark:text-slate-100 dark:border-slate-600 dark:file:text-black"
                                    required>
                                @error('foto')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- PERNYATAAN --}}
                        <div class="mt-4 space-y-2">
                            <p class="text-sm font-semibold text-gray-700 dark:text-slate-100">Pernyataan:</p>
                            <div class="flex items-start gap-2">
                                <input type="checkbox" name="declaration[]" value="data_benar"
                                    class="mt-1 text-yellow-500 border border-gray-300 rounded focus:ring-yellow-400 dark:border-slate-600 dark:bg-slate-800">
                                <span class="text-sm text-gray-700 dark:text-slate-200">
                                    Saya menyatakan bahwa data yang saya isi adalah benar dan dapat dipertanggungjawabkan.
                                </span>
                            </div>
                            <div class="flex items-start gap-2">
                                <input type="checkbox" name="declaration[]" value="bersedia_proses"
                                    class="mt-1 text-yellow-500 border border-gray-300 rounded focus:ring-yellow-400 dark:border-slate-600 dark:bg-slate-800">
                                <span class="text-sm text-gray-700 dark:text-slate-200">Saya bersedia mengikuti seluruh
                                    proses rekrutmen.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <input type="checkbox" name="declaration[]" value="sanksi_palsu"
                                    class="mt-1 text-yellow-500 border border-gray-300 rounded focus:ring-yellow-400 dark:border-slate-600 dark:bg-slate-800">
                                <span class="text-sm text-gray-700 dark:text-slate-200">
                                    Jika terbukti data tidak benar, saya siap menerima sanksi sesuai ketentuan perusahaan.
                                </span>
                            </div>
                            @error('declaration')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- FOOTER --}}
                        <div class="px-6 py-4 bg-white border-t border-yellow-100 dark:bg-slate-900 dark:border-slate-700">
                            <button type="submit"
                                class="flex items-center justify-center w-full gap-2 px-6 py-3 font-semibold text-black bg-yellow-400 rounded-lg shadow-md hover:bg-yellow-500 disabled:opacity-60 disabled:cursor-not-allowed"
                                :disabled="loading">
                                <template x-if="loading">
                                    <svg class="w-5 h-5 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                                    </svg>
                                </template>
                                <span x-text="loading ? 'Mengirim...' : 'Kirim Lamaran'">Kirim Lamaran</span>
                            </button>
                        </div>
                    </form>
                </div>
                <style>
                    /* Scrollbar hanya untuk konten modal */
                    .modal-body::-webkit-scrollbar {
                        width: 10px;
                    }

                    .modal-body::-webkit-scrollbar-track {
                        background: rgba(0, 0, 0, 0.04);
                    }

                    .modal-body::-webkit-scrollbar-thumb {
                        background: rgba(0, 0, 0, 0.18);
                        border-radius: 9999px;
                    }

                    .dark .modal-body::-webkit-scrollbar-track {
                        background: rgba(148, 163, 184, 0.15);
                    }

                    /* slate-400/15 */
                    .dark .modal-body::-webkit-scrollbar-thumb {
                        background: rgba(148, 163, 184, 0.35);
                    }

                    /* slate-400/35 */
                </style>

            </div>
        </div>

    </div>


    <script>
        function filterJobs() {
            const prof = (document.getElementById('searchProfession').value || '').toLowerCase();
            const type = (document.getElementById('searchType').value || '').toLowerCase();
            document.querySelectorAll('#jobList > div').forEach(job => {
                const p = (job.dataset.profession || '').toLowerCase();
                const t = (job.dataset.type || '').toLowerCase();
                const show = (!prof || p.includes(prof)) && (!type || t === type);
                job.style.display = show ? 'block' : 'none';
            });
        }

        function resetJobs() {
            document.getElementById('searchProfession').value = '';
            document.getElementById('searchType').value = '';
            filterJobs();
        }
    </script>
@endsection
