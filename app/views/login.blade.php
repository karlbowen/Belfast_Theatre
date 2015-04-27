@extends('master')

@section('content')

<div class = "container"> 
   <div class = "row">
       
      <div class = "col-md-6">   
         <div class="panel panel-default" id = "login-panel">
            <div class="panel-body">
            <h4>Login</h4>
            <p>Login to book an upcoming show or review a show you have seen recently.</p>
               <form>
       
                  <div class="form-group">
                     <label for="SignInEmail">Email address:</label>
                    <input type="email" class="form-control" id="SignInEmail" placeholder="Enter email">
                  </div>
    
                  <div class="form-group">
                     <label for="SignInPassword">Password:</label>
                     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
    
                 <div class="checkbox">
                    <label>
                       <input type="checkbox"> Remember Me
                    </label>
                 </div>
              
                 <h5> <a href = "#"> Submit </a> </h5> 
         
              </form>
           </div>
         </div>
      </div>
       
      <div class = "col-md-6">   
         <div class="panel panel-default" id = "signup-panel">
            <div class="panel-body">
               <h4>Not a member? Sign up!</h4>
               <p>Create an account to ensure you do not miss out on any of the latest shows.</p>
         <form>
             
         <div class="form-group">
            <label for="SignUpName">Name:</label>
            <input type="email" class="form-control" id="SignUpEmail" placeholder="Enter Name">
         </div>
       
         <div class="form-group">
            <label for="SignUpEmail">Email address:</label>
            <input type="email" class="form-control" id="SignUpEmail" placeholder="Enter email">
         </div>
    
         <div class="form-group">
            <label for="SignUpPassword">Password:</label>
            <input type="password" class="form-control" id="SignUpPassword" placeholder="Password">
         </div>
             
         <div class="form-group">
            <label for="SignUpConfirmPassword">Confirm Password:</label>
            <input type="password" class="form-control" id="SignUpConfirmPassword" placeholder="Confim Password">
         </div>
    
             <h5> <a href = "#"> Submit </a> </h5> 
             
         </form>
                
           </div>
         </div>
      </div>    
   </div>     
</div>
   
@stop