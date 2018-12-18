<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đại Học Thủy Lợi</title>
	<link href="css/style1.css" rel="stylesheet" type="text/css"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
		if (isset($_POST['submit'])) {
		    $errors= array();
		    $required = array('username','password');
		    foreach ($required as $fieldname) {
		        if (!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
		            $errors[] = "Bạn <strong> {$fieldname } </strong> cần điền đầy đủ thông tin";

		        }
		    }
		    // END foreach
		    if (empty($errors)) {
		    	$conn = mysqli_connect('localhost:89','root','','quanlykhoahoc') or die('không tồn tại db');
		    	$username = mysqli_real_escape_string($conn, $_POST['username']);
		    	$password = mysqli_real_escape_string($conn, $_POST['password']);
		    	$hash_pw = sha1($password);

		    	$query = "SELECT CONCAT_WS('  ', diachi, SoDT,)
		    				AS name
		    				FROM giaovien
		    				WHERE username='{$username}'
							AND password='{$hash_pw}'
							LIMIT 1	
		    				";
		    	$result  = mysqli_query($conn,$query) or die(mysqli_error($conn));
		    	if (mysqli_num_rows($result) == 1) {
		    		while ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		    			header('Location: khoahoc.php');
		    		}

		    	}else {
		    		$errors[]= "Mã đăng nhập hoặc mật khẩu không tồn tại";
		    	}
		    }// errors

		}//end isset
	?>
<div id="head">
					<ul>
						<li><a class="active1" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> </li>
						<li><a href="#gt-chung">Giới Thiệu</a></li>
						<li>
							<a  href="khoahoc.php">Khóa Học</a>
						</li>
						<li><a href="#giangvien">Giảng Viên</a></li>
						<li style="margin-right: 200px;"><a href="#tintuc">Tin Tức</a></li>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal">
								<i style="font-size: 25px;" class="fa fa-fw fa-user">
								</i> Đăng Nhập</a>
								<!-- Modal -->
								<div id="myModal" class="modal fade" role="dialog">
								  <div class="modal-dialog">
								    <!-- Modal content-->
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								        <h4 class="modal-title">Mời Bạn Đăng Nhập</h4>
								      </div>
								      <div class="modal-body">
								        <div class="container">
											<div class="row">
												<div class="col-md-12">
													<?php
													if (!empty($errors)) {
														    echo "<ul>";
														    foreach ($errors as $errors) {
														        echo "<li>$errors</li>";
														    }
														    echo "</ul>";
														}
													?>
												<form action='checklogin.php' method='POST'>
													<br>
													  <div class="form-group">
													    <label>Mã Đăng Nhập</label>
													    <input style="width: 350px;" id="username" 
													    type="username" class="form-control" name="myusername">
													  </div>
													  <div class="form-group">
													    <label>Password</label>
													    <input style="width: 350px;" type="password" class="form-control"  name="mypassword" placeholder="password">
													  </div>
													  <div class="form-check">
													    <input type="checkbox" class="form-check-input" id="exampleCheck1">
													    <label class="form-check-label" for="exampleCheck1">Save</label>
													  </div>
													 <button type="submit" name="submit" class="btn btn-primary">
													 
													 	login
													 </button>
												</form>
												</div>
											</div>
										</div>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								      </div>
								    </div>

								  </div>
								</div>
						</li>
					</ul>
	</div>
	<!-- end-head -->
</body>
</html>