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

class Add_TeacherController extends Controller
{
     public function add_teacher()
     {
       return view('admin.add_teacher');
     }

     public function saveteacher(Request $request)
     { 
      
          $data=array();
          $data['teacher_name']=$request->teacher_name;
          $data['teacher_serial_no']=$request->teacher_serial_no;
          $data['teacher_email']=$request->teacher_email;
          $data['teacher_phone']=$request->teacher_phone;
          $data['teacher_address']=$request->teacher_address;
          $data['teacher_password']=$request->teacher_password;
          $data['teacher_department']=$request->teacher_department;
          $data['teacher_join_date']=$request->teacher_join_date;
       


          $image=$request->file('teacher_image');
 
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
             $data['teacher_image']=$image_url;

             $result=DB::table('teacher_tbl')->insert($data);

             Session::put('messege','Data are Succesully Inserted');
             return Redirect::to('/add_teacher');

          }
          }

            $data['teacher_image']='';
            $result=DB::table('teacher_tbl')->insert($data);
            Session::put('messege','Data are Succesully Inserted');
            return Redirect::to('/add_teacher');

       }

}
