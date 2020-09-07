@extends("layouts.master")      <!--imported main layout our page.-->

@section("content")     <!--All of these will be inside the section and we also have to pass here yiled name.-->

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <h2>My todos list <a href="{{ route('todo_create') }}" class="btn btn-default btn-small pull-right">Add Todo</a></h2>
        @if($todos)             <!--that todos is same which is the key of the data array. So we are checking that , if it is true i.e is there any info or not, if true then only go further else nothing.-->
            <ul class="list-group">     <!--inside ul tag , we are showing result in li tag , also we are looping in that key . that key is an array.-->
            @foreach($todos as $todo)
                <li class="list-group-item">{{ $todo->name }}       <!--name of the todo, and then is completed or not, also edit and delete link ,we have gievn.-->
                    <span class="badge">{{ $todo->is_completed ? 'Completed' : 'Not Completed' }}</span>
                    <span><a href="{{ route('todo_update', $todo->id) }}" class="pull-right">Edit</a></span>
                    <span><a href="{{ route('todo_delete', $todo->id) }}" class="pull-right">Delete</a></span></li>
            @endforeach
            </ul>
        @else

        @endif
    </div>
    <div class="col-sm-3"></div>
</div>

@endsection         <!--section has ended.-->