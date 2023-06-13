

<form action="{{ url('students/save') }}" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" placeholder="name">
    <label for="">Age</label>
    <input type="text" name="age" placeholder="age">
    <label for="">Address</label>
    <input type="text" name="address" placeholder="address">
    <label for="">Phone</label>
    <input type="text" name="phone" placeholder="phone">
    <label for="">Class_id</label>
    <input type="number" name="class_id" placeholder="clas_id" min="1" max="4">
    <button type="submit">Save</button>
</form>
