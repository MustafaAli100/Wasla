@extends('layouts.user')
@section('content')
<div class="main-panel">
		<div class="content">
			<div class="panel-header bg-primary-gradient">
				<div class="page-inner py-5">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold">Add Offer </h2>
							<h5 class="text-white op-7 mb-2"> Department Project <i class="fa fa- mr-2"> </i></li></h5>
						</div>
						<div class="ml-md-auto py-2 py-md-0">
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
		

                                <div class="modal-content">
                                         <div class="modal-header">
                                            </div>
                                            <section id="what-we-do">
                                                <div class="section-content">
                                                    <div class="container">
                            
                                                        <form action="{{route('project.add',$id)}}" method="POST"> 
															@csrf
															<div class="row">
																<div class="col-sm-12">
																	<div class="card-group">
																		<div class="card">
																			<div class="card-block">
																				<p>
																					<input type="number" class="form-control" placeholder="monye" name="oprice" />
																				</p>
																				<p>
																					<input type="number " class="form-control " placeholder="days " name="datatime"/>
								
																				</p>
																				<input type="submit" class="btn btn-secondary btn-round" value="Add Offer"/>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														 </form> 
                                                    </div>
                                                </div>
                            
                                            </section>
                            
                                        </div>

                                   @endsection