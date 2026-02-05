<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // 🍯 Honeypot Check - If filled, it's a bot!
        if (!empty($request->website)) {
            // Silently reject (don't tell the bot it failed)
            return back()->with('success', 'Message sent successfully!');
        }

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email:rfc,dns|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:2000',
            'terms' => 'accepted'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone ? '+880' . $request->phone : null, // Auto-add prefix
            'message' => $request->message
        ];

        // Replace with your actual email address
        Mail::to('shawonhawlader1044@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Message sent successfully!');
    }
}
