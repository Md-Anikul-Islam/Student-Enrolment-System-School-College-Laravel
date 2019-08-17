@extends('layout')
@section('content')

<div class="card">
            <div class="card-body">
              <h2 class="card-title">Student Information Table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                       <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Roll</th>
                          <!-- <th>Father Name</th>
                          <th>Mother Name</th>
                          <th>Email</th> -->
                          <th>Phone</th>
                          <th>Adress</th>
                          <th>Image</th>
                          <th>Department</th>
                          <th>Admition Date</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    @foreach($bba_student_info as $v_student)

					<tbody>
						<tr>
								<td>{{$v_student->student_id}}</td>
								<td class="center">{{$v_student->student_name}}</td>
                                <td class="center">{{$v_student->student_roll}}</td>
							<!--<td class="center">{{$v_student->student_fathersname}}</td>
								<td class="center">{{$v_student->student_mothersname}}</td>
								<td class="center">{{$v_student->student_email}}</td> -->
								<td class="center">{{$v_student->student_phone}}</td>
								<td class="center">{{$v_student->student_address}}</td>
								<td><img src="{{URL::to($v_student->student_image)}}" style="height: 110px; width: 110px;"></td>
								<!-- <td class="center">{{$v_student->student_department}}</td> -->
								<td>
									@if($v_student->student_department == 1)
									<span class="label label-success">{{'CSE'}}</span>
									@elseif($v_student->student_department == 2)
									<span class="label label-success">{{'EEE'}}</span>
									@elseif($v_student->student_department == 3)
									<span class="label label-success">{{'BBA'}}</span>
									@elseif($v_student->student_department == 4)
									<span class="label label-success">{{'MBA'}}</span>
									@else
									<span class="label label-success">{{'Not Define'}}</span>
									@endif
								</td>
								<td class="center">{{$v_student->student_admissionyear}}</td>
						



							 <td>
                  <a class="btn btn-success" href="{{URL::to('/view_student/'.$v_student->student_id)}}">
                    <i class="halflings-icon white trash">view</i> 
                  </a>
                
                  <a class="btn btn-danger" href="{{URL::to('/delete_student/'.$v_student->student_id)}}" id="delete">
                    <i class="halflings-icon white trash">Delete</i> 
                  </a>
               </td>
                                    
							</tr>
							
                                   
						 </tbody>

                  @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection