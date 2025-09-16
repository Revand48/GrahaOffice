@extends('layouts.admin')

@section('title', 'Tambah Lowongan')

@section('content')
<div class="max-w-3xl mx-auto">

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Tambah Lowongan</h1>
        <a href="{{ route('job.index') }}" class="text-sm text-gray-600">Kembali ke daftar</a>
    </div>

    @if($errors->any())
        <div class="mb-4 p-3 rounded bg-red-100 text-red-800">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('job.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf

        <div>
            <label class="block font-medium mb-1">Posisi <span class="text-red-500">*</span></label>
            <input type="text" name="posisi" value="{{ old('posisi') }}" class="w-full border p-2 rounded" required>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium mb-1">Jumlah Lowongan <span class="text-red-500">*</span></label>
                <input type="number" name="jumlah" value="{{ old('jumlah', 1) }}" min="1" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label class="block font-medium mb-1">Tipe Pekerjaan <span class="text-red-500">*</span></label>
                <select name="tipe" class="w-full border p-2 rounded" required>
                    <option value="">Pilih tipe</option>
                    <option value="Fulltime" {{ old('tipe') == 'Fulltime' ? 'selected' : '' }}>Fulltime</option>
                    <option value="Internship" {{ old('tipe') == 'Internship' ? 'selected' : '' }}>Internship</option>
                </select>
            </div>
        </div>

        <div>
            <label class="block font-medium mb-1">Lokasi <span class="text-red-500">*</span></label>
            <input type="text" name="lokasi" value="{{ old('lokasi') }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium mb-1">Detail / Syarat (masukkan tiap syarat di baris baru)</label>
            <textarea name="detail" rows="6" class="w-full border p-2 rounded">{{ old('detail') }}</textarea>
            <p class="text-sm text-gray-500 mt-1">Detail di daftar akan dibatasi 80 karakter untuk tampilan tabel.</p>
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            <a href="{{ route('job.index') }}" class="bg-gray-200 px-4 py-2 rounded">Batal</a>
        </div>
    </form>
</div>
@endsection
