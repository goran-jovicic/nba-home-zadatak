@extends('layouts.app')
@section('content')
    <div>
        <h2>{{ $team->name }}</h2>
        <h3>{{ $team->email }}</h3>
        <h4>{{ $team->city }}</h4>
        <ul>
            @foreach ($team->players as $player)
                <li><a href={{ "/players" . '/' . $team->id }}> {{ $player->first_name . ' ' . $player->last_name }} </a></li>
            @endforeach
        </ul>
    </div>
@endsection