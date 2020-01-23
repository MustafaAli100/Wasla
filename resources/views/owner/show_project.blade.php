
@extends('layouts.app4')
@section('content')
	<div class="main-panel">
		<div class="content">
			<div class="panel-header bg-primary-gradient">
				<div class="page-inner py-5">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold">{{ $singleproject->Pname }}</h2>
							<h5 class="text-white op-7 mb-2"> Department Project <i class="fa fa-clock mr-2"> </i> 1 minute ago  </li></h5>
						</div>
						<div class="ml-md-auto py-2 py-md-0">
							<a href="/createOffer/{{ $singleproject->id }}" class="btn btn-secondary btn-round"> <i class="fa fa-plus mr-2"> </i> Add offer </a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card shadow mt-3 mb-3 p-3">
				    <div class="card-body">
						<div class="d-flex">
							<div class="flex-1 ml-3 pt-1">
								<h4 class="text-uppercase fw-bold mb-1"> Project details  </h4>
                                <p class=""> {{$singleproject->description }}								</p>
							</div>
                        </div>
                    </div>
                </div>                
				<div class="col-12">
					<div class="card shadow mt-3 mb-3 p-3">
					    <div class="card-body">
							<div class="d-flex">
								<div class="flex-1 ml-3 pt-1">
									<h4 class="text-uppercase fw-bold mb-1"> Skills  </h4>
									<span class="skill" style="margin-left:20px; color:blue">   {{ $singleproject->skills }}    </span>
								</div>
                   			 </div>
                		</div> 
               		</div>
                	<div class="card shadow mt-3 mb-3 p-3">
				        <div class="card-body">
							<div class="d-flex">
								<div class="flex-1 ml-3 pt-1">
									<div><h4 class="text-uppercase fw-bold mb-1"> Project card </h4> </div>
                                    <div class="col-sm-12 skills" >
										<span class="skills col-sm-6"> budget  : </span>
										<i class="col-sm-4"> {{ $singleproject->price }}</i >
									</div><br>
									<div class="col-sm-12 skills" >
										<span class="skills col-sm-6">implementation: </span>
										<i class="col-sm-4" > {{ $singleproject->time }} </i>
									</div><br>
									<div class="col-sm-12 skills" >
										<span class="skills col-sm-6"> Average offers :  </span>
										<i class="col-sm-4"> $ 50.00 </i>
									</div><br>
									<div class="col-sm-12 skills" >
										<span class="skills col-sm-6"> Number of offers  :  </span>
										<i class="col-sm-4"> 5 </i>
									</div> <br>
								</div>
                            </div>
                        </div>
			    	</div>		
				</div>
			</div>
		</div>
	</div>
@endsection
	