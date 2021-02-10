@extends('layouts.default')

@section('content')
<form class="row g-3" action="registerer" method="POST">
    @csrf
    <div class="col-12">    
        <label for="inputName" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputName">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
</form>
@endsection