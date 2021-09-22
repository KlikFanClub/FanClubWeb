@extends ('layouts.app')
@section('content')
  <x-header />
  <div class="catalogue">  
    <main>    
     
        <div class="artwork_card">
          <img class="artwork_img" src="{{ asset('storage') . '/' . $workart->imageworkart }}">
          <span class="artwork_title">{{ $workart->title }}</span>          
          <span class="artwork_title">{{ $workart->edition }}</span>  
          <span class="artwork_price">{{ $workart->price }}€</span>
          <span class="artwork_title">{{ $workart->technique }}</span>  
          <span class="artwork_title">{{ $workart->theme }}</span> 
          <span class="artwork_title">{{ $workart->category }}</span> 
          </div>
        </div>
   
    </main>
  <x-footer />
  @endsection

