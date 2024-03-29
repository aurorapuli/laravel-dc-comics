<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Http\Requests\BookFormRequest;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book :: all();

        return view('pages.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookFormRequest $request)
    {
        $data = $request -> all();

        $newBook = new Book();

        $newBook -> nome = $data['nome'];
        $newBook -> genere = $data['genere'];
        $newBook -> autore = $data['autore'];
        $newBook -> scaffale = $data['scaffale'];

        $newBook -> save();

        return redirect() -> route('users.show', $newBook -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book :: find($id);

        return view('pages.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book :: find($id);

        return view('pages.edit', compact('book'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookFormRequest $request, $id)
    {

        $book = Book :: find($id);

        $data = $request -> all();

        $book -> nome = $data['nome'];
        $book -> genere = $data['genere'];
        $book -> autore = $data['autore'];
        $book -> scaffale = $data['scaffale'];

        $book -> save();

        return redirect() -> route('users.show', $book -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book :: find($id);
        $book -> delete();

        return redirect() -> route('users.index');
    }
}
