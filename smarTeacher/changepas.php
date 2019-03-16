<?php
include "php/db_connection.php";
session_start();
$userid = $_SESSION['username'];
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "smart");
    mysqli_query($connect, "SET NAMES 'utf8'");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}


?>
<!DOCTYPE html>
<html lang="zh_TW">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<title>smarTeacher智慧大濕</title><!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom styles for this template -->
	<link href="css/navbar.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="#">smarTeacher</a> <button aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarsExample03" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarsExample03">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="class.php">主選單 </a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">更改密碼<span class="sr-only">(current)</span></a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="profile.php">個人檔案管理</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="php/logout.php">登出</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-md-0">
				<input class="form-control" placeholder="搜尋姓名" type="text">
			</form>
		</div>
	</nav>
	<main role="main">
		<div class="jumbotron">
			<div class="col-sm-8 mx-auto">
                <form class="form-signin" name="form" method="post" action="php/chpas.php">
                    <img class="mb-4" src="img/userindex.png" alt="" width="72" height="72" style="display:block; margin:auto;">
                    <h1 class="h3 mb-3 font-weight-normal text-center">更改密碼</h1>
                    <input type="text" name="username" id="inputEmail" class="form-control" placeholder="<?php echo $userid = $_SESSION['username']; ?> （目前登入中帳號）" readonly><br>
                    <input type="password" name="oldpassword" id="inputPassword" class="form-control" placeholder="Old Password(舊密碼)" required autofocus>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                    輸入您的舊密碼
                    </small><p style="margin-top:-3px;"></p>
                    <input type="password" name="newpassword" id="inputPassword" class="form-control" placeholder="New Password(新密碼)" required>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                    輸入您欲更改的新密碼，新密碼不得與舊密碼相同
                    </small><p style="margin-top:-3px;"></p>
                    <input type="password" name="renewpassword" id="inputPassword" class="form-control" placeholder="Re-New Password(重新輸入新密碼)" required>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                    重新輸入您欲更改的新密碼
                    </small>
                    <div class="checkbox mb-3">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Change Password</button>
                </form>
			</div>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script>
	window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')
	</script> 
	<script src="js/popper.min.js">
	</script> 
	<script src="js/bootstrap.min.js">
	</script>
</body>
</html>