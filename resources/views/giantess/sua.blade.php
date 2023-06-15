<form action="{{ url("giantess/update", ["id"=>$giantess->id]) }}" method="post">
    @csrf

    <label for="">Tên</label>
    <input type="text" name="ten" placeholder="ten" value="{{ $giantess->ten }}">
    <label for="">Mã giảng viên</label>
    <input type="text" name="ma_giangvien" placeholder="name" value="{{ $giantess->ma_giangvien }}">
    <label for="">Tuổi</label>
    <input type="text" name="tuoi" placeholder="tuoi" value="{{ $giantess->tuoi }}">
    <label for="">Trình độ</label>
    <input type="text" name="trinh_do" placeholder="trinh_do" value="{{ $giantess->trinh_do }}">
    <label for="">Lớp</label>
    <input type="text" name="lop" placeholder="lop" value="{{ $giantess->lop }}">
    <button type="submit">Save</button>
</form>
