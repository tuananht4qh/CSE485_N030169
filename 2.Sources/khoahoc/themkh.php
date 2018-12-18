<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>QLKH</title>
	<link href="../css/QLKH.css" rel="stylesheet" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="../ckeditor_4.7.0_full/ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
	<div id="QLKH-header"> 
		<a class="active" href="#"><i class="fa fa-fw fa-home"></i>Quản Lý Khóa Học</a> 
	</div>
		<div id="ad-main"> 
		<div class="container-fluid">
			<div class="row">
				<?php include 'sidebar.php' 

				?>
				<main class="col-md-9 col-xs-11 p-l-2 p-t-2">
					<form action="xulythem.php" method="POST">

						<div class="form-group">
							<input type="hidden" name="id" value=""> 
						</div>
						<div class="form-group">
							<label for="name">Tên khóa học</label>
							<input type="text" name="name" placeholder="Tên khóa học" id="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="noidung">Nội dung khóa học</label>
							
							<textarea name="noidung" cols="80" rows="5" id="noidung"></textarea>
						</div>
						<script  type="text/javascript">CKEDITOR.replace("noidung");</script>
						<div class="form-group">
							<label for="gv">Gíao viên</label>
							<select name="giaovien" id="gv" >
												
								<?php 
								$conn = mysqli_connect('localhost' , 'root' , '' , 'quanlykhoahoc');  
								mysqli_set_charset($conn , 'UTF8');
									$sql="SELECT * FROM `giaovien`";
									$kq=mysqli_query($conn,$sql);
									while ($row_dm=mysqli_fetch_array($kq))
									 {
										
								 ?>
											<option value="<?php echo $row_dm['Ma_GV'];?>" class="form-control">
												<?php echo $row_dm['username'];?>
											</option>
								<?php 
									}
								 ?>
							</select>

						</div>
						<button type="submit" class="btn btn-default" name="btnthembv" >Thêm</button>
					</form>
				</main>
			</div>
		</div>
	</div>
	
</body>
</html>