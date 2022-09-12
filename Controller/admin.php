<?php 
 class admin {
  public function __construct() {
    session_start();
        include('Model/config.php');
      }
  public function login() {
    include('View/admin/login.php');
    include('Model/admin/account.php');
    $account = new account();
$account->login();
   } 
  public function dashboard() {
    include('View/admin/dashboard.php');
   } 
  public function post() {
    include('View/admin/post.php');
   } 
 public  function createpost() {
    include('Model/admin/createpost.php');
    $createpost = new createpost();
    $result = $createpost->showcategory();
    $createpost->savepost();
    require_once 'View/admin/createpost.php';
   } 
public function logout() {
    include('Model/admin/account.php');
    $logout = new account();
$logout->logout();
   } 
 }
?>