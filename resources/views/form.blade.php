<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <div class="add-books_form-wrapper">
        <form name="newbook" id="add-new-book" method="post" action="{{ Route('show_book') }}">
            <div class="form-section">
                <label for="title"> Title </label>
                <input type="text" id="title" name="title" class="form-control" value="{{ isset($book) ? $book->title : '' }}" required><br>
            </div>
            <div class="form-section">
                <label for="author"> Author </label>
                <input type="text" id="author" name="author" class="form-control" value="{{ isset($book) ? $book->author : '' }}" required><br>
            </div>
            <div class="form-section">
                <label for="genre"> Choose Genre:</label>
                <select name="genre" id="genre">
                    <option value="fantasy" {{ isset($book) && $book->genre == 'fantasy' ? 'selected' : '' }}>Fantasy</option>
                    <option value="sci-fi" {{ isset($book) && $book->genre == 'sci-fi' ? 'selected' : '' }}>Sci-Fi</option>
                    <option value="mystery" {{ isset($book) && $book->genre == 'mystery' ? 'selected' : '' }}>Mystery</option>
                    <option value="horror" {{ isset($book) && $book->genre == 'horror' ? 'selected' : '' }}>Horror</option>
                    <option value="drama" {{ isset($book) && $book->genre == 'drama' ? 'selected' : '' }}>Drama</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>

</html>
</html>