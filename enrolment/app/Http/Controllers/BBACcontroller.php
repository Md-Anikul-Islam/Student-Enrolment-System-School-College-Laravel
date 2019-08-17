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

class BBACcontroller extends Controller
{
     public function bba()
     {
       
     	$bba_student_info=DB::table('student_tbl')
     	             ->where(['student_department'=>3])
     	             ->get();


        $manage_student=view('admin.bba')
                      ->with('bba_student_info', $bba_student_info);
        return view('layout ')
                      ->with('admin.bba', $manage_student);
        return view('admin.bba');
     	

     }
}
