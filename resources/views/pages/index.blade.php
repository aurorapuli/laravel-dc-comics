@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Fumetti</h1>
    <a href="{{ route('users.create') }}">CREATE</a>
    <ul>
        @foreach ($books as $book)
            <li class="mb-5 d-flex">

                <a href="{{ route('users.show', $book->id) }}">
                    <div><b>Titolo:</b> {{ $book->nome }}</div>
                </a>

                <form action="{{ route('users.destroy', $book->id) }}" method="POST">

                    @csrf
                    @method('DELETE')

                    <input type="submit" value="X">
                </form>


            </li>
        @endforeach
    </ul>
@endsection
