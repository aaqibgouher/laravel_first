@extends("layouts.master")

@section("content")

<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
    <h2>Add User</h2>
    <form method="post" action="{{ url('user/add') }}">
        @csrf()
        @if($error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endif
        <div class="form-group">
            <label>Name :</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
        </div>
        <div class="form-group">
            <label>Email :</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
        </div>
        <input type="submit" class="btn btn-primary" name="Submit">

    </form>

    </div>
</div>

@endsection