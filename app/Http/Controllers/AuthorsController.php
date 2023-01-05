<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use App\Http\Requests\AuthorFormRequest;
class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('authors.index', [
            'authors' => Author::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorFormRequest  $request)
    {

        $data = $request->validated();
        Author::create($data);
        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
        */
        public function show(Author $author)
        {
            // GET
            $books = Book::join('author_book', 'books.id', '=', 'author_book.book_id')
                ->where('author_book.author_id', $author->id)
                ->get();
        
            return view('books.index', [
                'books' => $books
            ]);
        }
        
        
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        // GET
        return view('authors.edit', [
            'author' => $author
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorFormRequest $request, Author $author)
    {
        // GET

        $data = $request->validated();

        $author->update($data);
        // GET
        $author->name = $data['name'];
        $author->sex = $data['sex'];
        $author->birth_date = $data['birth_date'];
        $author->nationality = $data['nationality'];
        $author->surname = $data['surname'];



        $author->save();

        return redirect()->route('authors.show', $author->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
