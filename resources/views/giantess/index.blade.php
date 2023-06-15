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
                <td>Tên</td>
                <td>Mã giảng viên</td>
                <td>Tuổi</td>
                <td>Trình độ</td>
                <td>Lớp</td>
                <td>Hành động</td>
            </tr>
            @foreach($giantess as $item)
                <tr>
                    <td>{{ $item-> id }}</td>
                    <td>{{ $item-> ten }}</td>
                    <td>{{ $item-> ma_giangvien }}</td>
                    <td>{{ $item-> tuoi }}</td>
                    <td>{{ $item-> trinh_do }}</td>
                    <td>{{ $item-> lop }}</td>
                    <td>
                        <a href="{{ url("giantess/xoa",["id"=> $item->id]) }}">Xóa</a>
                        <a href="{{ url("giantess/sua",["id"=> $item->id]) }}">Sủa</a>
                    </td>
                </tr>
            @endforeach
        </table>
<a href="{{ url("giantess/them") }}">Thêm mới</a>
</body>
</html>
