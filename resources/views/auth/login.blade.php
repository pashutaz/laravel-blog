@extends('layouts.master')

@section('content')
    <h1>Login</h1>

    <form action="/login" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password" name="password" id="password" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

        @include('components.errors')

    </form>
@endsection