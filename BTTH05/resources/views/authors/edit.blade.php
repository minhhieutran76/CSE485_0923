<form action="{{route('authors.update', $author->id)}}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="name">ID: </label>
        <input type="text" name="id" class='form-control' value="{{$author->id}}" required>
    </div>

    <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" name="name" class='form-control' value="{{$author->name}}" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>