<?php
    // AppMvc class
    // Setsup and initializes application MVC framework

    class AppMvc {
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            //print_r($this->getUrlArgs());
      
            $url = $this->getUrlArgs();
            if ( isset($url[0]) ) {
              // Look in controllers for first value from url
              // Controller files are capitolized
              if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
                // If exists, set as the controller to use
                $this->currentController = ucwords($url[0]);
                // Unset 0 Index
                unset($url[0]);
              }
            }
            // Require the controller (load the controller class file )
            require_once '../app/controllers/'. $this->currentController . '.php';
      
            // Instantiate controller class
            $this->currentController = new $this->currentController;
      
            // Check for second part of url
            if(isset($url[1])){
              // Check to see if method exists in controller
              if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                // Unset 1 index
                unset($url[1]);
              }
            }
      
            // Get params
            $this->params = $url ? array_values($url) : [];
      
            // Call a callback with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
          }

          public function getUrlArgs(){
            if(isset($_GET['url'])){
              $url = rtrim($_GET['url'], '/');
              $url = filter_var($url, FILTER_SANITIZE_URL);
              $url = explode('/', $url);
              return $url;
            }
          }

    }


?>
