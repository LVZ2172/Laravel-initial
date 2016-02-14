@extends('layout')

@section('content')
<div class="container">
    <div class="content">
        <div class="title">Welcome</div>
        <ul class="list-group">
        @foreach ($people as $person)
          <li class="list-group-item">{{ $person }}</li>
        @endforeach
      </ul>
    </div>
    </div>
</div>
@stop
