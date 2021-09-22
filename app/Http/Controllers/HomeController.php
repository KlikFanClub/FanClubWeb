<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Workart;
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

        $slideWorkart= Workart::where('carousel', true)-> take(5)->get();
        $workarts = Workart::all()->sortByDesc('created_at');
    
        return view ('home', ['highlighted'=>$highlighted, 'artists'=>$artists, 'slideWorkart'=>$slideWorkart, 'workarts'=>$workarts]);
       
    }

    public function pageConstructions(){
        return view('pages.constructions');
    }
public function contact(){
    return view('pages.contact');
}
}
