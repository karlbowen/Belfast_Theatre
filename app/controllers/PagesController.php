<?php

class PagesController extends BaseController {

	
   public function home()
   {
      return view ('home');
   }
   
   public function about()
   {
      return view ('about');
   }
   
   public function contact()
   {
      return view ('contact');
   }
   
   public function login()
   {
      return view ('login');
   }
   
}
