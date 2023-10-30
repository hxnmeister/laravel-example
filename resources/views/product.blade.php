@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{$product->name}}</h1>
        <img src="{{$product->image}}" alt="Image of {{$product->slug}}" style="width: 400px; height: 300px">
        <p><b>Price: {{$product->price}}$</b></p>
        <p><b>Quantity: {{$product->quantity}}</b></p>
    </div>
@endsection