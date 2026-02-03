<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'message' => 'required',
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
