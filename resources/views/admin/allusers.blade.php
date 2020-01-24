@extends('layouts.admin') @section('content')
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
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th> Username </th>
                                    <th> E-mail</th>
									<th> Phone </th>
									<th> Address</th>
                                    <th>type</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->firstname}}</td>
									<td>{{$user->email}}</td>
									<td>{{ $user->phone}}</td>
									<td>{{ $user->address}}</td> 
									<td> Owner Projects </td> 
									<td>
									<form class="d-inline-block" action="{{ route('admin.user.delete', $user->id) }}" method="post">
                                	 {{csrf_field()}}
                                		<input name="_method" type="hidden" value="DELETE">
                               			<button type="submit" class="btn btn-danger" onclick="return confirm('Are your sure you wont to delete this user ?')"><i class="fa fa-remove"> Delete</i></button>
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
                        {{$users->render()}}
                    </ul>
                </div>
            </div>
        </div>

        @endsection