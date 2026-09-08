<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendMailler implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    // public function handle(): void
    // {

    //     $gmail = "tipu.popcorn@gmail.com";

    //     Mail::send('sendMail',[], function($message) use ($gmail){
    //         $message->to ($gmail);
    //         $message->subject("test email");
            
    //     });
    // }

    // public function handle(): void
    // {
    //     $gmail = "tipu.popcorn@gmail.com";

    //     Mail::send('sendMail', [], function ($message) use ($gmail) {
    //         $message->to($gmail);
    //         $message->subject("test email");
    //     });
    // }

    public function handle(): void
    {
        $gmail = "tipu.popcorn@gmail.com";

       
        Mail::send('sendMail', [], function ($message) use ($gmail) {
            $message->to($gmail);
            $message->subject("Urgent Request for Rescheduling Visa Appointment 2");
            $message->attach(public_path('Mahbubur-Rahman-Photo.jpg'));
            $message->attach(public_path('Previous-visa-application.pdf'));
            $message->attach(public_path('Medical-reports-records.pdf'));
        });
    }
}
