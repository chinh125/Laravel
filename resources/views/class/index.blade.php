<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Action</td>
    </tr>

        @foreach($class as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <a href="{{ url('class/delete',["id"=>$item->id]) }}">Delete</a>
                <a href="{{ url('class/edit',["id"=>$item->id]) }}">Edit</a>
            </td></tr>
        @endforeach

</table>
<button><a href="{{url("class/add")}}">ADD</a></button>
</body>
</html>
