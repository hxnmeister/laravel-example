@extends('admin.templates.index')
@section('page-title', 'Categories')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <a href="{{route('categories.create')}}" class="btn btn-primary mb-5">Create New Category</a>

    <table class="table table-bordered">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </thead>

        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->shortDescription}}</td>
                    <td>
                        <a href="{{route('categories.edit', ['category' => $category->id])}}" class="btn btn-warning">Edit</a>
                        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                            <button class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$categories->links()}}
@endsection