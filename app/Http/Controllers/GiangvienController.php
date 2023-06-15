<?php

namespace App\Http\Controllers;

use App\Models\giangvien;
use Illuminate\Http\Request;

class GiangvienController extends Controller
{
    public function all()
    {
        $giantess = giangvien::all();
        return view('giantess.index',[
            "giantess" => $giantess
        ]);
    }
    public function addGiantess()
    {
        return view('giantess.them');
    }
    public function saveGiantess(Request $request){
        giangvien::create([
            "ten" => $request->get('ten'),
            "ma_giangvien" => $request->get('ma_giangvien'),
            "tuoi" => $request->get('tuoi'),
            "trinh_do" => $request->get('trinh_do'),
            "lop" => $request->get('lop')
        ]);
        return redirect('giantess/list');
    }
    public function deleteGiantess($id)
    {
        $giantess = giangvien::findOrFail($id);
        $giantess->delete();
        return redirect("giantess/list");
    }
    public function editGiantess($id){
        $giantess = giangvien::findOrFail($id);
        return view('giantess.sua',[
           "giantess"=>$giantess
        ]);
    }
    public function updateGiantess(Request $request,$id)
    {
        $giantess = giangvien::findOrFail($id);
        $giantess->update([
            "ten" => $request->get('ten'),
            "ma_giangvien" => $request->get('ma_giangvien'),
            "tuoi" => $request->get('tuoi'),
            "trinh_do" => $request->get('trinh_do'),
            "lop" => $request->get('lop')
        ]);
        return redirect('giantess/list');
    }
}
