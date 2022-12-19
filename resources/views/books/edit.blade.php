
@extends('layout')

@include('sidebar')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

<form class="form bg-white p-6 border-1" method="POST" action="{{ route('books.update', ['book' => $book->id]) }}"> 
    @csrf
    @method('PUT')
    <div>
        <label class="text-sm" for="isbn">ISBN</label>
        <input class="text-lg border-1" type="text" id="isbn" value="{{ $book->isbn }}" name="isbn">
        @error('isbn')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="title">Book Title</label>
        <input class="text-lg border-1" type="text" id="title" value="{{ $book->title }}" name="title">
        @error('title')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="num_pages">Number of pages</label>
        <input class="text-lg border-1" type="text" id="num_pages" value="{{ $book->num_pages }}" name="num_pages">
        @error('num_pages')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="description">Description</label>
        <input class="text-lg border-1" type="text" id="description" value="{{ $book->description }}" name="description">
        @error('description')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="cover">Cover</label>
        <input class="text-lg border-1" type="text" id="cover" value="{{ $book->cover }}" name="cover">
        @error('cover')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <div>
        <button class="border-1" type="submit">Submit</button>
    </div>
</form>

</div>
@endsection