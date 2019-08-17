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

class All_StudentController extends Controller
{

   public function all_student()
   {
      
       $Student_info=DB::table('student_tbl')
                              ->get();
       $manage_student=view('admin.all_student')
                      ->with('all_student_info', $Student_info); 
       return view('layout')
                      ->with('admin.all_studen', $manage_student);

      
   }


   public function delete_student($student_id)
    {
                
                 DB::table('student_tbl')
                ->where('student_id',$student_id)
                ->delete();

                Session::get('messege','Data Delete Succesully');
                return Redirect::to('/all_student');

    }


    public function student_view($student_id)
    {
                
              // return view('admin.student_view');


        $student_info_one_by_one=DB::table('student_tbl')
                ->where('student_id', $student_id)
                ->first();

              // echo "<pre>";
              // print_r($student_info_all);  
              // echo "</pre>";


        $manage_student_one_by_one=view('admin.student_view')
                ->with('student_info_one_by_one', $student_info_one_by_one);
        return view('layout')
                ->with('admin.student_view',$manage_student_one_by_one);    

    }
    
}
