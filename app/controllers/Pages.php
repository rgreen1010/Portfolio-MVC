<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
       public function index(){
        // if(isLoggedIn()){
        //   redirect('posts');
        // }
  
        $data = [
          'title' => 'Portfolio',
          'description' => 'MVC example with PHP'
        ];
       
        $this->view('pages/index', $data);
      }
  
      public function about(){
        $data = [
          'title' => 'About',
          'description' => 'Working to expand knowledge and experience'
        ];
  
        $this->view('pages/about', $data);
      }
}