<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

?>

<!--?php


$is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null; //true/false
$is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null; //true/false

  if($is_session || $is_cookie) {
      $userID = $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];
      $sql = "SELECT * FROM users WHERE id=" . $userID;
      $result = mysqli_query($conn, $sql);
      $user = $result->fetch_assoc();
?>
<h2>Hello, <!-?php echo $user['username'] ?>!</h2>
<a href="logout.php">Logout</a>    
<!-?php 
  } else {
?>

<h2>Hello!</h2>
<!-?php 
} 
?>

<!-?php
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?-->

<?php 
if(isLogin()) {
  $user = getCurrentUser();
?> 
  <figure class="text-center">
      <blockquote class="blockquote"> 
         <h2 class="display-4">Hello, <?php echo $user['username']; ?></h2>
        </blockquote>
  </figure>



  <?php 
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/twit.php');
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/all-twits.php');

  ?>

<?php 
} else {

?>

    <figure class="text-center">
      <blockquote class="blockquote">
    <h2 class="display-4">Hello</h2>
    </blockquote>
  </figure>
 

 <?php 

}

 ?>



  <?php
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');

?>