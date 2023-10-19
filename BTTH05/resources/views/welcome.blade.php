{{-- @extends('layouts.base') <!-- extends là kế thừa thư mục layouts file base -->

<!-- Triển khai title -->
@section('title', 'HomePage')


@section('main')
    <h1 class="text-center">Danh sách tác giả</h1>
    <a href="{{route('authors.create')}}" class="btn btn-success">Add New Author</a>
    <div class="row mt-3">
        <table class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>

            @foreach ($authors as $author)
                <tr>
                    <th scope="row">{{ $author->id }}</th>
                    <td>{{ $author->name }}</td>
                    <td><a href="" class="btn btn-success">Edit</a></td>
                    <td><a data-bs-toggle="modal" data-bs-target="#deleteModal{{$author->id }}" class="btn btn-warning">Delete</a></td>
                </tr>

                <div class="modal fade" id="deleteModal{{$author->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                         Are you sure want to delete author has id: {{$author->id }}?
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{route('authors.destroy', $author->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Delete</button>
    
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach

        </table>
    </div>
       
@endsection
     --}}