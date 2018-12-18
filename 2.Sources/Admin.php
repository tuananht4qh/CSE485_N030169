<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link href="css/admin.css" rel="stylesheet" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="ad-header"> 
		<a class="active" href="#"><i class="fa fa-fw fa-home"></i>Trang Quản Lý</a> 
	</div>
	<div id="ad-main"> 
		<div class="container-fluid">
			<div class="row">
				<?php include 'sidebar-admin.php' ?>
				<main class="col-md-9 col-xs-11 p-l-2 p-t-2">
							<!-- <?php
							  include 'main-kh.php';
							?> -->
				</main>
			</div>
		</div>
	</div>
</body>
</html>