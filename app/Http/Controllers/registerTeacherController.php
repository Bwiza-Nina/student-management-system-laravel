<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;
use Illuminate\Support\Facades\DB;

class registerTeacherController extends Controller
{
    public function index()
    {
        return view('registerTeacher');
    }

    public function validation(Request $request)
    {
        $validate = $request->validate([
            'Teacher_fName' => "required|min:4|max:100",
            'Teacher_lName' => "required|min:4|max:100",
            'email' => "required",
            'address' => "required|min:4|max:100"
        ]);
        if (!$validate) {
            return back();
        } else {
            $insertNewTeacher = new Teachers;
            $insertNewTeacher->First_Name = $request->Teacher_fName;
            $insertNewTeacher->Last_Name = $request->Teacher_lName;
            $insertNewTeacher->Email = $request->email;
            $insertNewTeacher->Address = $request->address;

            $insertNewTeacher->save();
            return redirect('/success');
        }
    }

    public function success(){
        return view('loginTeacherView');
    }

    public function loginCheck(Request $request){
       $dbSelect =  DB::select("SELECT * FROM teachers WHERE Email = '$request->email'");
       if(!$dbSelect){
           return back();
       }
       else{
           session([
               "id"=>$dbSelect[0]->id
           ]);
           return view('logged');
       }
    }
}
