<?php
if(isset($_SESSION["username"])) {
  header("Location: index.php?controller=admin&function=dashboard");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agriclimchange - Admin </title>
	<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/src/core.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=block" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=block" />
<link rel="stylesheet" type="text/css" href="assets/admin/style.css">
</head>
<body>
    <div class = "form-display">
<form action = "" method="POST">
  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Enter Username</label>
    <input type="text" name="username" class="form-control mt-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputPassword1">Enter Password</label>
    <input type="password" name="password" class="form-control mt-1" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary login-btn" name="login">Login</button>
</form>
</div>
</body>
</html>