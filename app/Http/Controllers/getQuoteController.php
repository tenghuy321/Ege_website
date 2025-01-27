<?php

namespace App\Http\Controllers;

use App\Mail\GetQuoteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class getQuoteController extends Controller
{
    public function index(){
        return view('getQuote');
    }

    public function sendQuote(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'service_type' => 'required|string',
            'messages' => 'nullable|string',
        ]);

        // Send email to Gmail
        Mail::to('tenghuyly2330@gmail.com')->send(new GetQuoteMail($validated));

        return back()->with('success', 'Your quote request has been sent!');
    }
}
