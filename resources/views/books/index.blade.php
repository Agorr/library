@extends('layout')
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
<style>
.book-cover {
    height: 250px;
    width: 180px;
}
</style>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
<div class="book-container">
    @if (count($books) > 0)
        <div class="grid">
            <div class="row">
            @foreach($books as $book)
            <div class="col-md-3">
                <div class="card mt-3 mb-3 bg-white rounded-lg shadow-lg">
                    <div class="card-body">
                        <img src="{{ $book['cover'] }}" alt="{{$book['title']}}" class="img-fluid book-cover">
                        <h5 class="card-title" style="margin-top: 10px;">{{ $book['title'] }}</h5>
                        <a href="{{ route('books.show', ['book' => $book['id']]) }}" class="card-link">More information</a>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    @else
        <h2>No books</h2>
    @endif
</div>
</div>
@endsection
