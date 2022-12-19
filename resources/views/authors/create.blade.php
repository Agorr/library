@extends('layout')

@include('sidebar')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

<form class="form bg-white p-6 border-1" method="POST" action="{{ route('authors.store') }}"> 
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
        <label class="text-sm" for="sex">Sex</label>
        <input class="text-lg border-1" type="text" id="sex" value="{{ old('sex') }}" name="sex">
        @error('sex')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="birth_date">Birth date</label>
        <input class="text-lg border-1" type="text" id="birth_date" value="{{ old('birth_date') }}" name="birth_date">
        @error('birth_date')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="nationality">Nationality</label>
        <input class="text-lg border-1" type="text" id="nationality" value="{{ old('nationality') }}" name="nationality">
        @error('nationality')
        <div class="form-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="surname">Surname</label>
        <input class="text-lg border-1" type="text" id="surname" value="{{ old('surname') }}" name="surname">
        @error('surname')
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