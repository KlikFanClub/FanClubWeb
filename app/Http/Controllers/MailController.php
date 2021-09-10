<?php

namespace App\Http\Controllers;

use App\Mail\New_Artist_Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store()
    {
        $correo = new New_Artist_Mail;

        Mail::to('gabipineiro@hotmail.com')->send($correo);

        return ('Mensaje enviada');
    }
}
