<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student_login');
});



Route::get('/admin', function () {
    return view('admin.admin_login');
});


//admin**********************************************************
//admin login
Route::post('/adminlogin','AdminController@login_deshbord');
//after login went to dashbord
Route::get('/admin_dashboard','AdminController@admin_dashboard');





//admin logout
Route::get('/logout','AdminController@log_out');
//admin profile
Route::get('/user_profile','AdminController@user_profile');
//admin satting
Route::get('/user_setting','AdminController@user_setting');





//Normal Student*************************************************
//student login
Route::post('/studentlogin','AdminController@student_login_deshbord');
Route::get('/student_dashboard','AdminController@student_dashboard');
//student rofile
Route::get('/student_profile','StudentController@studentprofile');
//student logout
Route::get('/student_logout','AdminController@log_out_student');
//student satting
Route::get('/student_setting','StudentController@studentsetting');


//student info*******************************************************
//add student
Route::get('/add_student','Add_StudentController@add_student');
Route::post('/save_student','Add_StudentController@savestudent');
//all student
Route::get('/all_student','All_StudentController@all_student');
//Delete Student
Route::get('/delete_student/{student_id}','All_StudentController@delete_student');
//View Student
Route::get('/student_view/{student_id}','All_StudentController@student_view');


//Teacher info*******************************************************
//add Teacher
Route::get('/add_teacher','Add_TeacherController@add_teacher');
Route::post('/save_teacher','Add_TeacherController@saveteacher');
//all Teacher
Route::get('/all_teacher','All_TeacherController@all_teacher');
//Delete Teacher
Route::get('/delete_teacher/{teacher_id}','All_TeacherController@delete_teacher');



//Subject info*******************************************************
//CSE
Route::get('/cse','CSEController@cse');
//BBA
Route::get('/bba','BBACcontroller@bba');
//EEE
Route::get('/eee','EEEController@eee');
//MBA
Route::get('/mba','MBAController@mba');


//other***********************************************************
//Tution Fee
Route::get('/Tution_Fee','TutionFeeController@Tution_Fee');
//Result
Route::get('/Result','ResultController@Result');
