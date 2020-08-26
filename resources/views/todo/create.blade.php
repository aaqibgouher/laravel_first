@extends("layouts.master")

@section("content")

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <h1>Create Todo</h1>
        <form method="post" action="{{ url('todo/create') }}">
            @csrf()
            @if($error)
            <div class="alert alert-danger">{{ $error }}</div>
            @endif
            <div class="form-group">
                <label>Todo Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Is Completed</label><br>
                <input type="radio" name="is_completed" value="1"> Completed<br>
                <input type="radio" name="is_completed" value="0"> Not Completed
            </div>
            <input type="submit" class="btn btn-primary" name="Submit">
        </form>
    </div>
    <div class="col-sm-3"></div>
</div>

@endsection