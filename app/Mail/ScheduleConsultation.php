<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ScheduleConsultation extends Mailable
{
    use Queueable, SerializesModels;

    public $ScheduleFormData;
    /**
     * Create a new message instance.
     */
    public function __construct($ScheduleFormData)
    {
        $this->ScheduleFormData = $ScheduleFormData;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Schedule a Consultation Form',
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Schedule a Consultation Request')
                    ->view('emails.scheduleConsultation') // This will be the email view
                    ->with('ScheduleFormData', $this->ScheduleFormData);
    }
}
