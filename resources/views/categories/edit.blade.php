
@extends('layout')

@section('content')
<style>
.form-control {
    font-size: 1em;
    margin-bottom:15px;
}
</style>

<div class="container-fluid">
<form class="form-horizontal" method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}"> 
    @csrf
    @method('PUT')
    <div class="form-group">
        <label class="text-sm" for="name">Name</label>
        <input class="form-control" type="text" id="name" value="{{ $category->name }}" name="name">
        @error('name')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="text-sm" for="description">Description</label>
        <input class="form-control" type="text" id="sex" value="{{ $category->description }}" name="description">
        @error('description')
        <div class="alert alert-danger">
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