<form action="{{route('books.store')}}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Author ID: </label>
        <input type="text" name="author_id" class='form-control' required>
    </div>

    <div class="form-group">
        <label for="name">Title: </label>
        <input type="text" name="title" class='form-control' required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>