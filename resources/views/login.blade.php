@extends('layouts.home')
@section('content')
<body>
   <div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            
        <div class="col-12 user-img">
               <img src="Layouts/images/people.png"/>     
            </div> 
        <form class="col-12">
           <div class="form-group">
		    <span class="input-group-text" style="font-size:24px; position: absolute; color:#3b4652; left:30px; padding-top:4px;  margin-top: 6px;"> <i class="fa fa-user" ></i> </span>
		
            <input type="text" class="form-control" placeholder="enter username">
            </div>
            
            <div class="form-group">
                <span class="fas fa-lock" style="font-size:24px; position: absolute; color:#3b4652; left:30px; padding-top:4px;  margin-top: 12px; "></span>
                    <input type="password"  class="form-control" placeholder="enter password">
            </div>
            <button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>loging</button>
            </form>
            <div class="col-12 forgot">
            <a href="#">forgot password?</a>
            
            </div>
            </div> <!___ end of model content__>
         </div> 
    </div>
</body>

</html>