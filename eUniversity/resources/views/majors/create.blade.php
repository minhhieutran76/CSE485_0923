<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Create Major</title>
</head>
<body>
    <h1 class="text-center bg-success mt-3">Add New Major</h1>
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <form action="{{route('majors.store')}}" method="POST">
                @csrf
                
                <div class="form-group mt-3">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class='form-control' required>
                </div>

                <div class="form-group mt-3">
                    <label for="name">Description: </label>
                    <input type="text" name="description" class='form-control' required>
                </div>

                <div class="form-group mt-3">
                    <label for="name">Duration: </label>
                    <input type="text" name="duration" class="form-control" pattern="\d+" title="Vui lòng nhập một số" required>
                </div>
            
                <div class="form-group mt-3" style="margin-left: 350px">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>

        <div class="col-md-3"></div>
    </div>

    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>
</html>
