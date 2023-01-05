@extends('layout')

@section('content')
<style>
.form-control {
    font-size: 1em;
    margin-bottom:15px;
}
</style>
<div class="container">
  <form method="POST" action="{{ route('authors.store') }}" class="form-horizontal">
    @csrf
    <div class="form-group">
      <label for="name" class="col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" value="{{ old('name') }}" name="name">
        @error('name')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
      </div>
    </div>
    <div class="form-group">
      <label for="sex" class="col-sm-2 control-label">Sex</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sex" value="{{ old('sex') }}" name="sex">
        @error('sex')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
      </div>
    </div>
    <div class="form-group">
      <label for="birth_date" class="col-sm-2 control-label">Birth date</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="birth_date" value="{{ old('birth_date') }}" name="birth_date">
        @error('birth_date')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
      </div>
    </div>
    <div class="form-group">
      <label for="nationality" class="col-sm-2 control-label">Nationality</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nationality" value="{{ old('nationality') }}" name="nationality">
        @error('nationality')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
      </div>
    </div>
    <div class="form-group">
      <label for="surname" class="col-sm-2 control-label">Surname</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="surname" value="{{ old('surname') }}" name="surname">
        @error('surname')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
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