@extends ('layouts.app')
@section ('content')

@foreach ($artists as $artist)
  <h6>{{ $artist->name }}</h6>
@endforeach

{{-- @foreach ($workarts as $workart)
<img src="{{ $workart->imageworkart }}" alt="">
<h5>{{ $workart->title . ' - ' . $workart->created_at }}</h5>
<h3>{{ $workart->artistname }}</h3>
<h5>{{ $workart->price }}</h5>
@endforeach --}}

@endsection