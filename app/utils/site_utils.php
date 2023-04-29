<?php
  // Page redirect Utility
  function redirect($page){
    header('location: ' . URLROOT . '/' . $page);
  }