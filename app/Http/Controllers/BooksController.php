<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Http\Requests\BookFormRequest;
use Illuminate\Support\Facades\Log;
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('books.index', [
            'books' => Book::with('authors', 'categories')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET
        return view('books.create', [
            'authors' => Author::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookFormRequest $request)
    {
        $data = $request->validated();
        $book = Book::create($data);
        $book->authors()->attach($request->input('author_id'));
        $book->categories()->attach($request->input('category_id'));
        
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        // GET
        return view('books.show', [
            'book' => $book,
            'categories' => $book->categories,
            'authors' => $book->authors
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        // GET
        return view('books.edit', [
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookFormRequest $request, Book $book)
    {
        $data = $request->validated();

        $book->update($data);
        // GET
        $book->isbn = $data['isbn'];
        $book->title = $data['title'];
        $book->num_pages = $data['num_pages'];
        $book->description = $data['description'];
        $book->cover = $data['cover'];

        $book->save();

        return redirect()->route('books.show', $book->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
    
        return redirect()->route('books.index')
            ->with('success', 'Book deleted successfully');
    }
    
}
