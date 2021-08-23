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
    return view('pages.artists', compact('workarts'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $artists=Artist::all();
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
      'artistname'=>$request->Artista,
      'title'=>$request->Título,
      'imageworkart'=>$request->ImagenWorkart,
      'edition'=>$request->Edición,
      'price'=>$request->Precio,
      'technique'=>$request->Técnica,
      'theme'=>$request->Tema,
      'others'=>$request->Otros,
      'category'=>$request->Categoria,
      'carousel'=>$request->Carrusel,
      'highlighted'=>$request->Destacados
    ]);
    $workart->save();
    return redirect()->route('/');

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
  public function edit(Workart $workart)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Workart  $workart
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Workart $workart)
  {
    //
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
