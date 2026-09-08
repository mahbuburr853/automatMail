<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    
// Mail::send('mail', '00', function($msg){
//         $msg->
//     });

    return view('welcome');
});


route::get('/mail', function(){
    return view('sendMail');
});

Route::get('/send-mail', function(){
     $gmail = "tipu.popcorn@gmail.com";

        Mail::send('sendMail', [], function ($message) use ($gmail) {
            $message->to($gmail);
            $message->subject("Urgent Request for Rescheduling Visa Appointment 2");
            $message->attach(public_path('Mahbubur-Rahman-Photo.jpg'));
            $message->attach(public_path('Previous-visa-application.pdf'));
            $message->attach(public_path('Medical-reports-records.pdf'));
        });

        return "Email sent successfully!";
});