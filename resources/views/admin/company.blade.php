@extends('layouts.app3')
@section('content')
	<div class="main-panel">
		<div class="content">
			<div class="panel-header bg-primary-gradient">
				<div class="page-inner py-5">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold">All Users</h2>
							<h5 class="text-white op-7 mb-2"> Daily information about users in system</h5>
						</div>
						<!-- {{-- <div class="ml-md-auto py-2 py-md-0">	
							<a href="#" class="btn btn-secondary btn-round">Accept The projects</a>
					   
						</div> --}} -->
					</div>
				</div>
			</div>

				<div class="row" style="background:#e1e1e1">
					 <div class="col-md-4">
                         <div class="card">
                            <div class="card-body">
                                <div class="card-header">
                                    <div class="card-title">P Company</div>
                                  </div>
                                  <div class="card-list">
                                        <div class="item-list">
                                             <div class="avatar">
                                                <img src="assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                                             </div>
                                                        <div class="info-user ml-3">
                                                            <div class="username">CMOc</div>
                                                            <div class="status">Graphic Designer</div>
                                                        </div>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                         <div class="item-list">
                                                        <div class="avatar">
                                                            <img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
                                                        </div>
                                                        <div class="info-user ml-3">
                                                            <div class="username">REOO</div>
                                                            <div class="status">Programmer</div>
                                                        </div>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                         <div class="item-list">
                                                        <div class="avatar">
                                                            <img src="assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
                                                        </div>
                                                        <div class="info-user ml-3">
                                                            <div class="username">TA</div>
                                                            <div class="status">Front End Designer</div>
                                                        </div>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                       
                                </div>
                            </div>
                         </div>
                                    
                    </div>
				</div>
		</div>
		
@endsection