<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Edit Major</title>
</head>
<body>
    <h1 class="text-center bg-success mt-3">Edit Major</h1>
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <form action="{{route('majors.update', $major->id)}}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group mt-3">
                    <label for="name">ID: </label>
                    <input type="text" name="id" class='form-control' value="{{$major->id}}" required readonly>
                </div>

                <div class="form-group mt-3">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class='form-control' value="{{$major->name}}" required>
                </div>

                <div class="form-group mt-2">
                    <label for="name">Description: </label>
                    <input type="text" name="description" class='form-control' value="{{$major->description}}" required>
                </div>

                <div class="form-group mt-2">
                    <label for="name">Duration: </label>
                    <input type="text" name="duration" class='form-control' value="{{$major->duration}}" required>
                </div>
            
                <div class="form-group mt-3" style="margin-left: 350px">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>

        <div class="col-md-3"></div>
    </div>

    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>
</html>