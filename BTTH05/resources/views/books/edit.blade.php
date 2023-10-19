<form action="{{route('books.update', $book->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">ID: </label>
        <input type="text" name="id" class='form-control' value="{{$book->id}}" required>
    </div>

    <div class="form-group">
        <label for="name">Author ID: </label>
        <input type="text" name="author_id" class='form-control' value="{{$book->author_id}}" required>
    </div>

    <div class="form-group">
        <label for="name">Title: </label>
        <input type="text" name="title" class='form-control' value="{{$book->title}}" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>