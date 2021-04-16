<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index() {
       
        return view('mail.mail_view');
    }
    public function send(Request $request) {
        $data = new \stdClass();
        $data->sender = $request->sender;
        $data->message = $request->message;

        Mail::to('nasway2k@gmail.com')->send(new Mailer($data));
        return back();   
    }
}