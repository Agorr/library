
<!-- Sidebar -->
<style>
h2{
    margin-top:20px;
}
</style>
<nav class="nav nav-pills flex-column nav-fill bg-dark text-light">

    <form class="form-inline my-2 my-lg-0">
    <div class="input-group">
        <input class="form-control mr-sm-2 input-group-text" type="search" placeholder="Search" aria-label="Search" style="background-color: {{ $Color3 }}; color: {{ $Color1 }}; font-size: 1em; width: 120px;">
        <div class="input-group-prepend">
        <button class="btn btn-outline-primary my-2 my-sm-0 btn-rounded input-group-text btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
    </div>
    </form>

    <h2><a data-bs-toggle="collapse" href="#collapseAuthors" role="button" aria-expanded="false" aria-controls="collapseExample">
        Authors
    </a></h2>
    <div class="collapse" id="collapseAuthors">
        <div class="card card-body" style="background-color: {{$Color4}};">
            @if (count($authors) > 0)
                <ul class="navbar-nav">
                    @foreach($authors as $author)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('authors.show', ['author' => $author['id']]) }}">{{$author['name']}} {{$author['surname']}}</a>
                    </li>
                    @endforeach
                </ul>
            @else
                <h2>No authors</h2>
            @endif
        </div>
    </div>

    <h2><a data-bs-toggle="collapse" href="#collapseCategories" role="button" aria-expanded="false" aria-controls="collapseExample">
        Categories
    </a></h2>
    <div class="collapse" id="collapseCategories">
        <div class="card card-body" style="background-color: {{ $Color4 }};">
            @if (count($categories) > 0)
                <ul class="navbar-nav">
                    @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.show', ['category' => $category['id']]) }}">{{$category['name']}}</a>
                    </li>
                    @endforeach
                </ul>
            @else
                <h2>No categories</h2>
            @endif
        </div>
    </div>
</nav>