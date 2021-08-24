<?php

namespace App\Http\Controllers;

use App\Models\Workart;
use Illuminate\Http\Request;
use App\Models\Artist;


class WorkartController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $workarts = Workart::all()
            ->sortByDesc('created_at');
    return view('pages.workarts', compact('workarts'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $artists=Artist::orderBy('name')->get();
    return view('workart.create', compact('artists'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $workart=Workart::create([
      'artist_id'=>$request->artist_id,
      'title'=>$request->title,
      'imageworkart'=>$request->imageworkart,
      'edition'=>$request->edition,
      'price'=>$request->price,
      'technique'=>$request->technique,
      'theme'=>$request->theme,
      'others'=>$request->others,
      'category'=>$request->category,
      'carousel'=>$request->carousel,
      'highlighted'=>$request->highlighted      
    ]);
    $workart->save();
    return redirect()->route('workarts');

  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Workart  $workart
   * @return \Illuminate\Http\Response
   */
  public function show(Workart $workart)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Workart  $workart
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $artists=Artist::orderBy('name')->get();
    $workart=Workart::find($id);
    return view ('workart.edit', compact('workart','artists'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Workart  $workart
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $artists=Artist::orderBy('name')->get();
   
    $workart=Workart::whereId($id);

    $workart->update([
      //'artistname'=>$request->artistname,
      'title'=>$request->title,
      'imageworkart'=>$request->imageworkart,
      'edition'=>$request->edition,
      'price'=>$request->price,
      'technique'=>$request->technique,
      'theme'=>$request->theme,
      'others'=>$request->others,
      'category'=>$request->category,
      'carousel'=>$request->carousel,
      'highlighted'=>$request->highlighted  
    ]);

    return redirect()->route('workarts', 'artists');
      
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Workart  $workart
   * @return \Illuminate\Http\Response
   */
  public function destroy(Workart $workart)
  {
    //
  }
}
