

<form action="{{ url('students/update',["id"=>$st->id]) }}" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" placeholder="name" value="{{ $st->name }}">
    <label for="">Age</label>
    <input type="text" name="age" placeholder="age" value="{{ $st->age }}">
    <label for="">Address</label>
    <input type="text" name="address" placeholder="address" value="{{ $st->address }}">
    <label for="">Phone</label>
    <input type="text" name="phone" placeholder="phone" value="{{ $st->phone }}">
    <label for="">Class_id</label>
    <input type="number" name="class_id" placeholder="clas_id" min="1" max="4" value="{{ $st->class_id }}">
    <button type="submit">Save</button>
</form>
