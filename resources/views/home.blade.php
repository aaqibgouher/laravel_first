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
    <p>Hello {{ $name }}</p>        <!--that $name var is same as the , the key in the data array . so we have returned view of home and data as well . so now we can access them as well.-->

    <a href="{{ url('todo') }}">Todo Link</a>       <!--Here we have given url of /todo -->
    <h3>My todo list</h3>
    <ul>
        @foreach($todos as $todo)       <!--now here , we are looping through in that $todos key , and bringin the datas here.-->
        <li>{{ $todo }}</li>        
        @endforeach         <!--closed that foreach loop.-->
    </ul>
    <h3>users data</h3>
    <table>         <!--used a tables. And whatever the table, we will show in that table.-->
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>age</th>
        </tr>
        <!--In that $users key, we have stored an array , in which id, name,and is was the keys and corresponding of it , its value was there.So simply we are showing all of the datas in that tables.-->
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