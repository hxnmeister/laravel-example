@extends('admin.templates.index')
@section('page-title', 'Products')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <a href="{{route('products.create')}}" class="btn btn-primary mb-5">Create New Product</a>
        
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
                    <td><img src="{{asset('storage/'.$product->image)}}" alt="" style="width: 50px; height: 50px"></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>
                        <a href="{{route('products.edit', ['product' => $product->id])}}" class="btn btn-warning">Edit</a>
                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                            <button class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection