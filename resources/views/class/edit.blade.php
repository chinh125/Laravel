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
<form action="{{ url('class/update',["id"=>$ct->id]) }}" method="post">
    @csrf
    <label for="">name</label>
    <input type="text" name="name" placeholder="name" value="{{$ct->name}}">
    <button type="submit">Save</button>
</form>
</body>
</html>
