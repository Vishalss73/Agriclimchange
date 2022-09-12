<?php 
if(!isset($_SESSION["username"])) {
  header('Location: index.php?controller=admin&function=login');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agriclimchange - Admin </title>
	<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/src/core.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=block" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=block" />
  
<link rel="stylesheet" type="text/css" href="assets/admin/style.css">
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="index.php?controller=admin&function=dashboard" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">BBBootstrap</span> </a>
                <div class="nav_list"> 
                    <a href="index.php?controller=admin&function=dashboard" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                 <a href="index.php?controller=admin&function=post" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Posts</span> </a> 
           
                 </div>
            </div> <a href="index.php?controller=admin&function=logout" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>