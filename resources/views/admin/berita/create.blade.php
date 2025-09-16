@extends('layouts.admin')

@section('title', 'Tambah Berita')

@section('content')
<div class="max-w-3xl mx-auto">

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Tambah Berita</h1>
        <a href="{{ route('berita.index') }}" class="text-sm text-gray-600">Kembali ke daftar</a>
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

    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data" x-data="{ preview: null }" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf

        <div>
            <label class="block font-medium mb-1">Judul <span class="text-red-500">*</span></label>
            <input type="text" name="title" value="{{ old('title') }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium mb-1">Tanggal <span class="text-red-500">*</span></label>
            <input type="date" name="tanggal" value="{{ old('tanggal') }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium mb-1">Sumber <span class="text-red-500">*</span></label>
            <input type="text" name="sumber" value="{{ old('sumber') }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium mb-1">Gambar (opsional)</label>
            <input type="file" name="gambar" accept="image/*" @change="preview = URL.createObjectURL($event.target.files[0])" class="w-full">
            <template x-if="preview">
                <img :src="preview" class="mt-3 w-full h-48 object-cover rounded">
            </template>
        </div>

        <div>
            <label class="block font-medium mb-1">Deskripsi <span class="text-red-500">*</span></label>
            <textarea name="deskripsi" rows="6" class="w-full border p-2 rounded" required>{{ old('deskripsi') }}</textarea>
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            <a href="{{ route('berita.index') }}" class="bg-gray-200 px-4 py-2 rounded">Batal</a>
        </div>
    </form>
</div>
@endsection
