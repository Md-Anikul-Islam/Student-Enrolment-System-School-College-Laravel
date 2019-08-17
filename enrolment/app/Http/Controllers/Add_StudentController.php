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

class Add_StudentController extends Controller
{

	 public function add_student()
     {
       return view('admin.add_student');
     }
      
	 public function savestudent(Request $request)
     { 
      
          $data=array();
          $data['student_name']=$request->student_name;
          $data['student_roll']=$request->student_roll;
          $data['student_fathersname']=$request->student_fathersname;
          $data['student_mothersname']=$request->student_mothersname;
          $data['student_email']=$request->student_email;
          $data['student_phone']=$request->student_phone;
          $data['student_address']=$request->student_address;
          $data['student_password']=$request->student_password;
          $data['student_department']=$request->student_department;
          $data['student_admissionyear']=$request->student_admissionyear;


          $image=$request->file('student_image');
 
          if($image)
          {
             $image_name=str_random(20);
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/st_img/';
             $image_url= $upload_path.$image_full_name;
             $success=$image->move($upload_path,$image_full_name);
          if($success)
          {
             $data['student_image']=$image_url;

             $result=DB::table('student_tbl')->insert($data);

             Session::put('messege','Data are Succesully Inserted');
             return Redirect::to('/add_student');

          }
          }

            $data['student_image']='';
            $result=DB::table('student_tbl')->insert($data);
            Session::put('messege','Data are Succesully Inserted');
            return Redirect::to('/add_student');

       }


    
    
}
