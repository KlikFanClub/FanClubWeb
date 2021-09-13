<?php

namespace App\Http\Controllers;

use App\Mail\New_Artist_Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('emails.mail');
    }

    public function store(Request $request)
    {
        $contact=([
            'name' => $request['name'],
            'email' => $request['email'],            
            'aboutArtist' => $request['aboutArtist'],
            'someLink' => $request['someLink'],
        ]);

        $correo = new New_Artist_Mail($contact);
        //dd($contact);

        Mail::to('gabipineiro@hotmail.com')->send($correo);

        return 'Gracias por estar con nosostros! Tu email ha sido enviado a FanClub y pronto te contestaremos!';
    }
}
