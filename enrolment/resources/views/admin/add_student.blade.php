@extends('layout')
@section('content')

 <div class="col-12 col-lg-6 grid-margin">
                <div class="card">
                	<p class="alert-success">
					<?php
					$messege=Session::get('messege');
					     if($messege)
							 {
								 echo $messege;
								 Session::put('messege',null);
							 }
					
					?>
					</p>
                    <div class="card-body">
                        <h2 class="card-title">Student Registation Form</h2>
                          <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
                          	@csrf
                          	  <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" placeholder="Enter Name" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="number" class="form-control p-input" name="student_roll" placeholder="Enter Roll" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Father Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathersname" placeholder="Enter Father Name" required="">
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Mother Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothersname" placeholder="Enter Mother Name" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Email</label>
                                  <input type="mail" class="form-control p-input" name="student_email" placeholder="Enter Email" required="">
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Phone Number</label>
                                  <input type="number" class="form-control p-input" name="student_phone" placeholder="Enter Phone Number" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleTextarea">Address</label>
                                  <textarea class="form-control p-input"  name="student_address" id="exampleTextarea" rows="3" required=""></textarea>
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" name="student_password" class="form-control p-input" id="exampleInputPassword1" placeholder="Password" required="">
                              </div>

                              <div class="form-group">
                                  <label>Upload Image</label>
                                  <div class="row">
                                  <div class="col-12">
                                    <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                    <input type="file" name="student_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" required="">
                                    <small id="fileHelp" class="form-text text-muted">Uplode your Stamp Size Photo</small>
                                  </div>
                                </div>
                             </div>
                                                   
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Department</label>
                                
                                  <select class="form-control p-input" name="student_department" required="">
                                  	<option>....</option>
                                  	<option value="1">CSE</option>
                                  	<option value="2">EEE</option>
                                  	<option value="3">BBA</option>
                                  	<option value="4">MBA</option>
                                  </select>
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Admition Year</label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" placeholder="Enter Admition Year" required="">
                              </div>




                             <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
          </div>
@endsection