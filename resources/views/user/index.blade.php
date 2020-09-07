@extends("layouts.master")      <!--imported main layout our page.-->

@section("content")         <!--All of these will be inside the section and we also have to pass here yiled name.-->

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <h2>Users Email<a href="{{ route('add_user') }}" class="btn btn-default btn-small pull-right">Add Users</a></h2>

        <table id="my_table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

<script>

    $(document).ready(function(){
        $("#my_table").dataTable();
    })
</script>
@endsection
