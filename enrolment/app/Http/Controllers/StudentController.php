<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use File;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();


class StudentController extends Controller
{
    public function studentprofile()
    {
        //return view('student.view_student');
        $student_id=Session::get('student_id');
        $student_profile=DB::table('student_tbl')
                ->select('*')
                ->where('student_id', $student_id)
                ->first();


              // echo "<pre>";
              // print_r($student_profile);  
              // echo "</pre>";

        $manage_student_one_by_one=view('student.view_student')
                ->with('student_info_one_by_one', $student_profile);
        return view('student_layout')
                ->with('student.view_student',$manage_student_one_by_one);    
    }



    public function studentsetting()
    {
       return view('student.student_seting');

    }
}
