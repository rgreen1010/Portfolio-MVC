<?php
  // Load Config
  require_once 'config/config.php';
  // Load Helpers
  require_once 'utils/site_utils.php';
  require_once 'utils/session_utils.php';

  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once 'lib/' . $className . '.php';
  });
  