
<?php session_start(); 
?>

<html lang="zh_TW">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="csmart">
    <meta name="author" content="Cuzroom">
    <link rel="icon" href="../../../../favicon.ico">
    <title>smarTeacher</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" name="form" method="post" action="php/login.php">
      <img class="mb-4" src="img/index.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">smarTeacher</h1>
      <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username(Email)" required autofocus>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted"><a href="index.php">使用者登入</a></p>
    </form>
  </body>
</html>

