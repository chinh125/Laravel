<form action="{{ url("giantess/luu") }}" method="post">
    @csrf
    <label for="">Tên</label>
    <input type="text" name="ten" placeholder="ten" >
    <label for="">Mã giảng viên</label>
    <input type="text" name="ma_giangvien" placeholder="name" >
    <label for="">Tuổi</label>
    <input type="text" name="tuoi" placeholder="tuoi" >
    <label for="">Trình độ</label>
    <input type="text" name="trinh_do" placeholder="trinh_do" >
    <label for="">Lớp</label>
    <input type="text" name="lop" placeholder="lop" >
    <button type="submit">Save</button>
</form>
