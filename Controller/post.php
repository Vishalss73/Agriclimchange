<?php 
 class post {
    function __construct() {
        include('Model/config.php');
      }
  public function post() {
    include('Model/postmodel.php');
    $postmodel = new postmodel();
   $result = $postmodel->showpost();
    include('View/post.php');
     }   
    
 }
?>