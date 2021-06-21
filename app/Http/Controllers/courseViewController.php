<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class courseViewController extends Controller {
    public function index(){
        $courses = DB::select('select * from courses');
        return view('courses_view',['courses'=>$courses]);
    }
}