@extends('layouts.app3')
@section('content')
<div class="main-panel">
			<div class="content">
				<div class="panel-header ">
					<div class="page-inner py-5 bg-primary-gradient">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">programmers Offers</h2>
								<h5 class="text-white op-7 mb-2">See The programmers Offers on your project and then choose the right programmer</h5>
							</div>
						</div>
					</div>
				     <div class="card-body">
					    <div class=" card-title fw-mediumbold">The Offers</div>
						    <div class="card-list">
                                <div class=" shadow item-list">
									<div class="avatar">
										<img src=desgin/img/team/5.jpg alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    {{-- @foreach ($offers as $offer) --}}
                                        
                                    
										<div class="info-user ml-3">
                                        <div class="username"></div>
                                                <div class="username">Ali Ahmed</div>
												<div class="status">Graphic Designer
                                                    <span class="text-muted pl-3"> 25</span>
                                                    <span class="text-muted"> day</span>
                                                    <span class="text-muted pl-3"> </span>
                                                    <span class="text-muted ">3000$1 </span>
                                                </div>
                                        {{-- @endforeach --}}
                                            </div>
                                            <a href="/confirm">
                                                <button type="submit" class="btn btn-waring">Accept</button>
                                            </a>
                                            
                                        </div> 
                                        <div class=" shadow item-list">
											<div class="avatar">
												<img src="desgin/img/team/2.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											    <div class="info-user ml-3">
												    <div class="username">mohamed Ahmed</div>
												    <div class="status">Graphic Designer
											
                                                        <span class="text-muted pl-3"> 30 </span>
                                                        <span class="text-muted"> day</span>
                                                        <span class="text-muted pl-3"> 12000 </span>
                                                        <span class="text-muted ">$ </span>
                                                </div>
                                             </div>
                                                <button type="submit" class="btn btn-waring">Accept</button>
                                         </div>
                                    <div class=" shadow item-list">
											<div class="avatar">
												<img src="desgin/img/team/3.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											    <div class="info-user ml-3">
												    <div class="username">malaz abdoallh</div>
												    <div class="status">Graphic Designer
											
                                                        <span class="text-muted pl-3"> 15 </span>
                                                        <span class="text-muted"> day</span>
                                                        <span class="text-muted pl-3"> 3500 </span>
                                                        <span class="text-muted ">$ </span>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-waring">Accept</button>
                                         </div>
                                    <div class=" shadow item-list">
											<div class="avatar">
												<img src="desgin/img/team/1.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											    <div class="info-user ml-3">
												    <div class="username">mona ali</div>
												    <div class="status">Graphic Designer
											
                                                        <span class="text-muted pl-3"> 50 </span>
                                                        <span class="text-muted"> day</span>
                                                        <span class="text-muted pl-3"> 2000 </span>
                                                        <span class="text-muted ">$ </span>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-waring">Accept</button>
                                         </div>
                                    {{-- <div class=" shadow item-list">
											<div class="avatar">
												<img src="img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											    <div class="info-user ml-3">
												    <div class="username">Ali Ahmed</div>
												    <div class="status">Graphic Designer
											
                                                        <span class="text-muted pl-3"> 15 </span>
                                                        <span class="text-muted"> day</span>
                                                        <span class="text-muted pl-3"> 300 </span>
                                                        <span class="text-muted ">$ </span>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-waring">Accept</button>
                                         </div>
                            </div> --}}
                        </div>
@endsection