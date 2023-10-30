@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Home</h1>
    </div>

    <div class="container d-flex">
        @foreach ($products as $product)
            <div class="container d-flex flex-column mb-5">
                <img src="{{$product->image}}" alt="Image of {{$product->slug}}" style="width: 200px; height: 150px" class="mb-2">
                <div class="d-grid gap-2 d-md-block">
                    <a href="{{route('showProduct', ['slug' => $product->slug])}}" class="btn btn-outline-info">{{$product->name}}</a>
                </div>
            </div>
        @endforeach
    </div>
    

    {{-- @foreach ($allCategories as $category)
        <p>{{$category->name}}, {{$category->description}}</p>
    @endforeach --}}

    {{-- <h2>{!!$subtitle!!}</h2>

    @if(strlen($title) > 5)
        Hello!
    @else
        Welcome!
    @endif
    <br>

    @foreach ($users as $user)
        {{$loop->iteration}} {{$user}}<br>
    @endforeach

    @forelse ($users as $user)
        {{$loop->iteration}} {{$user}}<br>
    @empty
        <p>No users!</p>
    @endforelse

    @php
        $a = 10;
        echo $a;
    @endphp --}}
@endsection
