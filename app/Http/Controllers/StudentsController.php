<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function index(){
        return view('registerStudent');
    }
    public function insertStudent(Request $request){
        $request->validate([
            "student_name"=>"required|max:50|min:3",
            "student_grade"=>"required|max:2",
            "academic_year"=>"required|max:4",
        ]);
        $insertStudent=new Student;
        $insertStudent->student_name=$request->student_name;
        $insertStudent->student_grade=$request->student_grade;
        $insertStudent->academic_year=$request->academic_year;
        $insertStudent->teacher_id=1;

        $saveSt = $insertStudent->save();

        return back();
    }
}
