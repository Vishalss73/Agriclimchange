<?php 
 class Home {
  
    function __construct() {
      session_start();
        include('Model/config.php');
      }
   function home() {
    include('Model/homemodel.php');
    $homemodel = new homemodel();
    $result = $homemodel->showpost();
    require_once 'View/index.php';
   }  
    
 }
?>