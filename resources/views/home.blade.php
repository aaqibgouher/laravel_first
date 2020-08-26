<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel First App</title>
</head>
<body>
    <h1>Hello from laravel</h1>
    <p>Hello {{ $name }}</p>

    <a href="{{ url('todo') }}">Todo Link</a>
    <h3>My todo list</h3>
    <ul>
        @foreach($todos as $todo)
        <li>{{ $todo }}</li>
        @endforeach
    </ul>
    <h3>users data</h3>
    <table>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>age</th>
        </tr>
        @if($users)
            @foreach($users as $user)
            <tr>
                <td>{{ $user["id"] }}</td>
                <td>{{ $user["name"] }}</td>
                <td>{{ $user["age"] }}</td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="3">No users data</td>
            </tr>
        @endif
    </table>
</body>
</html>