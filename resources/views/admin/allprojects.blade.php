@extends('layouts.admin')

@section('content')
    <div class="main-panel">
		<div class="content">             
          <div class="panel-header bg-primary-gradient">
				<div class="page-inner py-5">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold">All Projects</h2>
							<h5 class="text-white op-7 mb-2"> Daily information about Projects in system</h5>
						</div>
						<!-- {{-- <div class="ml-md-auto py-2 py-md-0">	
							<a href="#" class="btn btn-secondary btn-round">Accept The projects</a>
					   
						</div> --}} -->
					</div>
				</div>
			</div>
                    
			<div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th> Title Project </th>
									<th> Owner Project</th>
                                    <th>Status</th>
                                    <th style="width: 10%"></th>
									<th style="width: 10%">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td>{{ $project->Pname}}</td>
									<td>{{ $project->user->firstname}}</td> 
									@if($project->is_approved==0)
									<td> not approved </td> 
									@else
									<td> approved </td> 
									@endif
									
									<td class="text-center">
									   <!-- start approved_status  -->
										@if($project->is_approved)
											<div class="d-inline-block"> <a href="{{ route('admin.project.is_approved', $project->id) }}" class="btn btn-sm btn-success" ><i class="fa fa-check-circle"></i> Not Approve</a></div>
										@else
									    	<div class="d-inline-block"> <a href="{{ route('admin.project.is_approved', $project->id) }}" class="btn btn-sm btn-success" ><i class="fa fa-check-circle"></i> Approve</a></div>
										@endif
										</td>
										<td>
										<div class="d-inline-block"> <a href="{{ route('admin.project.show', $project->id) }}" class="btn btn-sm btn-primary" ><i class="fa fa-eye"></i> Show</a></div>
									 <!-- end approved_status -->
									 </td>
									 <td>
									<form class="d-inline-block" action="{{ route('admin.project.delete', $project->id) }}" method="post">
                                	  {{csrf_field()}}
                                		<input name="_method" type="hidden" value="DELETE">
                               			<button type="submit" class="btn btn-danger" onclick="return confirm('Are your sure you wont to delete this project ?')"><i class="fa fa-close"> Delete</i></button>
                           			 </form>
									</td> 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="demo">
                    <ul class="pagination pg-primary text-center">
                        {{$projects->render()}}
                    </ul>
                </div>
            </div>
        </div>	
@endsection
