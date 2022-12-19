@extends('layout')

@include('sidebar')

@section('scripts')
    <script>
        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('options-icon')) {
                event.preventDefault();
                var optionsMenu = event.target.parentElement.querySelector('.options-menu');
                optionsMenu.classList.toggle('show');
            } else {
                var optionsMenu = document.querySelector('.options-menu.show');
                if (optionsMenu) {
                    optionsMenu.classList.remove('show');
                }
            }
        });
    </script>
@endsection

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8 main-content">

    @if (count($books) > 0)

        <div class="grid">
            @foreach($books as $book)
                <div class="book-card">
                    <!-- Use the book title as the alt text for the image -->
                    <img src="{{ asset('images/book_cover.jpg') }}" alt="{{$book['title']}}">
                    <div class="book-info">
                        <h3>
                            <a href="{{ route('books.show', ['book' => $book['id']]) }}">{{$book['title']}}</a>
                        </h3>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <h2>No books</h2>
    @endif



</div>
@endsection
