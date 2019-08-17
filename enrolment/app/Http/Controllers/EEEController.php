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

class EEEController extends Controller
{
     public function eee()
     {
       
     	$eee_student_info=DB::table('student_tbl')
     	             ->where(['student_department'=>2])
     	             ->get();


        $manage_student=view('admin.eee')
                      ->with('eee_student_info', $eee_student_info);
        return view('layout ')
                      ->with('admin.eee', $manage_student);
        return view('admin.eee');
     	

     }
}
