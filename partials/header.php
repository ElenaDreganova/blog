
<!--?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

session_start();

$is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null; //true/false
$is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null; //true/false

  if($is_session || $is_cookie) {
      $userID = $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];
      $sql = "SELECT * FROM users WHERE id=" . $userID;
      $result = mysqli_query($conn, $sql);
      $user = $result->fetch_assoc();
  
  if($user['role'] != "admin") {
    header("location: /login.php");
    }
  } else {
    header("location: /login.php");
  }
?--> 

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

  if(!isset($_SESSION)) {
    session_start();
  }

require($_SERVER['DOCUMENT_ROOT'] . '/configs/helpers.php');
?>
 
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/responsive.css">


 
 
  

  <meta name="theme-color" content="#fafafa">
</head>

<body>
 

  <?php
    if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {
      echo '<div class="d-grid gap-2 d-md-flex justify-content-md-end"><a href="login.php" class="btn btn-primary me-md-2" type="button">Logout</a></div>'; 
    } else if(isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null) {
      echo '<div class="d-grid gap-2 d-md-flex justify-content-md-end"><a href="login.php" class="btn btn-primary me-md-2" type="button">Logout</a></div>';  
    } else {
  ?>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="login.php" class="btn btn-primary me-md-2" type="button">Login</a>
         <a href="register.php" class="btn btn-primary me-md-2" type="button">Register</a>
        
    </div>
      
  <?php  
}
  ?>

