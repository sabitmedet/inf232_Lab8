<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact_us');
    }

    public function sendEmail(Request $request){
        $details = [
            'name' => $request -> name,
            'surname' => $request -> surname,
            'email' => $request -> email,
            'message' => $request -> message
        ];

        Mail::to('190103168@stu.sdu.edu.kz')-> send(new ContactMail($details)); 
        return back()->with('message_sent', 'Your message has been sent successfully');
    }
}
