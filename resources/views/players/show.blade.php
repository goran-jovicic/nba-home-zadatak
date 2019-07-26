@extends('layouts.app')
@section('content')
<div>
    <h1>{{ $player->first_name . $player->last_name }}</h1>
    <p>{{ $player->email }}</p>
    <h2><a href={{"/teams/" . $player->team->id }}>{{ $player->team->name }}</a></h2>
</div>
@endsection