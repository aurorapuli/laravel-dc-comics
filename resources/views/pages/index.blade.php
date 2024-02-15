@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Fumetti</h1>
    <ul>
        @foreach ($books as $book)
            <li class="mb-5">
                <div><b>Titolo:</b> {{ $book->nome }}</div>
                <div><b>Genere:</b> {{ $book->genere }}</div>
                <div><b>Autore:</b> {{ $book->autore }}</div>
                <div><b>Scaffale:</b> {{ $book->scaffale }}</div>
            </li>
        @endforeach
    </ul>
@endsection
