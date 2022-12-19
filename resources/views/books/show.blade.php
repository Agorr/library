@extends('layout')

@include('sidebar')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">


<div class="book-container">
  <img src="{{ asset('images/book_cover.jpg') }}" alt="{{$book['title']}}" class="book-cover">
  <div class="book-info">
    <h3 class="book-title">{{$book->title}}</h3>
    <div>
      <div class="book-authors">
      Author:
      {{ $authors->pluck('name')->join(', ') }}
      </div>
        <p>ISBN: {{$book->isbn}}</p>
        <p>Page count: {{$book->num_pages}}</p>
        <p>Description: {{$book->description}}</p>
        <div class="book-categories">
        Category: 
        {{ $categories->pluck('name')->join(', ') }}
        </div>
      </div>
      <div class="book-actions">
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