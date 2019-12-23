@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="modal-dialog text-center">
       <div class="col-sm-12 main-section">
         <div class="modal-content">
           <p class="h2 text-center">logo</p>
           <div class=" text-center">
                   <h4> إنشاء جساب جديد</h4>
                   <p class="t-large-d">هل لديك حساب في وصلة؟ <a href="/ar/login/">دخول </a></p>
           </div>
                <div class="card-header">{{ __('Register') }}</div>
                    <form method="POST" class="form-horizontal" action="{{ route('register') }}">
                        @csrf
                        <fieldset>
                            <!-- first name  -->
                            <div class="form-group" >
                            <label class="col-md-4 control-label">First Name</label>
                             <div class="col-md-6">
                               <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-user"></i>
                                    </span>
                                    <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                      
                                    @error('firstname')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                      
                              <!-- Last Name -->
                            <div class="form-group" >
                              <label class="col-md-4 control-label">Last Name</label>
                               <div class="col-md-6 inputGroupContainer">
                                 <div class="input-group">
                                      <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                      <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                      
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
                                <label class="col-md-4 control-label">Phone</label>
                                  <div class="col-md-6 inputGroupContainer">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                      <input class="form-control @error('phone') is-invalid @enderror" type="number" name="phone" placeholder="(000)000-000" value="{{ old('phone') }}" required autocomplete="phone" />
                      
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
                                <label class="col-md-4 control-label">Email</label>
                                  <div class="col-md-6 inputGroupContainer">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      
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
                                <label class="col-md-4 control-label">Address</label>
                                  <div class="col-md-6 inputGroupContainer">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                       <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                      
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
                                <label class="col-md-4 control-label">{{ __('Password') }}</label>
                                  <div class="col-md-6 inputGroupContainer">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      
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
                                <label class="col-md-4 control-label">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6 inputGroupContainer">
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                  </div>
                                </div>
                              </div>
                              <!-- User Type-->
                              <div class="form-group">
                                <label class="col-md-4 control-label" for="sel1">Who are you ?</label>
                                <div class="col-md-6 inputGroupContainer">
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                      <select class="selectpicker form-control" id="sel1" name="type" required>
                                        <!--- <option selected></option>-->
                                        <option value="ProjectOwner"> <span><i class="fa fa-address-book-o"></i></span>Project Owner</option>
                                        <option value="Programmer">Programmer</option>
                                        <option value="Company">Programming Company</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <!-- Terms of user and conditions-->
                                <div class="form-group">
                                    <label class="col-md9 control-label">
                                      <p class="disclosure-text">عند التسجيل على الموقع، فإنك توافق على الالتزام بـ <a target="_blank" tapable href="#">شروط الاستخدام</a> "و" <a target="_blank" tapable href="#"> بيان الخصوصية </a>الخاص وصلة.كوم
                                      </p>
                                    </label>
                                    <input type="checkbox" class="btn join-btn-secondary join-btn" data-position-join="right">
                                </div>   
                                <!-- sign up-->
                                <div class="form-group">
                                  <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                      <button type="submit" class="btn btn-waring">Sign up<span class="glyphicon glyphicon-send"></span></button>
                                    </div>
                                </div>
                          </fieldset>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
