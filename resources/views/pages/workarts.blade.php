@extends ('layouts.app')
@section ('content')

    <x-header />

@foreach ($workarts as $workart)
<img src="{{ $workart->imageworkart }}" alt="">
<h5>{{ $workart->title . ' - ' . $workart->created_at }}</h5>
<h3>{{ $workart->artistname }}</h3>
<h5>{{ $workart->price }}</h5>
<div>
    <a href="{{route ('editWorkart', ['id'=>$workart->id])}}">
        <i class="far fa-edit"></i>
    </a>
   <a href="">
    <i class="fas fa-trash-alt"></i>
   </a>
</div>
@endforeach

@endsection
