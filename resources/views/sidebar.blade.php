
<!-- Sidebar -->
<div class="sidebar">
    <aside>
        <h1>Authors</h1>
        @if (count($authors) > 0)
        <ul>
            @foreach($authors as $author)
            <li>
                <a href="{{ route('authors.show', ['author' => $author['id']]) }}">{{$author['name']}}</a>
                <a href="#" class="options-icon">
                    <i class="fas fa-ellipsis-h"></i>
                </a>
                <div class="options-menu">
                    <a href="{{ route('authors.show', ['author' => $author['id']]) }}">View</a>
                    <a href="{{ route('authors.edit', ['author' => $author['id']]) }}">Edit</a>
                    <form action="{{ route('authors.destroy', ['author' => $author['id']]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
            @endforeach
         
        </ul>
        @else
            <h2>No authors</h2>
        @endif
        <h1>Categories</h1>
        @if (count($categories) > 0)
        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="{{ route('categories.show', ['category' => $category['id']]) }}">{{$category['name']}}</a>
                    <a href="#" class="options-icon">
                        <i class="fas fa-ellipsis-h"></i>
                    </a>
                    <div class="options-menu">
                        <a href="{{ route('categories.show', ['category' => $category['id']]) }}">View</a>
                        <a href="{{ route('categories.edit', ['category' => $category['id']]) }}">Edit</a>
                        <form action="{{ route('categories.destroy', ['category' => $category['id']]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
         
        </ul>
        @else
            <h2>No categories</h2>
        @endif
    </aside>
</div>
