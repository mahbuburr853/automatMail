<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;


class SendMailer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-mailer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $gmail = "tipu.popcorn@gmail.com";

        Mail::send('sendMail', [], function ($message) use ($gmail) {
            $message->to($gmail);
            $message->subject("test email");
        });
    }
}
