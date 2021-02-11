@extends('layouts.default')

@section('content')

<form class="row g-3" action="register" method="POST">
    @csrf
    <div class="col-12">    
        <label for="inputName" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputName" name="name">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="password">
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
    </div>
</form>
@endsection