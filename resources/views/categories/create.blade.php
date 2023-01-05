@extends('layout')

@section('content')
<style>
.form-control {
    font-size: 1em;
    margin-bottom:15px;
}
</style>

<div class="container">
    <form class="form-horizontal" method="POST" action="{{ route('categories.store') }}"> 
        @csrf
        <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" id="name" value="{{ old('name') }}" name="name">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="sex">Description:</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" id="description" value="{{ old('description') }}" name="description">
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary form-control">Submit</button>
        </div>
        </div>
    </form>
</div>
@endsection