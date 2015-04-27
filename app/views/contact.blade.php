@extends('master')

@section('content')

   <div id = "about-header">
         
   <img src = "images/contact-header.jpg" alt = "About Header">
     
</div>

<div class = "container" id = "contact-container"> 
   
    <div class="panel panel-default" id = "contact-panel">
      
        <div class="panel-body">
            
            <h5> Contact details </h5>
            
            <p>
                <b>Address<br></b> 
                Great Victoria Street <br>
                Belfast <br>
                BT2 7HR <br> 
                <b><br> Stage Door<br></b>
                028 9024 0411 <br>
                <b><br>Box Office<br></b> 
                028 9024 1919 <br>
                <b><br>Box Office Opening Hours<br></b>
                Monday - Friday: 9.30am - 5.30pm<br>
                Saturday: 9:30am - 5.00pm <br>
                The Box Office is closed on Sundays and Bank Holidays.<br>
            </p>
                   
        </div>
        
   </div>
    
   <div class="panel panel-default" id = "contact-panel2">
      
        <div class="panel-body">
            
            <h5> We appreciate your feedback... </h5>
            
            <form>
       
                  <div class="form-group">
                     <label for="ContactName">Name:</label>
                    <input type="name" class="form-control" id="SignInEmail" placeholder="Enter name">
                  </div>
    
                  <div class="form-group">
                     <label for="ContactEmail">Email:</label>
                     <input type="email" class="form-control" id="ContactName" placeholder="Enter email">
                  </div>
              
                  <div class="form-group">
                     <label for="ContactMessage">Message:</label>
                     <textarea class="form-control" rows="4" name="message"></textarea>
                  </div>
                  
                 <h6> <a href = "#"> Submit </a> </h6> 
         
              </form>
                   
        </div>
        
   </div>
   
<div> 

@stop