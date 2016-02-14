@extends('layout')

@section('content')

  <h1>Cards</h1>
    @foreach ($cards as $card)
      <div>
        <ul class="list-group">
        <li class="list-group-item"><a href="cards/{{ $card->id }}">{{ $card->title }}</a></li>
      </div>
    @endforeach
  </ul>

@stop
