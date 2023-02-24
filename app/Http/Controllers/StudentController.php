<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
 public function list(){
        $data = Student::all();
     return view("welcome",["data"=> $data]);

 }
    public function createStudent(){
        return view("/create");
    }

    public function create(Request $request){
    $request->validate([
        "name"=>"required|string",
        "age"=>"required|numeric|min:2",
        "address"=>"required|string|",
        "telephone"=>"required|string|min:10",
        ],[
        "required"=>"Vui long nhap thong tin",
        "string"=>"Phai nhap 1 chuoi van ban",
        "min"=>"Phai nhap :attribute toi thieu :min",
    ]);
        try {
        $student= Student::create([
            "name"=>$request->get("name"),
            "age"=>$request->get("age"),
            "address"=>$request->get("address"),
            "telephone"=>$request->get("telephone"),

        ]);
        return redirect()->to("/")->with("success","Them san pham thanh cong");
    }catch (\Exception $e){}
return redirect()->back()->with("error","Them san pham khong thanh cong");
    }
}
