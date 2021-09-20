<?php

namespace App\Http\Controllers;

use App\Models\Workart;
use Illuminate\Http\Request;
use App\Models\Artist;
use Illuminate\Support\Facades\Storage;

class WorkartController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
   $workarts = Workart::all()->sortByDesc('created_at');
   
   return view('pages.workarts', compact('workarts'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $artists = Artist::orderBy('name')->get();
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

    $request->validate([
      'title' => 'required',
      'imageworkart' => 'required',
      'edition' => 'required',
      'price' => 'required',
      'technique' => 'required',
      'theme' => 'required',
      'others' => '',
      'category' => 'required',
      'carousel' => '',
    ]);
    /* dd($request); */
    $artistId = (int)$request->artist_id;
    $workart = Workart::create([
      'title' => $request->title,
      'imageworkart' => $request->imageworkart,
      'edition' => $request->edition,
      'price' => $request->price,
      'technique' => $request->technique,
      'theme' => $request->theme,
      'others' => $request->others,
      'category' => $request->category,
      'carousel' => $request->has('carousel'),
      'artist_id' => $artistId,
    ]);


    //dd($request->hasfile('imageworkart'));
    if ($request->hasFile('imageworkart')) {
      $workart['imageworkart'] = $request->file('imageworkart')->store('uploads_workart', 'public');
    }
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


    $artists = Artist::orderBy('name')->get();
    $workart = Workart::find($id);
    return view('workart.edit', compact('workart', 'artists'));
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
    //$artists=Artist::orderBy('name')->get();

    $request->validate([
      'title' => 'required',
      'imageworkart' => 'required',
      'edition' => 'required',
      'price' => 'required',
      'technique' => 'required',
      'theme' => 'required',
      'others' => '',
      'category' => 'required',
      'carousel' => '',
    ]);
    //dd($request);
    $workartUpdate = request()->except(['_token', '_method']);

    if ($request->hasFile('imageworkart')) {
      $workart = Workart::findOrFail($id);
      //dd($workart);
      Storage::delete('public/' . $workart->imageworkart);

      $workartUpdate['imageworkart'] = $request->file('imageworkart')->store('uploads_workart', 'public');
      //dd($workart->imageworkart);
    }
    //$workart=Workart::whereId($id);

    Workart::where('id', '=', $id)->update($workartUpdate);

    $workart = Workart::findOrFail($id);

    // $request->update([
    //   'title' => $request->title,
    //   'imageworkart' => $request->imageworkart,
    //   'edition' => $request->edition,
    //   'price'=> $request->price,
    //   'technique' => $request->technique,
    //   'theme' => $request->theme,
    //   'others' => $request->others,
    //   'category' => $request->category,
    //   'carousel' => $request->has('carousel'),

    // ]);

    //$workart=Workart::findOrFail($id);    

    return redirect()->route('workarts', 'artists');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Workart  $workart
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Workart::find($id)->delete();
    return redirect()->route('workarts');
  }

  public function getWorkarts($id)
  {
      $artist = Artist::find($id);

      $workarts = $artist->workarts;

      return response()->json($workarts, 200);
  }
}
