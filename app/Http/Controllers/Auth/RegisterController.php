<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\New_Artist_Mail;
use Illuminate\Http\Request;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = ('/mail');

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'aboutArtist' => ['required', 'string', 'max:255'],
            'someLink' => ['required', 'string', 'url'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        Mail::raw(
            'Nombre del Artista:' . '' . $data['name'], 
            function ($m) {
        $m->from('admin@fanclubproject.com', 'FanClub Bcn');

            $m->to('gabipineiro@hotmail.com')->subject('You have a new notification');
  
        });   
           
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            // 'password' => Hash::make($data['password']),
            'aboutArtist' => $data['aboutArtist'],
            'someLink' => $data['someLink'],
        ]);
     
    }

    // public function send($email, $dates){
    //     Mail::send('emails.mail', $dates, function($message) use ($email){
    //         $message->subject('Hola! Bienvenido a FancLub!');
    //         $message-> to($email);
    //         $message-> from('admin@fanclubproject.com', 'FanClub Bcn');
    //     });
    // }
    

}

