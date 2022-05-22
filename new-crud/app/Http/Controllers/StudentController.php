<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    public function index(){

        $students=StudentModel::all();
        return view('index',compact('students'));
    }

    public function store(Request $request){

        StudentModel::insert([
            'student_name' =>$request->student_name,
            'student_father' =>$request->student_father,
            'student_address' =>$request->student_address,
            'student_number' =>$request->student_number,

        ]);
        return redirect()->back();
    }
    public function edit($id)
    {
        $studentEdit = StudentModel::find('id',$id);
        return view('edit',compact('studentEdit'));
    }

    public function delete($id)
    {
        $delete = StudentModel::find($id);
        $delete->delete();
        return redirect()->back();
    }


}
