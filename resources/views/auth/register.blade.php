@extends('layouts.hnav')
@section('content')
<div class="container d-flex justify-content-center" style="direction: ltr;">
    <div class="modal-dialog text-center">
       <div class="col-sm-12 main-section">
         <div class="modal-content">
           <p class="h2 text-center">Register</p>
           <div class=" text-center">
                   <h4> Create New Account </h4>
                   <p class="t-large-d"> Do you have any account ? <a href="{{url('/login')}}"> Login </a></p>
           </div>
                <!-- <div class="card-header">{{ __('Register') }}</div> -->
                    <form method="POST" class="form-horizontal" action="{{ route('register') }}">
                        @csrf
                        <fieldset>
                            <!-- first name  -->
                            <div class="form-group" >
                             <!-- <label class="col-md-4 control-label">First Name</label>  -->
                             <div class="col-md-12">
                               {{-- <div class="input-group">
                                <div class="input-group-append">
                                  <span >
                                 <i class="fa fa-user"></i>
                                 </span> </div>
                            </div> --}}
                                    <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" placeholder=" First Name " autofocus>
                                    
                                 
                                    @error('firstname')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                  </div>
                                </div>
                          
                      
                              <!-- Last Name -->
                            <div class="form-group" >
                              <!-- <label class="col-md-4 control-label">Last Name</label> -->
                               <div class="col-md-12 inputGroupContainer">
                                 <div class="input-group" >
                                      <!-- <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                      </span> -->
                                      <input id="lastname"  type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" placeholder=" Last Name " autofocus>
                      
                                      @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                    </div>
                                  </div>
                              </div>
                              <!-- PHONE-->
                              <div class="form-group">
                                <!-- <label class="col-md-4 control-label">Phone</label> -->
                                  <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                      <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone"  value="{{ old('phone') }}" required autocomplete="phone" placeholder=" Phone "/>
                      
                                      @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                    </div>
                                  </div>
                              </div>
                              <!-- Email-->
                              <div class="form-group">
                                <!-- <label class="col-md-4 control-label">Email</label> -->
                                  <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder=" Email Address " >
                      
                                        @error('email')
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                    </div>
                                  </div>
                              </div>
                              <!-- address-->
                              <div class="form-group">
                                <!-- <label class="col-md-4 control-label">Address</label> -->
                                  <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                       <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder=" Address ">
                      
                                        @error('address')
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                    </div>
                                  </div>
                              </div>
                              <!-- Password-->
                              <div class="form-group">
                                <!-- <label class="col-md-4 control-label">{{ __('Password') }}</label> -->
                                  <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="New password">
                      
                                      @error('password')
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                    </div>
                                  </div>
                              </div>
                              <!-- Conform Password-->    
                              <div class="form-group">
                                <!-- <label class="col-md-4 control-label">{{ __('Confirm Password') }}</label> -->
                                <div class="col-md-12 inputGroupContainer">
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="Password Confirmation">
                                  </div>
                                </div>
                              </div>
                              <!-- User Type-->
                              <div class="form-group">
                                <!-- <label class="col-md-4 control-label" for="sel1">Who are you ?</label> -->
                                <div class="col-md-12 inputGroupContainer">
                                  <div class="input-group">
                                    <!-- <span class="input-group-addon"><i class="fa fa-check"></i></span> -->
                                      <select class="selectpicker form-control" id="sel1" name="type" required>
                                        <!--- <option selected></option>-->
                                        <option value=""> <span><i class="fa fa-address-book-o"></i></span>Who are you ?</option>
                                        <option value="ProjectOwner">Project Owner</option>
                                        <option value="Programmer">Programmer</option>
                                        <option value="Company">Programming Company</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <!-- Terms of user and conditions-->
                                <div class="form-group">
                                    <label class="col-md-12 control-label">
                                      <p class="disclosure-text">In Registeration On The Site Your Agree To Comply With <a target="_blank" tapable href="#">Privacy Policy & Terms of Use </a>Of Wasla.com
                                      </p>
                                    </label>
                                    <input type="checkbox" class="btn join-btn-secondary join-btn" data-position-join="right">
                                </div>   
                                <!-- sign up-->
                                <div class="form-group">
                                  <label class="col-md-4 control-label"></label>
                                    <div class="col-md-12">
                                      <button type="submit" class="btn btn-primary" style="color: #fff">Sign up<span class="glyphicon glyphicon-send"></span></button>
                                    </div>
                                </div>
                          </fieldset>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
