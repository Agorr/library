@extends('layout')

@section('content')
    <div class="card mt-3 mb-3 bg-white rounded-lg shadow-lg" style="padding: 20px;">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ $book->cover }}" alt="{{$book['title']}}" class="img-fluid" >
            </div>
            <div class="col-md-7 mt-5">
                <div class="book-info" style="margin:30px;">
                    <h3 class="book-title" style="margin-bottom:20px;">{{$book->title}}</h3>
                    <div class="book-authors">
                        <p> Author: {{ $authors->pluck('name')->join(', ') }} {{ $authors->pluck('surname')->join(', ') }}</p>
                    </div>
                    <p>ISBN: {{$book->isbn}}</p>
                    <p>Page count: {{$book->num_pages}}</p>
                    <p>Description: {{$book->description}}</p>
                    <div class="book-categories">
                        <p> Category: {{ $categories->pluck('name')->join(', ') }} </p>
                    </div>
                </div>
                <div class="book-actions mt-5" style="margin:30px;">
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection