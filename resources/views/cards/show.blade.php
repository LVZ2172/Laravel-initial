@extends('layout')

@section('content')

  <div class="col-md-6 col-md-offset-3">

  <h1>{{ $card->title }}</h1>

  <ul class="list-group">

    @foreach ($card->notes as $notes)
      <li class="list-group-item">{{ $notes->body }}</li>
    @endforeach
  </ul>

  <hr>

  <h3>Add a new note</h3>
  <form method="POST" action="/cards/{{ $card->id }}/notes">
    <div class="form-group">
      <textarea name='body' class="form-control"></textarea>
    </div>

    <div class="form-group">
      <button type='submit' class="btn btn-primary">Add note</button>
    </div>
  </form>

@stop
