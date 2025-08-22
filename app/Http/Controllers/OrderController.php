<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'whatsapp' => 'required|string|max:20',
            'email' => 'required|email',
            'layanan' => 'required|string',
            'persetujuan' => 'accepted'
        ]);

        $subject = "Order {$validated['layanan']} dari website GrahaOffice";

        $body = "Nama: {$validated['nama']}\n";
        $body .= "WhatsApp: {$validated['whatsapp']}\n";
        $body .= "Email: {$validated['email']}\n";
        $body .= "Layanan: {$validated['layanan']}";

        Mail::raw($body, function ($message) use ($validated, $subject) {
            $message->to('artrevand@gmail.com')
                    ->subject($subject);
        });

        return back()->with('success', 'Order Anda berhasil dikirim. Kami akan segera menghubungi Anda.');
    }
}
