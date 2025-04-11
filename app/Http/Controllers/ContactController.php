<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.contactus');
    }

    public function submit(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Save to database
        // $contact = Contact::create($request->all());
        $contact = Contact::create($request->only(['name', 'email', 'phone', 'message']));

        // Send email
        Mail::to('pstonearts02@gmail.com')->send(new ContactMail($contact));

        return redirect()->route('contact')->with('success', 'Thank you for contacting us!');
    }
}
