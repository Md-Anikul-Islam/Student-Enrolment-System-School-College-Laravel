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

class All_TeacherController extends Controller
{
   public function all_teacher()
   {
      
       $teacher_info=DB::table('teacher_tbl')
                              ->get();
       $manage_teacher=view('admin.all_teacher')
                      ->with('all_teacher_info', $teacher_info);
       return view('layout ')
                      ->with('admin.all_teacher', $manage_teacher);

      
   }


   public function delete_teacher($teacher_id)
    {
                
                 DB::table('teacher_tbl')
                ->where('teacher_id',$teacher_id)
                ->delete();

                Session::get('messege','Data Delete Succesully');
                return Redirect::to('/all_teacher');

    }
}
