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

class MBAController extends Controller
{
      public function mba()
     {
       
     	$mba_student_info=DB::table('student_tbl')
     	             ->where(['student_department'=>4])
     	             ->get();


        $manage_student=view('admin.mba')
                      ->with('mba_student_info', $mba_student_info);
        return view('layout ')
                      ->with('admin.mba', $manage_student);
        return view('admin.mba');
     	

     }
}
