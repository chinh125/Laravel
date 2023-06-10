<?php

namespace App\Http\Controllers;

use App\Models\lophoc;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function all()
    {
        $ct = lophoc::all();
        return view('class.index',[
            "class"=>$ct
        ]);
    }
    public function add()
    {
        return view('class.form');
    }
    public  function save(Request $request)
    {
        lophoc::create([
            "name"=>$request->get("name")
        ]);
        return redirect()->to('list');
    }
    public function delete($id)
    {
        $ct = lophoc::findOrFail($id);
        $ct->delete();
        return redirect()->to('list');
    }
    public function edit($id)
    {
        $ct = lophoc::findOrFail($id);
        return view("class.edit",[
            "ct" => $ct
        ]);
    }

    public function update(Request $request,$id)
    {
        $ct = lophoc::findOrFail($id);
        $ct->update([
            "name"=>$request->get("name")
        ]);
        return redirect('list');
    }
}
