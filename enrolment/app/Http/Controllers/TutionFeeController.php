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

class TutionFeeController extends Controller
{
     public function Tution_Fee()
     {
       return view('admin.Tution_Fee');
     }
}
