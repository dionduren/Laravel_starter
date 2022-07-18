@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post</h1>
    </div>

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/data/create" class="btn btn-primary mb-3">Create new post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datax as $filex)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $filex->title }}</td>
                        <td>{{ $filex->category->name }}</td>
                        <td>
                            <a href="/dashboard/data/{{ $filex->slug }}" class="badge bg-info">
                                <span data-feather="eye" class="align-text-bottom"></span>
                            </a>
                            <a href="" class="badge bg-warning">
                                <span data-feather="edit" class="align-text-bottom"></span>
                            </a>
                            <a href="" class="badge bg-danger">
                                <span data-feather="x-circle" class="align-text-bottom"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
