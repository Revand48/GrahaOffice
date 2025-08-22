@extends('layouts.app')

@section('content')
<div
    x-data="{ open: true, loading: false }"
    x-show="open"
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opacity-0 scale-90 translate-y-10"
    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100 translate-y-0"
    x-transition:leave-end="opacity-0 scale-90 translate-y-10"
    class="fixed inset-0 z-50 flex items-center justify-center px-4 py-6 overflow-y-auto backdrop-blur-md bg-black/30"
>
    <div class="relative w-full max-w-xl overflow-hidden bg-white border border-yellow-100 shadow-xl rounded-3xl">

        <div class="max-h-[85vh] overflow-y-auto bg-white">

            <div class="px-6 pt-6 pb-4">
                <button @click="open = false" class="absolute z-10 text-2xl font-bold text-gray-400 top-4 right-4 hover:text-red-500">&times;</button>

                <h2 class="mb-6 text-2xl font-extrabold text-center text-gray-800 md:text-3xl">Form Lamaran Kerja</h2>

                @if(session('success'))
                    <div class="px-4 py-3 mb-6 text-sm text-green-800 bg-green-100 border border-green-300 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

            <form action="{{ route('job.submit') }}" method="POST" @submit="loading = true" class="px-6 pb-6 space-y-5" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-semibold">Nama Lengkap</label>
                        <input name="nama" value="{{ old('nama') }}" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
                        @error('nama') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-semibold">Tempat Lahir</label>
                        <input name="tempat_lahir" value="{{ old('tempat_lahir') }}" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
                        @error('tempat_lahir') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-semibold">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
                        @error('tanggal_lahir') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-semibold">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
                            <option value="">-- Pilih --</option>
                            <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-semibold">Alamat</label>
                    <textarea name="alamat" rows="2" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>{{ old('alamat') }}</textarea>
                    @error('alamat') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-semibold">WhatsApp</label>
                        <input name="whatsapp" value="{{ old('whatsapp') }}" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
                        @error('whatsapp') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-semibold">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
                        @error('email') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-semibold">Nama Institusi</label>
                        <input name="institusi" value="{{ old('institusi') }}" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
                        @error('institusi') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-semibold">Jurusan</label>
                        <input name="jurusan" value="{{ old('jurusan') }}" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
                        @error('jurusan') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-semibold">Keahlian</label>
                    <textarea name="keahlian" rows="3" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" placeholder="Contoh: Canva, SEO, Microsoft Office, Kerja Tim" required>{{ old('keahlian') }}</textarea>
                    @error('keahlian') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block mb-1 text-sm font-semibold">Posisi yang Dilamar</label>
                    <input name="posisi" value="{{ $position ?? old('posisi') }}" class="w-full px-4 py-2 text-sm text-gray-700 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-yellow-400 focus:outline-none" readonly required>
                </div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label class="block mb-1 text-sm font-semibold">Upload CV</label>
                        <input type="file" name="cv" accept=".pdf,.doc,.docx" class="w-full file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-yellow-400 file:text-black hover:file:bg-yellow-500" required>
                        @error('cv') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-semibold">Upload Pas Foto</label>
                        <input type="file" name="foto" accept=".jpg,.jpeg,.png" class="w-full file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-yellow-400 file:text-black hover:file:bg-yellow-500" required>
                        @error('foto') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="mt-4 space-y-2">
                    <p class="text-sm font-semibold text-gray-700">Pernyataan:</p>
                    <div class="flex items-start gap-2">
                        <input type="checkbox" name="declaration[]" value="data_benar" class="mt-1 text-yellow-500 border-gray-300 rounded focus:ring-yellow-400" required>
                        <span class="text-sm">Saya menyatakan bahwa data yang saya isi adalah benar dan dapat dipertanggungjawabkan.</span>
                    </div>
                    <div class="flex items-start gap-2">
                        <input type="checkbox" name="declaration[]" value="bersedia_proses" class="mt-1 text-yellow-500 border-gray-300 rounded focus:ring-yellow-400" required>
                        <span class="text-sm">Saya bersedia mengikuti seluruh proses rekrutmen.</span>
                    </div>
                    <div class="flex items-start gap-2">
                        <input type="checkbox" name="declaration[]" value="sanksi_palsu" class="mt-1 text-yellow-500 border-gray-300 rounded focus:ring-yellow-400" required>
                        <span class="text-sm">Jika terbukti data tidak benar, saya siap menerima sanksi sesuai ketentuan perusahaan.</span>
                    </div>
                    @error('declaration') <p class="text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                <div class="px-6 py-4 bg-white border-t border-yellow-100">
                    <button type="submit"
                        class="flex items-center justify-center w-full gap-2 px-6 py-3 font-semibold text-black transition bg-yellow-400 rounded-lg shadow-md hover:bg-yellow-500 disabled:opacity-60 disabled:cursor-not-allowed"
                        :disabled="loading">
                        <template x-if="loading">
                            <svg class="w-5 h-5 text-black animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                            </svg>
                        </template>
                        <span x-text="loading ? 'Mengirim...' : 'Kirim Lamaran'">Kirim Lamaran</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
