<?php 
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

  if(!empty($_POST)){
    $sql = "SELECT * FROM users WHERE email ='" . $_POST['email'] . "' AND password ='" . $_POST['password'] . "'";

    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();

   if ($user) {
      if (isset($_POST['remember'])) { // куки 
        setcookie(
          'user_id', $user['id'], time()+60*60*24*30, '/' );
      } else {
         $_SESSION["user_id"] = $user['id']; // если нет перемнной $user
      }
      //header("Location: /"); // редирект
    } else{
       $_SESSION["user_id"] = null; // очистить данные выйти из сесии
       setcookie(
          'user_id',  // пользователб
          '', // конкретный пользователь
          0, // время куки на 0
          '/' // сохраняем на всех страницах домена
        );
    }
  }
?>









<!--main class="form-signin w-100 m-auto">
  <form>
    
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

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
                        <form class="form-login" action="#" method="POST">
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
                                  <input type="checkbox" name="remember" value="1"> Remember me
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