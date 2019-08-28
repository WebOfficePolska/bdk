<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\ContactForm;



class ContactController extends Controller
{


    public function send(Request $request)
    {

        //Mail::to(env('MAIL_ACCOUNT'))->send(new ContactForm($request->email_from, $request->message_title, $request->message_text));
        Mail::to(env('MAIL_ACCOUNT'))->send(new ContactForm($request->firma, $request->imie_nazwisko, $request->telefon, $request->email));


        return View('home.wyslijzgloszenie');


    }

}
