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
}
