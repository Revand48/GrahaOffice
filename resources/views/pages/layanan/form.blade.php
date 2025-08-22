<!-- Modal Form Order -->
<div
    x-data="{ open: true, loading: false }"
    x-show="open"
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opacity-0 scale-90 translate-y-10"
    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100 translate-y-0"
    x-transition:leave-end="opacity-0 scale-90 translate-y-10"
    class="fixed inset-0 z-50 flex items-center justify-center backdrop-blur-md bg-black/30 px-4 py-6"
>
    <div class="relative w-full max-w-xl bg-white/80 backdrop-blur-lg border border-yellow-100 shadow-xl rounded-3xl p-6 text-gray-900">

        <!-- Tombol Close-->
        <button
            @click="openModal = false"
            class="absolute top-4 right-4 text-gray-400 hover:text-red-500 text-2xl font-bold focus:outline-none transition"
            aria-label="Tutup Form"
        >
            &times;
        </button>

        <!-- Judul -->
        <h2 class="text-2xl md:text-3xl font-extrabold text-center mb-6 text-gray-800">
            Form Pemesanan Ruang Kantor
        </h2>

        <!-- Notifikasi Sukses -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-300 text-green-800 text-sm rounded-lg px-4 py-3 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form -->
        <form
            action="{{ route('order.send') }}"
            method="POST"
            @submit="loading = true"
            class="space-y-4"
        >
            @csrf

            <!-- Nama -->
            <div>
                <label class="block text-sm font-semibold mb-1">Nama Lengkap</label>
                <input name="nama" value="{{ old('nama') }}" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:outline-none text-sm" required>
                @error('nama') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- WhatsApp -->
            <div>
                <label class="block text-sm font-semibold mb-1">Nomor WhatsApp</label>
                <input name="whatsapp" value="{{ old('whatsapp') }}" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:outline-none text-sm" required>
                @error('whatsapp') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-semibold mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:outline-none text-sm" required>
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Layanan -->
            <div>
                <label class="block text-sm font-semibold mb-1">Layanan</label>
                <select name="layanan" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:outline-none text-sm" required>
                    <option value="">-- Pilih Layanan --</option>
                    <option>Virtual Office</option>
                    <option>Private Office</option>
                    <option>Shared Office</option>
                    <option>Ruang Meeting & Training</option>
                    <option>Pembuatan PT & CV</option>
                    <option>Paket Lengkap</option>
                </select>
                @error('layanan') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Persetujuan -->
            <div class="flex items-start gap-2">
                <input type="checkbox" name="persetujuan" class="mt-1 rounded border-gray-300 text-yellow-500 focus:ring-yellow-400" required>
                <span class="text-sm">Saya menyetujui syarat dan ketentuan dari <strong>Graha Office</strong></span>
                @error('persetujuan') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            <!-- Tombol Submit -->
            <div class="text-center mt-6">
                <button type="submit"
                    class="w-full flex justify-center items-center gap-2 bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-3 rounded-lg shadow-md transition disabled:opacity-60 disabled:cursor-not-allowed"
                    :disabled="loading"
                >
                    <template x-if="loading">
                        <svg class="animate-spin h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                        </svg>
                    </template>
                    <span x-text="loading ? 'Mengirim...' : 'Kirim'">Kirim</span>
                </button>
            </div>
        </form>
    </div>
</div>
