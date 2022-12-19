@extends('layout')

@include('sidebar')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

<form class="form bg-white p-6 border-1" method="POST" action="{{ route('books.store') }}"> 
    @csrf
    <div>
        <label class="text-sm" for="isbn">ISBN</label>
        <input class="text-lg border-1" type="text" id="isbn" value="{{ old('isbn') }}" name="isbn">
        @error('isbn')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="title">Book Title</label>
        <input class="text-lg border-1" type="text" id="title" value="{{ old('title') }}" name="title">
        @error('title')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="num_pages">Number of pages</label>
        <input class="text-lg border-1" type="text" id="num_pages" value="{{ old('num_pages') }}" name="num_pages">
        @error('num_pages')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="description">Description</label>
        <input class="text-lg border-1" type="text" id="description" value="{{ old('title') }}" name="description">
        @error('description')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="cover">Cover</label>
        <input class="text-lg border-1" type="text" id="cover" value="{{ old('cover') }}" name="cover">
        @error('cover')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div>
        <label class="text-sm" for="author_id">Author</label>
        <select class="text-lg border-1" id="author_id" name="author_id">
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
    </div>

    
    <div>
        <label class="text-sm" for="category_id">Category</label>
        <select class="text-lg border-1" id="category_id" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    
    <div>
        <button class="border-1" type="submit">Submit</button>
    </div>
</form>

</div>
@endsection