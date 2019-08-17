@extends('student_layout')
<?php
  function covert_department($value)
  {


    $values=[

         1=>'CSE',
         2=>'EEE',
         3=>'BBA',
         4=>'MBA',
    ];
    return $values[$value];
  }
?> 
@section('content')


 <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-12">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student_info_one_by_one->student_image)}}" style="height: 110px; width: 110px;">
                  <p class="name">{{($student_info_one_by_one->student_name)}}</p>
                  <p class="designation">{{($student_info_one_by_one->student_roll)}}</p>
                  <a class="email" href="#">{{($student_info_one_by_one->student_email)}}</a>
                  <a class="number" href="#">{{($student_info_one_by_one->student_phone)}}</a>
                </div>
              </div>
              <div class="card mb-12">
                <div class="card-body overview">
                  <!-- <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul> -->
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>Student All Details Information are Here...................................................................</p>
                  </div>
                  <div class="info-links">
                    <a class="website" href="#">
                      <i class="icon-globe icon">Father Name:</i>
                      <span>{{($student_info_one_by_one->student_fathersname)}}</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-facebook icon">Mother Name:</i>
                      <span>{{($student_info_one_by_one->student_mothersname)}}</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Student Address:</i>
                      <span>{{($student_info_one_by_one->student_address)}}</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Student Department:</i>
                      <span>{{covert_department($student_info_one_by_one->student_department)}}</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Student Admition Date:</i>
                      <span>{{($student_info_one_by_one->student_admissionyear)}}</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
  


@endsection