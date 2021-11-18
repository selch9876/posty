@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('register')}}" method="POST">
            <div class="mb-4">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-4">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-4">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-4">
              <label for="password_confirmation" class="form-label">Password Again</label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection