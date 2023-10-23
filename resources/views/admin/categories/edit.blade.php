@extends('admin.templates.index')
@section('page-title', 'Editing Category')
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
    
    {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'put']) !!}

        @include('admin.categories._form')

        {!! Form::submit('Confirm Edit', ['class' => 'btn btn-primary mt-3']) !!}
    {!! Form::close() !!}
@endsection