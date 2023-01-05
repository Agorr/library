@extends('layout')

@section('content')
<style>
.form-control {
    font-size: 1em;
    margin-bottom:15px;
}
</style>
<div class="container mt-5">
    <form class="form" method="POST" action="{{ route('authors.update', ['author' => $author->id]) }}"> 
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" id="name" value="{{ $author->name }}" name="name">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sex">Sex</label>
            <input class="form-control" type="text" id="sex" value="{{ $author->sex }}" name="sex">
            @error('sex')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="birth_date">Birth date</label>
            <input class="form-control" type="text" id="birth_date" value="{{ $author->birth_date }}" name="birth_date">
            @error('birth_date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input class="form-control" type="text" id="nationality" value="{{ $author->nationality }}" name="nationality">
            @error('nationality')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="surname">Surname</label>
            <input class="form-control" type="text" id="surname" value="{{ $author->surname }}" name="surname">
            @error('surname')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Submit</button>
    </div>
    </form>
</div>
@endsection