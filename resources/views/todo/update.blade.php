@extends("layouts.master")

@section("content")

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <h1>update Todo ({{ $todo->id }})</h1>
        <form method="post" action="{{ route('todo_update', $todo->id) }}">
            @csrf()
            @if($error)
            <div class="alert alert-danger">{{ $error }}</div>
            @endif
            <div class="form-group">
                <label>Todo Name</label>
                <input type="text" class="form-control" name="name" value="{{ $todo->name }}" required>
            </div>
            <div class="form-group">
                <label>Is Completed</label><br>
                <input type="radio" name="is_completed" value="1" {{ $todo->is_completed ? 'checked' : '' }}> Completed<br>
                <input type="radio" name="is_completed" value="0" {{ !$todo->is_completed ? 'checked' : '' }}> Not Completed
            </div>
            <input type="submit" class="btn btn-primary" name="Submit">
        </form>
    </div>
    <div class="col-sm-3"></div>
</div>

@endsection