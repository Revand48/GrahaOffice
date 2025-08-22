
<section
    id="location"
    class="py-16 bg-white"
    x-data="locationAnimation()"
    x-init="init()"
>
    <div class="container px-6 mx-auto max-w-7xl">

        <div
            class="max-w-3xl mx-auto text-center mb-14 transition-all duration-[1000ms] ease-out transform"
            :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-10'"
        >
            <h2 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
                <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Lokasi</span>
                <span class="text-gray-900"> & </span>
                <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Saran</span>
            </h2>
            <p class="max-w-xl mx-auto mt-4 text-base leading-7 text-gray-600 font-pj">
                Temukan lokasi kami dan berikan saran untuk membenahi layanan kami.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-10 md:grid-cols-3">
            <div
                class="md:col-span-2 bg-white border border-amber-50 rounded-lg shadow-md overflow-hidden hover:scale-[1.005] hover:shadow-xl hover:-translate-y-1 transition-all duration-500 ease-in-out relative min-h-[400px] transform"
                :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-16'"
                style="transition-delay: 150ms"
            >
                <div class="relative w-full overflow-hidden rounded-t-lg md:rounded-t-none md:rounded-l-lg h-80 md:h-full">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.296347439926!2d112.73207199999999!3d-7.320570999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e48893dffefd%3A0x774941139bb587ac!2sGraha%20Office!5e0!3m2!1sid!2sid!4v1753776480809!5m2!1sid!2sid"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-full">
                    </iframe>
                </div>
                <div class="absolute bottom-0 left-0 right-0 flex flex-col items-start justify-between gap-4 p-5 text-sm bg-white rounded-b-lg bg-opacity-90 backdrop-blur-sm md:rounded-b-none md:rounded-bl-lg md:flex-row md:items-end">
                    <div class="flex-1">
                        <p class="font-semibold text-gray-800">Graha Office Surabaya</p>
                        <p class="leading-tight text-gray-600">
                            Graha Pena Lantai 15<br>
                            Jl. Jenderal Ahmad Yani No. 88,<br>
                            Gayungan, Surabaya, Jawa Timur 60231
                        </p>
                        <a href="https://maps.app.goo.gl/vThiDYhDLRt7FssX9"
                           target="_blank"
                           class="inline-flex items-center mt-2 font-medium transition duration-300 text-amber-500 hover:text-amber-600 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 10-2.828-2.828l-8 8a2 2 0 102.828 2.828l8-8zM8 12a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                            Petunjuk Arah
                        </a>
                    </div>

                    <div class="flex flex-col items-end space-y-1">
                        <img
                            src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&margin=5&data=https://maps.app.goo.gl/pyAF77VRyCShkZ996"
                            alt="QR Code Lokasi Graha Office"
                            class="border rounded shadow-sm border-amber-100"
                        >
                        <p class="text-xs leading-tight text-right text-gray-500">
                            <strong>QR Code Maps</strong><br>
                        </p>
                    </div>
                </div>
            </div>

            <section
                class="w-full max-w-xl px-6 py-10 mx-auto bg-white border border-amber-50 rounded-lg shadow-md min-h-[400px] transition-all duration-[1000ms] ease-out transform"
                :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-16'"
                style="transition-delay: 300ms"
            >
                <form method="POST" action="{{ route('suggestion.send') }}" class="space-y-6">
                    @csrf
                    <div>
                        <label for="nama" class="block mb-2 font-semibold text-gray-700">Nama</label>
                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            placeholder="Masukkan nama Anda"
                            required
                            minlength="2"
                            maxlength="50"
                            value="{{ old('nama') }}"
                            class="w-full px-4 py-3 border border-black rounded-xl bg-white/80
                                   focus:outline-none focus:border-yellow-400
                                   focus:ring-0 focus:shadow-[0_0_12px_2px_rgba(250,204,21,0.5)]
                                   transition-all duration-300"
                        >
                        @error('nama')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="saran" class="block mb-2 font-semibold text-gray-700">Saran</label>
                        <textarea
                            id="saran"
                            name="saran"
                            rows="5"
                            placeholder="Masukkan saran Anda di sini…"
                            required
                            minlength="5"
                            maxlength="500"
                            class="w-full px-4 py-3 border border-black rounded-xl bg-white/80
                                   focus:outline-none focus:border-yellow-400
                                   focus:ring-0 focus:shadow-[0_0_12px_2px_rgba(250,204,21,0.5)]
                                   transition-all duration-300 resize-y"
                        >{{ old('saran') }}</textarea>
                        @error('saran')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        class="relative w-full flex items-center justify-center gap-2 px-6 py-3 font-semibold text-black transition-all duration-300 transform rounded-xl bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 hover:shadow-[0_0_16px_4px_rgba(250,204,21,0.4)] hover:scale-105"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        Kirim Saran
                    </button>

                    @if(session('sukses'))
                        <p id="msg" class="mt-4 font-medium text-center text-green-600">{{ session('sukses') }}</p>
                        <script>setTimeout(() => document.getElementById('msg')?.remove(), 5000)</script>
                    @elseif(session('gagal'))
                        <p id="msg" class="mt-4 font-medium text-center text-red-600">{{ session('gagal') }}</p>
                        <script>setTimeout(() => document.getElementById('msg')?.remove(), 5000)</script>
                    @endif
                </form>
            </section>
        </div>
    </div>

    <script>
        function locationAnimation() {
            return {
                show: false,
                init() {
                    const observer = new IntersectionObserver(([entry]) => {
                        if (entry.isIntersecting) {
                            this.show = true;
                            observer.disconnect();
                        }
                    }, { threshold: 0.5 });
                    observer.observe(document.getElementById('location'));
                }
            }
        }
    </script>
</section>
