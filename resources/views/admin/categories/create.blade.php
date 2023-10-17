@extends('admin.templates.index')
@section('page-title', 'Creating Category')
@section('content')
    {!! Form::open(['route' => 'categories.store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Category Name: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Category Description: ') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5]) !!}
        </div>

        {!! Form::submit('Add Category', ['class' => 'btn btn-primary mt-3']) !!}
    {!! Form::close() !!}
@endsection