@extends('master')

@section('content')

<!--Things contained ONLY in the home page
Carousel-->
   <div id = "myCarousel" class = "carousel">
   
       <ol class = "carousel-indicators">
          
           <li data-target = "#myCarousel" data-slide-to = "0" class = "active"> </li>
           <li data-target = "#myCarousel" data-slide-to = "1"> </li>
           <li data-target = "#myCarousel" data-slide-to = "2"> </li>
           <li data-target = "#myCarousel" data-slide-to = "3"> </li>
           
       </ol>    
       
       <div class ="carousel-inner"> 
       
           <div class = "item active">       
               <img src = "images/theatre-1.jpg" alt = "Theatre" class = "img-responsive">
                  <div class = "carousel-caption">
                      
                  </div>
           </div>
           
           <div class = "item">       
               <img src = "images/mamma_mia.jpg" alt = "Mammia Mia" class = "img-responsive">
                  <div class = "carousel-caption">
                      
                  </div>
           </div>
           
           <div class = "item">       
               <img src = "images/kings_speech.jpg" alt = "Kings Speech" class = "img-responsive"> 
                  <div class = "carousel-caption">
                      
                  </div>
           </div>
           
           <div class = "item">       
               <img src = "images/producers.jpg" alt = "The Producers" class = "img-responsive">
                  <div class = "carousel-caption">
                      
                  </div>
           </div>
       
       </div>
       
       <a class = "carousel-control left" href = "#myCarousel" data-slide = "prev">           
           <span class = "icon-prev"> </span>
       </a>
       
       <a class = "carousel-control right" href = "#myCarousel" data-slide = "next">           
           <span class = "icon-next"> </span>
       </a>
       
   </div>
<!--End of Carousel

Panels-->

<div class = "container"> 
   <div class="panel panel-default" id = "news-panel">
      <div class="panel-body">
         <h4>Belfast's Newest Theatre</h4>
         <p>Belfast Theatre Company is Belfast's newest theatre with all the shows you don't want to miss!
             Want to find out more about us? <a href="/about">Click here</a></p>
     </div>
   </div>

   <div class="panel panel-default" id = "news-panel2">
      <div class="panel-body">
         <h4>New show: Mammia Mia!</h4>
         <p>One of the most successful musicals in the world has arrived in Belfast!
            <a href = "#">Click here</a> to book the hottest tickets in town!</p>
      </div>
   </div>
</div>
<!--End of Panels-->
@stop

  
        
