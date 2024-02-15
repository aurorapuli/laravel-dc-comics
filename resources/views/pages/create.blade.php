@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>New Book</h1>

    <form action="{{ route('users.store') }}" method="POST">

        @csrf
        @method('POST')


        <label for="nome">Titolo</label>
        <input type="text" name="nome" id="nome">

        <label for="genere">Genere</label>
        <input type="text" name="genere" id="genere">

        <label for="autore">Autore</label>
        <input type="text" name="autore" id="autore">

        <label for="scaffale">Scaffale</label>
        <input type="text" name="scaffale" id="scaffale">

        <input type="submit" value="CREATE">


    </form>
@endsection
