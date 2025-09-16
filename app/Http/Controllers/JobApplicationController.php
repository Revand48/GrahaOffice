<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    public function showForm(Request $request)
    {
        $position = $request->query('position');
        $type = $request->query('type');
        $location = $request->query('location');

        return view('pages.formjob', compact('position', 'type', 'location'));
    }

    public function submitForm(Request $request)
    {
        // Validasi
        $messages = [
            'nama.required' => 'Nama Lengkap harus diisi.',
            'tempat_lahir.required' => 'Tempat Lahir harus diisi.',
            'tanggal_lahir.required' => 'Tanggal Lahir harus diisi.',
            'jenis_kelamin.required' => 'Jenis Kelamin harus dipilih.',
            'alamat.required' => 'Alamat harus diisi.',
            'whatsapp.required' => 'Nomor WhatsApp harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'institusi.required' => 'Nama Institusi harus diisi.',
            'jurusan.required' => 'Jurusan harus diisi.',
            'keahlian.required' => 'Keahlian harus diisi.',
            'posisi.required' => 'Posisi yang Dilamar harus diisi.',
            'foto.required' => 'Pas Foto harus diunggah.',
            'foto.image' => 'File Pas Foto harus berupa gambar.',
            'foto.mimes' => 'Pas Foto harus berformat: jpg, png, jpeg.',
            'foto.max' => 'Ukuran Pas Foto tidak boleh lebih dari 2MB.',
            'cv.required' => 'CV harus diunggah.',
            'cv.mimes' => 'CV harus berformat: pdf, doc, docx.',
            'cv.max' => 'Ukuran CV tidak boleh lebih dari 5MB.',
            'declaration.required' => 'Anda harus menyetujui semua pernyataan.',
            'declaration.min' => 'Anda harus menyetujui semua pernyataan.',
        ];

        $request->validate([
            'nama' => 'required|string|max:100',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'whatsapp' => 'required|string|max:15',
            'email' => 'required|email',
            'institusi' => 'required|string',
            'jurusan' => 'required|string',

            'posisi' => 'required|string',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'cv' => 'required|mimes:pdf,doc,docx|max:5120',
            'declaration' => 'required|array|min:3',
        ], $messages);

        // Simpan file
        $fotoPath = $request->file('foto')->store('lamaran/foto', 'public');
        $cvPath = $request->file('cv')->store('lamaran/cv', 'public');

        // Ambil semua data
        $data = $request->all();

        // Buat tabel HTML
        $html = '
        <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif; font-size: 14px;">
            <thead>
                <tr style="background-color: #f9f9f9;">
                    <th colspan="2" style="text-align: left;">Data Lamaran Kerja</th>
                </tr>
            </thead>
            <tbody>
                <tr><td><strong>Nama Lengkap</strong></td><td>' . e($data['nama']) . '</td></tr>
                <tr><td><strong>Tempat Lahir</strong></td><td>' . e($data['tempat_lahir']) . '</td></tr>
                <tr><td><strong>Tanggal Lahir</strong></td><td>' . e($data['tanggal_lahir']) . '</td></tr>
                <tr><td><strong>Jenis Kelamin</strong></td><td>' . e($data['jenis_kelamin']) . '</td></tr>
                <tr><td><strong>Alamat</strong></td><td>' . nl2br(e($data['alamat'])) . '</td></tr>
                <tr><td><strong>WhatsApp</strong></td><td>' . e($data['whatsapp']) . '</td></tr>
                <tr><td><strong>Email</strong></td><td>' . e($data['email']) . '</td></tr>
                <tr><td><strong>Institusi</strong></td><td>' . e($data['institusi']) . '</td></tr>
                <tr><td><strong>Jurusan</strong></td><td>' . e($data['jurusan']) . '</td></tr>
                <tr><td><strong>Keahlian</strong></td><td>' . nl2br(e($data['keahlian'])) . '</td></tr>
                <tr><td><strong>Posisi yang Dilamar</strong></td><td>' . e($data['posisi']) . '</td></tr>
            </tbody>
        </table>
        ';

        // Kirim email
        Mail::send([], [], function ($message) use ($html, $data, $fotoPath, $cvPath) {
            $message->to('artrevand@gmail.com') // Ganti dengan email tujuan
                    ->subject("Lamaran Kerja: {$data['posisi']} - {$data['nama']}")
                    ->from($data['email'])
                    ->replyTo($data['email'])
                    ->attach(Storage::disk('public')->path($fotoPath))
                    ->attach(Storage::disk('public')->path($cvPath))
                    ->html($html);
        });

        // Redirect dengan pesan sukses
        return redirect()->route('job')->with('success', 'Lamaran berhasil dikirim! Kami akan menghubungi Anda melalui email atau WhatsApp.');
    }
}
