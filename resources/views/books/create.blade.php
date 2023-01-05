@extends('layout')

@section('content')
<style>
.form-control {
    font-size: 1em;
    margin-bottom:15px;
}
</style>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form class="form bg-white p-6 border-1" method="POST" action="{{ route('books.store') }}"> 
    @csrf
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control" id="isbn" value="{{ old('isbn') }}" name="isbn">
        @error('isbn')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="title">Book Title</label>
        <input type="text" class="form-control" id="title" value="{{ old('title') }}" name="title">
        @error('title')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="num_pages">Number of pages</label>
        <input type="text" class="form-control" id="num_pages" value="{{ old('num_pages') }}" name="num_pages">
        @error('num_pages')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" value="{{ old('title') }}" name="description">
        @error('description')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="cover">Cover</label>
        <input type="text" class="form-control" id="cover" value="{{ old('cover') }}" name="cover">
        @error('cover')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="author_id">Author</label>
        <select class="form-control" id="author_id" name="author_id">
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
    </div>

    
    <div class="form-group">
    <label for="category_id">Category</label>
        <select class="form-control" id="category_id" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary form-control">Submit</button>
    </form>
</div>

@endsection