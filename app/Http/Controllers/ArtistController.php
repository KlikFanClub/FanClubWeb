<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $artists = Artist::all()
      ->sortBy('name');
    return view('pages.artists', compact('artists'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view ('artist.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    
    // $request->validate([
    //   'name'=>'required|max:100',
    //   'profile_picture'=>'required',
    //   'bio'=>'required|max:500',
    //   'website'=>'',
    //   'email'=>'required|email|unique:artists',
    //   'instagram'=>'',
    //   'facebook'=>'',
    //   'twitter'=>'',
    //   'other_socials'=>'',
    //   'highlighted'=>'boolean'
      
    // ]);
    
    if(isset($request->highlighted)){
      //dd('1');
      $highlighted = true;
      //dd($highlighted);
    }
    if(isset($request->highlighted)==false){
     // dd('0');
     $highlighted = false;
          
  };

    $artist=Artist::create([
        'name'=>$request->name,
        'profile_picture'=>$request->profile_picture,
        'bio'=>$request->bio,
        'website'=>$request->website,
        'email'=>$request->email,
        'instagram'=>$request->instagram,
        'facebook'=>$request->facebook,
        'twitter'=>$request->twitter,
        'other_socials'=>$request->other_socials,
        'highlighted'=>$highlighted
    ]);
      $artist->save();
      return redirect()->route('artists');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Artist  $artist
   * @return \Illuminate\Http\Response
   */
  public function show(Artist $artist)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Artist  $artist
   * @return \Illuminate\Http\Response
   */
  public function edit(Artist $artist, $id)
  {
    $artists=Artist::orderBy('name')->get();
    $artist=Artist::find($id);
    return view('artist.edit', compact('artist','artists'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Artist  $artist
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Artist $artist, $id)
  {
      $artists=Artist::orderBy('name')->get();

      $artist=Artist::whereId($id);

      $artist->update([
      'name'=>$request->name,
      'profile_picture'=>$request->profile_picture,
      'bio'=>$request->bio,
      'website'=>$request->website,
      'email'=>$request->email,
      'instagram'=>$request->instagram,
      'facebook'=>$request->facebook,
      'twitter'=>$request->twitter,
      'other_socials'=>$request->other_socials,
      'highlighted'=>$request->has('highlighted'),
      ]);

      return redirect()->route('artists', 'artists');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Artist  $artist
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Artist::find($id)->delete();
    return redirect()->route('artists');
  }
}
