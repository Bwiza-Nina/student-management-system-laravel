<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Courses;

class RegisterController extends Controller
{
    public function index(){
        $teachers = DB::select("select * from teacher");
        return view('registerCourseView', ["teachers"=>$teachers]);
    }

    public function validation(Request $request){
         $request->validate([
             "Course_Name"=>"required|max:100|min:3",
             "Teacher" => "required|max:100",
             "periods" => "required|"
         ]);

         $insertNewCourse = new Courses;

         $insertNewCourse->Course = $request->Course_Name;
         $insertNewCourse->Teacher = $request->Teacher;
         $insertNewCourse->Periods = $request->periods;

         $insertNewCourse->save();


         return back();
    }

}
