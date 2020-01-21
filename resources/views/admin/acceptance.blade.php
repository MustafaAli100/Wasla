@extends('layouts.app3')

@section('content') 
    <div class="main-panel">
		<div class="content">
            <div class="panel-header bg-primary-gradient">
				<div class="page-inner py-5">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold"> Accept </h2>
							<h5 class="text-white op-7 mb-2"> Accept The New projects in system</h5>
						</div>
					</div>
				</div>
			</div>
                <div class="col-12 ">
                    @if (count($projects) > 0)
                        @foreach ($projects as $project)
                        <div class="card shadow mt-3 mb-3 p-3 bg--gradient">
                            <div class="card-body  bg--gradient">
                                <div class="d-flex">
                                    <div class="flex-1 ml-3 pt-1 col-md-6">
                                        <h6 class=" text-uppercase fw-bold mb-1"><a herf="#">{{ $project->Pname }}</a> </h6>
                                        <div class="username"><a herf="#">Ali Ahmed</a></div>
                                        <span class="text-muted pl-0"> 15 </span>
                                        <span class="text-muted"> day</span>
                                        <span class="text-muted pl-3"> 300 </span>
                                        <span class="text-muted ">$ </span>
                                        <span class="text-muted pl-3">
                                            <small class="text-muted pl-3">1 Day Ago</small>
                                        </span>
                                    </div>
                                    <div class="col-md-3"> 
                                        <div class="demo-icon">
                                            <div class="icon-class btn btn-danger">
                                                <a href="#" style="color:#fff">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-3"> 
                                        <div class="icon-class btn btn-success">
                                            <a href="#" style="color:#fff">Accept</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="d-flex justify-content-center mt-5">
                            <h2 class="mt-5 font-weight-bold">No Projects were Added</h2>
                        </div>
                    @endif                    
                </div>  
		</div>  
    <div>
  @endsection

