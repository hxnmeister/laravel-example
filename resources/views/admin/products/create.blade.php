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

    {!! Form::open(['route' => 'categories.store']) !!}
        {!! !!}
    {!! Form::close() !!}
@endsection