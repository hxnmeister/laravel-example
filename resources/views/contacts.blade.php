@extends('templates.main')
@section('content')
    <h1>Contacts</h1>

    <form action="" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea name="message" id="message" cols="30" rows="4" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary mt-3">Send</button>
    </form>
@endsection