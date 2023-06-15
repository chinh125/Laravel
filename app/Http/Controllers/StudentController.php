<?php

namespace App\Http\Controllers;

use App\Models\hocsinh;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function all()
    {
        $student = hocsinh::all();
        return view('students.index',[
           'st' => $student
        ]);
    }
    public function add()
    {
        return view('students.formadd');
    }

    public function save(Request $request)
    {
        hocsinh::create([
            "name"=> $request->get('name'),
            "age" =>$request->get('age'),
            "address" =>$request->get('address'),
            "phone" =>$request->get('phone'),
            "class_id" =>$request->get('class_id')
        ]);
        return redirect('students/list');
    }
    public function delete($id)
    {
        $n = hocsinh::findOrFail($id);
        $n->delete();
        return redirect('students/list');
    }

    public function edit($id)
    {
        $n = hocsinh::findOrFail($id);
        return view('students.formedit',[
           "st"=>$n
        ]);
    }
    public function update(Request $request,$id){
        $st = hocsinh::findOrFail($id);
        $st->update([
           "name"=>$request->get('name'),
            "age" =>$request->get('age'),
            "address" =>$request->get('address'),
            "phone" =>$request->get('phone'),
            "class_id" =>$request->get('class_id')
        ]);
        return redirect('students/list');
    }
}
