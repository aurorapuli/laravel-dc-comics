@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1 class="mb-5">Dettagli fumetto:</h1>

    <div><b>Tirolo: </b>{{ $book->nome }}</div>
    <div><b>Genere: </b>{{ $book->genere }}</div>
    <div><b>Autore: </b>{{ $book->autore }}</div>
    <div><b>Scaffale: </b>{{ $book->scaffale }}</div>
@endsection
