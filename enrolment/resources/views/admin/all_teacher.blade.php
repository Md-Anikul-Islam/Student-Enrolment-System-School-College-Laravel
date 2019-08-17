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
                         
                          <th>Name</th>
                          <th>Serial No</th>                       
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Adress</th>
                          <th>Image</th>
                          <th>Department</th>
                          <th>Join Date</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    @foreach($all_teacher_info as $v_teacher)

					<tbody>
						<tr>
								
								<td class="center">{{$v_teacher->teacher_name}}</td>
                                <td class="center">{{$v_teacher->teacher_serial_no}}</td>
							
								<td class="center">{{$v_teacher->teacher_email}}</td>
								<td class="center">{{$v_teacher->teacher_phone}}</td>
								<td class="center">{{$v_teacher->teacher_address}}</td>
								<td><img src="{{URL::to($v_teacher->teacher_image)}}" style="height: 110px; width: 110px;"></td>
							
								<td>
									@if($v_teacher->teacher_department == 1)
									<span class="label label-success">{{'CSE'}}</span>
									@elseif($v_teacher->teacher_department == 2)
									<span class="label label-success">{{'EEE'}}</span>
									@elseif($v_teacher->teacher_department == 3)
									<span class="label label-success">{{'BBA'}}</span>
									@elseif($v_teacher->teacher_department == 4)
									<span class="label label-success">{{'MBA'}}</span>
									@else
									<span class="label label-success">{{'Not Define'}}</span>
									@endif
								</td>
								<td class="center">{{$v_teacher->teacher_join_date	}}</td>
						



							 <td>
                 
                
                  <a class="btn btn-danger" href="{{URL::to('/delete_teacher/'.$v_teacher->teacher_id)}}" id="delete">
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