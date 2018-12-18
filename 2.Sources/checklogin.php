<?php
 
	require 'connect.php';
//mysql_select_db('user')or die("cannot select DB");
// username và password được gửi từ form đăng nhập
$myusername= $_POST['myusername'];
$mypassword= $_POST['mypassword'];
 
$sql="SELECT * FROM giaovien WHERE username='$myusername' and password='$mypassword'";

$query = mysqli_query($conn,$sql);
$count=mysqli_num_rows($query);
if ($count==0) 
	{
		echo "tên đăng nhập hoặc mật khẩu không đúng !";
		header("Location:index.php");
	}
	else{
		
		 $data = mysqli_fetch_array($query) ;
		$_SESSION['username'] = $data["username"];
		$_SESSION['password'] = $data["password"];
		header("location:Admin.php");
		echo " <a href='Logout.php'>Thoát</a> to home.";
	}
?>