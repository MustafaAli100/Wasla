@extends('layouts.app3')
@section('content')
	<div class="main-panel">
		<div class="content">
			<div class="panel-header bg-primary-gradient">
				<div class="page-inner py-5">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold">pharmacy</h2>
							<h5 class="text-white op-7 mb-2"> Department Project <i class="fa fa-clock mr-2"> </i> 15 minute ago  </li></h5>
						</div>
						<div class="ml-md-auto py-2 py-md-0">
                            <div class="panel panel-default">
                                <h3><a href="#myModal" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Make offer</a></h3>
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Make your offer</h4>
                                            </div>
                                            <section id="what-we-do">
                                                <div class="section-content">
                                                    <div class="container">
                            
                                                        {{-- <form action="/offer/{{ $p_id }}" method="POST"> --}}
															@csrf
															<div class="row">
																<div class="col-sm-12">
																	<div class="card-group">
																		<div class="card">
																			<div class="card-block">
																				<p>
																					<input type="number" class="form-control" placeholder="monye" name="offerprice" />
																				</p>
																				<p>
																					<input type="number " class="form-control " placeholder="days " name="offertime"/>
								
																				</p>
																				<input type="submit" class="btn bg-primary-gradient"/>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														{{-- </form> --}}
                                                    </div>
                                                </div>
                            
                                            </section>
                            
                                        </div>
                                    </div>
                            
                                </div>
                            
                                </h4>
                            </div> 
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
                                <i class=""> pharmacy system run the pharmacy business of buying, selling, storing and billing</i>
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
									<i> php laravelframework, android</i>
									<span class="skill" style="margin-left:20px; color:blue">       </span>
								</div>
                   			 </div>
                		</div> 
               		</div>
                	<div class="card shadow mt-3 mb-3 p-3">
				        <div class="card-body">
							<div class="d-flex">
								<div class="flex-1 ml-3 pt-1">
									<div><h4 class="text-uppercase fw-bold mb-1"> Project card </h4>
									 </div>
                                    <div class="col-sm-12 skills" >
										<span class="skills col-sm-6"> budget  : </span>
										<i class="col-sm-4"> 1000-2500 $1</i >
									</div><br>
									<div class="col-sm-12 skills" >
										<span class="skills col-sm-6">implementation: </span>
										<i class="col-sm-4" > 30 </i>
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
	