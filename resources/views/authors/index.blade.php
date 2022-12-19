@extends('layout')

@include('sidebar')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    @if (count($authors) > 0)

        @foreach($authors as $author)
            <div>
                <h3>
                    <a href="{{ route('authors.show', ['author' => $author['id']]) }}">{{$author['name']}}</a>  
                </h3>    

            </div>
        @endforeach
    @else
        <h2>No authors</h2>
    @endif


</div>
@endsection