@extends ('layouts.app')
@section('content')

    <x-header />

    @foreach ($workarts as $workart)
        <img src="{{ $workart->imageworkart }}" alt="">
        <h5>{{ $workart->title . ' - ' . $workart->created_at }}</h5>
        <h3>{{ $workart->artistname }}</h3>
        <h5>{{ $workart->price }}</h5>
        @if (Auth::user())
            @if (Auth::user()->isAdmin)
                <div>
                    <a href="{{ route('editWorkart', ['id' => $workart->id]) }}">
                        <i class="far fa-edit"></i>
                    </a>
                    <a href="{{ route('deleteWorkart', ['id' => $workart->id]) }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </div>
            @endif
        @endif
    @endforeach
@endsection
