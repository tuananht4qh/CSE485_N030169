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
					<?php
				
					include('../connect.php');
					if(isset($_GET['id_sua']))
					{
						$id_sua=$_GET['id_sua'];
					
					$sql="SELECT * FROM khoahoc where ma_kh='$id_sua'";
					$kq=mysqli_query($conn,$sql);
					$row=mysqli_fetch_assoc($kq);
					}
				?>
					<form action="xulysua.php?id=<?php echo $row['ma_kh'];?>" method="POST">

						<div class="form-group">
							<input type="hidden" name="id" value="<?php echo $row['ma_kh'];?>"> 
						</div>
						<div class="form-group">
							<label for="name">Tên khóa học</label>
							<input type="text" name="name" placeholder="Tên khóa học" id="name" class="form-control" value="<?php echo $row['ten_kh'];?>">
						</div>
						<div class="form-group">
							<label for="noidung">Nội dung khóa học</label>
							
							<textarea name="noidung" cols="80" rows="5" id="noidung" >
								 <?php echo $row['noidungkh'];?>
							</textarea>
						</div>
						<script  type="text/javascript">CKEDITOR.replace("noidung");</script>
						<div class="form-group">
							<label for="gv">Gíao viên</label>
							<select name="giaovien" id="gv" >
								<?php 
									$sql2="SELECT * FROM `giaovien`";
									$kq2=mysqli_query($conn,$sql2);
									while ($row_gv=mysqli_fetch_array($kq2))
									 {
										if(($row_gv["Ma_GV"]==$row["Ma_GV"]))
										{
										 ?>
													<option value="<?php echo $row_gv['Ma_GV'];?>" selected="selected">
														<?php echo $row_gv['username'];?>
													</option>
										<?php
										}
										else
										{

											?>
													<option value="<?php echo $row_gv['Ma_GV'];?>" >
														<?php echo $row_gv['username'];?>
													</option>
										<?php
										} 
									}
								 ?>
							</select>

						</div>
						<button type="submit" class="btn btn-default" name="btnsua" >Sửa</button>
					</form>
				</main>
			</div>
		</div>
	</div>
	
</body>
</html>