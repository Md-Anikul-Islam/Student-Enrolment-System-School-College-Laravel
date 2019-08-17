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

class CSEController extends Controller
{
     public function cse()
     {
       // return view('admin.cse');
     	$cse_student_info=DB::table('student_tbl')
     	             ->where(['student_department'=>1])
     	             ->get();


        $manage_student=view('admin.cse')
                      ->with('cse_student_info', $cse_student_info);
        return view('layout ')
                      ->with('admin.cse', $manage_student);
        return view('admin.cse');
     	

     }
}
