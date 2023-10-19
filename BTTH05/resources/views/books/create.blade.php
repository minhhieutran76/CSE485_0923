<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Add Book</title>
</head>
<body>
    <h1 class="text-center bg-info mt-3">Add New Book</h1>
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <form action="{{route('books.store')}}" method="POST">
                @csrf
            
                <div class="form-group mt-3">
                    <label for="name">Author ID: </label>
                    <input type="text" name="author_id" class='form-control' required>
                </div>
            
                <div class="form-group mt-2">
                    <label for="name">Title: </label>
                    <input type="text" name="title" class='form-control' required>
                </div>
            
                <div class="form-group mt-3" style="margin-left: 350px">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

        <div class="col-md-3"></div>
    </div>

    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>
</html>








