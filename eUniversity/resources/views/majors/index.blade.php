@extends('layouts.base')

<!-- Triển khai title -->
@section('title', 'HomePage')


@section('main')
    <h1 class="text-center bg-info mb-3">List Major</h1>
    <a href="{{route('majors.create')}}" class="btn btn-success mb-2">Add New Major</a>
    <div class="alert alert-success" id="successMessage">
        {{ session('success') }}
    </div>
    
    <script>
        // Sử dụng JavaScript để ẩn thông báo sau 3 giây
        setTimeout(function () {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 2000); // 2 giây
    </script>

    <div class="row mt-3">
        <table class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Duration</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>

            @foreach ($majors as $major)
                <tr>
                    <th scope="row">{{ $major->id }}</th>
                    <td>{{ $major->name }}</td>
                    <td>{{ $major->description }}</td>
                    <td>{{ $major->duration }}</td>
                    <td>{{ $major->created_at }}</td>
                    <td>{{ $major->updated_at }}</td>
                    <td><a href="{{route('majors.edit', $major->id)}}"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a data-bs-toggle="modal" data-bs-target="#deleteModal{{ $major->id }}"><i class="bi bi-trash3-fill"></i></a></td>

                    <div class="modal fade" id="deleteModal{{ $major->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5">Delete Major</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                             Are you sure want to delete major has id: {{$major->id }}?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form action="{{route('majors.destroy', $major->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-info" data-bs-dismiss="modal">Delete</button>
        
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </tr>
            @endforeach

        </table>
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $majors->links('pagination::bootstrap-4')}}
      </div>
       
@endsection




    

