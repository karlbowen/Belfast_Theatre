<!DOCTYPE html>

<html>
    
  <head>
    
    <title> Belfast Theatre Home </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href = "/css/style.css" />
    
  </head>
  
  <body> 

     <div class = "navbar navbar-default navbar-static-top">
        <div class = "container">
            
            <div id = "title">      
               <h2> Belfast Theatre Company</h2>                 
            </div> 
     
           
           <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
           
              <span class = "icon-bar"> </span>
              <span class = "icon-bar"> </span>
              <span class = "icon-bar"> </span>
               
           </button>
               
           <div class = "collapse navbar-collapse navHeaderCollapse">
           
              <ul class = "nav navbar-nav navbar-left">
              
                 <li><a href='/'>Home</a> </li>
                 <li class = "dropdown">
                     <a href = "#" class= "dropdown-toggle" data-toggle = "dropdown">What's On <b class = "caret"></b></a>
                        <ul class = dropdown-menu>
                           <li><a href="#">Mamma Mia</a></li>
                           <li><a href="#">The King's Speech</a></li>
                           <li><a href="#">The Producers</a></li>
                        </ul>
                 </li>
                 <li><a href='/about'>About Us</a> </li>
                 <li><a href='/contact'>Contact Us</a> </li>
                  
              </ul>
               
               <ul class = "nav navbar-nav navbar-right">
              
                 <li><a href='/login'>Sign In</a> </li>
                 
              </ul>
               
           </div> 
               
        </div> 
     </div>
     
     @yield('content')
     
<!--     <div class = "navbar navbar-inverse navbar-fixed-bottom" id = "footer">
         
         <div class = "container" id = "foot">
             
             <p class = "navbar-text">Site built by group 5</p>
             
         </div>
         
     </div>-->
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     
  </body>

</html> 

