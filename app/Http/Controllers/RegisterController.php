<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Course;

class RegisterController extends Controller
{
    public function index(){
        $teachers = DB::select("select * from teacher");
        return view('registerCourseView', ["teachers"=>$teachers]);
    }

    public function validation(Request $request){
         $request->validate([
             "Course_Name"=>"required|max:100|min:4",
             "Teacher" => "required|max:100"
         ]);

         $insertNewCourse = new Course;

         $insertNewCourse->Course = $request->Course_Name;
         $insertNewCourse->Teacher = $request->Teacher;

         $insertNewCourse->save();


         return back();
    }

}
