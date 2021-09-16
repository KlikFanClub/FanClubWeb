<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    }
 */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $highlighted = Artist::where('highlighted', true)->take(4)->get();
        $artists = Artist::all()->sortBy('name');
    
        return view ('home', ['highlighted'=>$highlighted, 'artists'=>$artists]);
        //return view('home');
    }
}
