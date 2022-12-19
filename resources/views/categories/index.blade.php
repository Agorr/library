@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    @if (count($categories) > 0)

        @foreach($categories as $category)
            <div>
                <h3>
                    <a href="{{ route('categories.show', ['category' => $category['id']]) }}">{{$category['name']}}</a>  
                </h3>    
                

            </div>
        @endforeach
    @else
        <h2>No categories</h2>
    @endif


</div>
@endsection