
<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
  
  if(!empty($_POST)) {
    $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "');";


  if(mysqli_query($conn, $sql)) {
    header("location: /");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  }
  
?>

<!--main class="form-signin w-100 m-auto">
  <form>
    
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingName" placeholder="Username">
      <label for="floatingName">Username</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main-->


<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form action="#" method="POST" class="form">
                            <div class="form-group">
                                
                                <label for="username" class="text-white">Username:</label><br>
                                <input type="text" name="name" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-white">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>