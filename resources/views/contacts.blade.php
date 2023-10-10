@extends('templates.main')
@section('content')
    <h1>Contacts</h1>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <form action="{{route('sendEmail')}}" method="post">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea name="message" id="message" cols="30" rows="4" class="form-control @error('message') is-invalid @enderror">{{old('message')}}</textarea>
            @error('message')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary mt-3">Send</button>
    </form>
@endsection