@extends('layouts.app3')
@section('content')
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Added and View your project</h2>
							</div>
							{{-- <div class="ml-md-auto py-2 py-md-0">
								<a href="/addproject" class="btn btn-secondary btn-round">Added projects</a>
							</div> --}}
						</div>
					</div>
				</div>
				<div class="col-12">
					<!-- <h1 class="m-3 p-3 d-flex justify-content-center bg-primary">Added project</h1> -->
					@if (count($projects)>0)
						
						@foreach ($projects as $project)
						@if (!$project->is_approved)
						<a class="show" href="#" >
							<div class="card shadow mt-3 mb-3 p-3">
								<div class="card-body">
									<div class="d-flex">
										<div class="flex-1 ml-3 pt-1">
											<a class="show" href="/showProject/{{$project->id}}" >
												<h6 class="text-uppercase fw-bold mb-1">{{ $project->Pname }} </h6>
											</a>
											<span class="badge badge-count p-0"> 4 </span>

											<a class="show" href="/mak" >
												<span class="text-muted">offers</span>
											</a>
											<span class="text-muted pl-3"> {{ $project->time }} </span>
											<span class="text-muted"> day</span>
											<span class="text-muted pl-3"> {{ $project->price }} </span>
											<span class="text-muted ">$ </span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">8:40 PM</small>
										</div>
									</div>
								</div>
							</div>
							@endif
					@endforeach
					  
					@else
						<div class="d-flex justify-content-center mt-5">
							<h3 class="mt-5">
								No projects were added
							</h3>
						</div>
					@endif
				</div>
			</div>
		</div>
		</div>
		
			
	@endsection