@extends('admin.templates.index')
@section('page-title', 'Products')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <a href="{{route('products.create')}}" class="btn btn-primary mb-5">Create New Category</a>
        
    <table class="table table-bordered">
        <thead>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Category</th>
        </thead>

        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$product->image}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->category_name}}</td>
                    <td>
                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                            <button class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection