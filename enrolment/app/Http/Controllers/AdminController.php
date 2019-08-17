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
class AdminController extends Controller
{
     public function admin_dashboard()
     {
       return view('admin.dashbord');
     }


   public function login_deshbord(Request $request)
   {
     
       $admin_email=$request->admin_email;
       $admin_password=md5($request->admin_password);

      
       $result=DB::table('admin_tbl')
               ->where('admin_email',$admin_email)
               ->where('admin_password',$admin_password)
               ->first();
      
             if($result)
             {
               Session::put('admin_name',$result->admin_name);
               Session::put('admin_id',$result->admin_id);
               return Redirect::to('/admin_dashboard');
               //echo "Anik";

             }
             else
             {
                 Session::put('messege','Email or Password Invalid');
                 return Redirect::to('/admin');
             }


   }









     public function student_dashboard()
     {
       return view('student.dashbord');
     }


     public function student_login_deshbord(Request $request)
     {
     
       $student_email=$request->student_email;
       $student_password=$request->student_password;

      
       $result=DB::table('student_tbl')
               ->where('student_email',$student_email)
               ->where('student_password',$student_password)
               ->first();

           
             if($result)
             {
               Session::put('student_email',$result->student_email);
               Session::put('student_id',$result->student_id);
               return Redirect::to('/student_dashboard');
               
             }
             else
             {
                 Session::put('messege','Email or Password Invalid');
                 return Redirect::to('/');
             }



   }
   

   //student logout
    public function log_out_student()
    {
      Session::flush();
      return Redirect::to('/');
    }

   //admin logout
    public function log_out()
    {
      Session::flush();
      return Redirect::to('/admin');
    }


    public function user_profile()
    {
       return view('admin.user_profile');
    }


    public function user_setting()
    {
       return view('admin.setting');
    }
}
