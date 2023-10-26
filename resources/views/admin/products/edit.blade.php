@extends('admin.templates.index')
@section('page-title', 'Creating Product')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    {!! Form::model($product, ['route' => ['products.update', 'product' => $product->id], 'files' => true, 'method' => 'put']) !!}
        @include('admin.products._form')
        
        {!! Form::label('current-image', 'Current Image:')!!}
        <br>
        <img src="{{asset('storage/'.$product->image)}}" alt="No Image!" id="current-image" style="width: 150px; height: 150px">
        <br>
        {!! Form::submit('Confirm Edit', ['class' => 'btn btn-primary mt-5']) !!}
    {!! Form::close() !!}
@endsection