@extends('layout')

@include('sidebar')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div>
        <h3>
            {{$author->name}}
        </h3>
        
    </div>
</div>
@endsection