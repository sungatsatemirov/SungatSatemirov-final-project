<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send() {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'ZhumekinRakhat';
        $objDemo->receiver = 'ZhumekinRakhat';

        Mail::to("190103441@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));
    }
}