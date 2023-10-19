@extends('layouts.base')

<!-- Triển khai title -->
@section('title', 'Book')


@section('main')
    <h1 class="text-center bg-info mb-3">List Book</h1>
    <a href="{{route('books.create')}}" class="btn btn-success">Add New Book</a>
    <div class="row mt-3">
        <table class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Author ID</th>
                <th scope="col">Title</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>

            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->author_id }}</td>
                    <td>{{ $book->title }}</td>
                    <td><a href="{{route('books.edit', $book->id)}}"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a data-bs-toggle="modal" data-bs-target="#deleteModal{{ $book->id }}"><i class="bi bi-trash3-fill"></i></a></td>
                </tr>

                <div class="modal fade" id="deleteModal{{ $book->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                         Are you sure want to delete book has id: {{$book->id }}?
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{route('books.destroy', $book->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-info" data-bs-dismiss="modal">Delete</button>
    
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach

        </table>
    </div>
       
@endsection



    