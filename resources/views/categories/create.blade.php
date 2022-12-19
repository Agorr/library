@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

<form class="form bg-white p-6 border-1" method="POST" action="{{ route('categories.store') }}"> 
    @csrf
    <div>
        <label class="text-sm" for="name">Name</label>
        <input class="text-lg border-1" type="text" id="name" value="{{ old('name') }}" name="name">
        @error('name')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="sex">Description</label>
        <input class="text-lg border-1" type="text" id="sex" value="{{ old('description') }}" name="description">
        @error('description')
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