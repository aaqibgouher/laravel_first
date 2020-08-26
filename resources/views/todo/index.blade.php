@extends("layouts.master")

@section("content")

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <h2>My todos list <a href="{{ route('todo_create') }}" class="btn btn-default btn-small pull-right">Add Todo</a></h2>
        @if($todos)
            <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item">{{ $todo->name }} 
                    <span class="badge">{{ $todo->is_completed ? 'Completed' : 'Not Completed' }}</span>
                    <span><a href="{{ route('todo_update', $todo->id) }}" class="pull-right">Edit</a></span>
                    <span><a href="{{ route('todo_delete', $todo->id) }}" class="pull-right">Delete</a></span>                </li>
            @endforeach
            </ul>
        @else

        @endif
    </div>
    <div class="col-sm-3"></div>
</div>

@endsection