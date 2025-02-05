<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ScheduleConsultation;
use Illuminate\Support\Facades\Mail;

class ScheduleConsultationController extends Controller
{
    public function index(){
        return view('scheduleConsultation');
    }

    public function sendSchedule(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:8|max:15',
            'email' => 'required|email',
            'date' => 'required',
            'messages' => 'nullable|string',
        ]);

        // Send email to Gmail
        Mail::to('tenghuyly2330@gmail.com')->send(new ScheduleConsultation($validated));

        return back()->with('success', 'Your Schedule a Consultation has been sent!');
    }
}
