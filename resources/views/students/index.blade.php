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
        <td>Age</td>
        <td>Address</td>
        <td>Phone</td>
        <td>Class id</td>
    </tr>
    @foreach($st as $item)
        <tr>
            <td>{{ $item -> id }}</td>
            <td>{{ $item -> name }}</td>
            <td>{{ $item -> age }}</td>
            <td>{{ $item -> address }}</td>
            <td>{{ $item -> phone }}</td>
            <td>{{ $item -> class_id }}</td>
            <td>
                <a href="{{ url('students/delete',["id"=>$item->id]) }}">Delete</a>
                <a href="{{ url('students/edit',["id"=>$item->id]) }}">Edit</a>
            </td>
        </tr>
    @endforeach

</table>
<button><a href="{{url("students/add")}}">ADD</a></button>
</body>
</html>
