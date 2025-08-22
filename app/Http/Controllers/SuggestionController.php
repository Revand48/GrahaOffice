<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class SuggestionController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'saran' => 'required|min:5|max:500'
        ]);

        try {
            // Coba kirim email
            Mail::raw($request->saran, function ($message) {
                $message->to('artrevand@gmail.com')
                        ->subject('Saran untuk website GrahaOffice nih');
            });

            // Jika berhasil
            return back()->with('sukses', 'Saran berhasil terkirim!');

        } catch (Exception $e) {
            // Jika gagal
            return back()
                   ->withInput()              // agar textarea tidak kosong
                   ->with('gagal', 'Pesan gagal terkirim. Periksa koneksi internet atau konfigurasi email.');
        }
    }
}
