<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Add Author</title>
</head>
<body>
    <h1 class="text-center bg-success mt-3">Add New Author</h1>
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <form action="{{route('authors.store')}}" method="POST">
                @csrf
                
                <div class="form-group mt-3">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class='form-control' required>
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
