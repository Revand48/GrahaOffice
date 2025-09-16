
@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')
<div class="max-w-3xl mx-auto">

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Edit Berita</h1>
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

    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data"
          x-data="{ preview: @json($berita->gambar) }" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium mb-1">Judul <span class="text-red-500">*</span></label>
            <input type="text" name="title" value="{{ old('title', $berita->title) }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium mb-1">Tanggal <span class="text-red-500">*</span></label>
            <input type="date" name="tanggal" value="{{ old('tanggal', \Carbon\Carbon::parse($berita->tanggal)->format('Y-m-d')) }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium mb-1">Sumber <span class="text-red-500">*</span></label>
            <input type="text" name="sumber" value="{{ old('sumber', $berita->sumber) }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium mb-1">Gambar (biarkan kosong untuk mempertahankan gambar lama)</label>
            <input type="file" name="gambar" accept="image/*" @change="preview = URL.createObjectURL($event.target.files[0])" class="w-full">
            <div class="mt-3">
                <template x-if="preview">
                    <img :src="preview" class="w-full h-48 object-cover rounded">
                </template>
                <template x-if="!preview">
                    <div class="w-full h-48 bg-gray-100 flex items-center justify-center text-gray-400 rounded">Tidak ada gambar</div>
                </template>
            </div>
        </div>

        <div>
            <label class="block font-medium mb-1">Deskripsi <span class="text-red-500">*</span></label>
            <textarea name="deskripsi" rows="6" class="w-full border p-2 rounded" required>{{ old('deskripsi', $berita->deskripsi) }}</textarea>
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
            <a href="{{ route('berita.index') }}" class="bg-gray-200 px-4 py-2 rounded">Batal</a>
        </div>
    </form>
</div>
@endsection
