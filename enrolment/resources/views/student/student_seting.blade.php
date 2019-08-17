@extends('student_layout')
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
                        <h2 class="card-title">Student Update Profile</h2>
                          <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                          	@csrf
                          	 
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Email</label>
                                  <input type="mail" class="form-control p-input" name="student_email" placeholder="Enter Email" required="">
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Phone Number</label>
                                  <input type="number" class="form-control p-input" name="student_phone" placeholder="Enter Phone Number" required="">
                              </div>

                           

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" name="student_password" class="form-control p-input" id="exampleInputPassword1" placeholder="Password" required="">
                              </div>



                             <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
          </div>
@endsection




