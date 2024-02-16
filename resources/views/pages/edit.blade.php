@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>New Book</h1>

    <form action="{{ route('users.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')


        <label for="nome">Titolo</label>
        <input type="text" name="nome" id="nome" value="{{ $book->nome }}">

        <label for="genere">Genere</label>
        <input type="text" name="genere" id="genere" value="{{ $book->genere }}">

        <label for="autore">Autore</label>
        <input type="text" name="autore" id="autore" value="{{ $book->autore }}">

        <label for="scaffale">Scaffale</label>
        <input type="text" name="scaffale" id="scaffale" value="{{ $book->scaffale }}">

        <input type="submit" value="UPDATE">


    </form>
@endsection
