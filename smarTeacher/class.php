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
				<li class="nav-item active">
					<a class="nav-link" href="#">主選單 <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="changepas.php">更改密碼</a>
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
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">學號</th>
							<th scope="col">姓名</th>
							<th scope="col">學習1</th>
							<th scope="col">學習2</th>
							<th scope="col">學習3</th>
							<th scope="col">學習4</th>
							<th scope="col">學習5</th>
						</tr>
					</thead>
					<tbody>
						<?php
                            $query = "SELECT * FROM `classtable`" ;
                        
                            $result = filterTable($query);

                            while($row = mysqli_fetch_array($result)):

                            echo "<tr><th scope='col'>";
                            echo $row['c_scid'];
                            $nowuname = $row['c_scid'];
                            echo "</th>";

                            echo "<th scope='col'>";
                            echo $row['c_uname'];
                            echo "</th>";
                            
                            if ($row['c_1'] == "0"){
                                if($nowuname == $userid){
                                    echo "<th scope='col'><a href='#' data-toggle='modal' data-target='#exampleModalCenter1'>";
                                    echo "上傳";
                                    echo "</a></th>";
                                }else{
                                    echo "<th scope='col'>";
                                    echo "-";
                                    echo "</a></th>";
                                }
                            }else{
                                if($nowuname == $userid || $userid == "smart"){
                                    echo "<th scope='col'>";
                                    echo "<a href='php/".$row['c_1']."'>文件<a>";
                                    echo "</th>";
                                }else if($row['c1s'] == "1"){
                                    echo "<th scope='col'>";
                                    echo "<a href='php/".$row['c_1']."'>文件<a>";
                                    echo "</th>";
                                }else{
                                    echo "<th scope='col'>文件</th>";
                                }
                            }

                            if ($row['c_2'] == "0"){
                                if($nowuname == $userid){
                                    echo "<th scope='col'><a href='#' data-toggle='modal' data-target='#exampleModalCenter2'>";
                                    echo "上傳";
                                    echo "</a></th>";
                                }else{
                                    echo "<th scope='col'>";
                                    echo "-";
                                    echo "</a></th>";
                                }
                            }else{
                                if($nowuname == $userid || $userid == "smart"){
                                    echo "<th scope='col'>";
                                    echo "<a href='php/".$row['c_2']."'>文件<a>";
                                    echo "</th>";
                                }else if($row['c2s'] == "1"){
                                    echo "<th scope='col'>";
                                    echo "<a href='php/".$row['c_2']."'>文件<a>";
                                    echo "</th>";
                                }else{
                                    echo "<th scope='col'>文件</th>";
                                }
                            }

                            if ($row['c_3'] == "0"){
                                if($nowuname == $userid){
                                    echo "<th scope='col'><a href='#' data-toggle='modal' data-target='#exampleModalCenter3'>";
                                    echo "上傳";
                                    echo "</a></th>";
                                }else{
                                    echo "<th scope='col'>";
                                    echo "-";
                                    echo "</a></th>";
                                }
                            }else{
                                if($nowuname == $userid || $userid == "smart"){
                                    echo "<th scope='col'>";
                                    echo "<a href='php/".$row['c_3']."'>文件<a>";
                                    echo "</th>";
                                }else if($row['c3s'] == "1"){
                                    echo "<th scope='col'>";
                                    echo "<a href='php/".$row['c_3']."'>文件<a>";
                                    echo "</th>";
                                }else{
                                    echo "<th scope='col'>文件</th>";
                                }
                            }
                            
                            if ($row['c_4'] == "0"){
                                if($nowuname == $userid){
                                    echo "<th scope='col'><a href='#' data-toggle='modal' data-target='#exampleModalCenter4'>";
                                    echo "上傳";
                                    echo "</a></th>";
                                }else{
                                    echo "<th scope='col'>";
                                    echo "-";
                                    echo "</a></th>";
                                }
                            }else{
                                if($nowuname == $userid || $userid == "smart"){
                                    echo "<th scope='col'>";
                                    echo "<a href='php/".$row['c_4']."'>文件<a>";
                                    echo "</th>";
                                }else if($row['c4s'] == "1"){
                                    echo "<th scope='col'>";
                                    echo "<a href='php/".$row['c_4']."'>文件<a>";
                                    echo "</th>";
                                }else{
                                    echo "<th scope='col'>文件</th>";
                                }
                            }

                            if ($row['c_5'] == "0"){
                                if($nowuname == $userid){
                                    echo "<th scope='col'><a href='#' data-toggle='modal' data-target='#exampleModalCenter5'>";
                                    echo "上傳";
                                    echo "</a></th>";
                                }else{
                                    echo "<th scope='col'>";
                                    echo "-";
                                    echo "</a></th>";
                                }
                            }else{
                                if($nowuname == $userid || $userid == "smart"){
                                    echo "<th scope='col'>";
                                    echo "<a href='php/".$row['c_5']."'>文件<a>";
                                    echo "</th>";
                                }else if($row['c5s'] == "1"){
                                    echo "<th scope='col'>";
                                    echo "<a href='php/".$row['c_5']."'>文件<a>";
                                    echo "</th>";
                                }else{
                                    echo "<th scope='col'>文件</th>";
                                }
                            }
                            endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</main>
	<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="exampleModalCenter1" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<form action="php/upload.php?select=c_1" enctype="multipart/form-data" method="post">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $userid ?>_檔案上傳</h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						選擇檔案：<input id="file" name="file" type="file">
					</div>
					<div class="modal-footer">
						<input class="btn btn-secondary" data-dismiss="modal" type="button" value="Cancel">
                        <input type="submit" value="Upload" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
    <div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="exampleModalCenter2" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<form action="php/upload.php?select=c_2" enctype="multipart/form-data" method="post">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $userid ?>_檔案上傳</h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						選擇檔案：<input id="file" name="file" type="file">
					</div>
					<div class="modal-footer">
						<input class="btn btn-secondary" data-dismiss="modal" type="button" value="Cancel">
                        <input type="submit" value="Upload" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
    <div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="exampleModalCenter3" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<form action="php/upload.php?select=c_3" enctype="multipart/form-data" method="post">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $userid ?>_檔案上傳</h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						選擇檔案：<input id="file" name="file" type="file">
					</div>
					<div class="modal-footer">
						<input class="btn btn-secondary" data-dismiss="modal" type="button" value="Cancel">
                        <input type="submit" value="Upload" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
    <div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="exampleModalCenter4" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<form action="php/upload.php?select=c_4" enctype="multipart/form-data" method="post">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $userid ?>_檔案上傳</h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						選擇檔案：<input id="file" name="file" type="file">
					</div>
					<div class="modal-footer">
						<input class="btn btn-secondary" data-dismiss="modal" type="button" value="Cancel">
                        <input type="submit" value="Upload" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
    <div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="exampleModalCenter5" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<form action="php/upload.php?select=c_5" enctype="multipart/form-data" method="post">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $userid ?>_檔案上傳</h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						選擇檔案：<input id="file" name="file" type="file">
					</div>
					<div class="modal-footer">
						<input class="btn btn-secondary" data-dismiss="modal" type="button" value="Cancel">
                        <input type="submit" value="Upload" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
    <script type="text/javascript">
        function getid(){
            alert("xxx")
        }
</script>
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