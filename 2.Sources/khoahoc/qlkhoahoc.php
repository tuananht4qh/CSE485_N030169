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
</head>
<body>
	<div id="QLKH-header"> 
		<a class="active" href="#"><i class="fa fa-fw fa-home"></i>Quản Lý Khóa Học</a> 
	</div>
		<div id="ad-main"> 
		<div class="container-fluid">
			<div class="row">
				<?php include 'sidebar.php' ?>
				<main class="col-md-9 col-xs-11 p-l-2 p-t-2">
					
					<div class="box col-md-12">
							<div class="box-inner">
							<div class="box-header well" data-original-title="">
							<h2><i class="glyphicon glyphicon-book"></i> Khóa Học</h2>
							<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
							</div>
							</div>
							<div class="insert">
								<button type="button" class="btn btn-default">
									<a href="themkh.php">Thêm</a>
								</button>
							</div>

							<div class="box-content" style="display: block;">
							<table class="table table-striped table-bordered responsive">
							<thead>
							<tr>
							<th>Mã Khóa Học</th>
							<th>Tên Khóa Học</th>
							<th>Nội Dung</th>
							<th>Mã Giáo Viên</th>
							<th>Actions</th>
							</tr>
							</thead>
							<tbody>
								<?php
								$conn = mysqli_connect('localhost' , 'root' , '' , 'quanlykhoahoc');  
								mysqli_set_charset($conn , 'UTF8');
								$sql = "SELECT * FROM `khoahoc`";
								$results=mysqli_query($conn,$sql);
								while($row = mysqli_fetch_assoc($results)) 
						{?>
							<tr>
							<td><?php echo $row['ma_kh'];?></td>
							<td class="center"><?php echo $row['ten_kh'];?></td>
							<td class="center"><?php echo $row['noidungkh'];?></td>
							<td class="center"><?php echo $row['Ma_GV'];?></td>
							<!-- <td class="center">
							<span class="label-warning label label-default">Pending</span>
							</td>
							<td class="center">
							<span class="label-warning label label-default">Pending</span>
							</td> -->
							<td class="center">
							<a class="btn btn-success" href="">
							<i class="glyphicon glyphicon-zoom-in icon-white"></i>
							View
							</a>
							<a class="btn btn-info" href="suakh.php?id_sua=<?php echo $row['ma_kh'];?>">
								
									<i class="glyphicon glyphicon-edit icon-white"></i>
							
								Edit
							</a>
							<a href="xoa.php?id_xoa=<?php echo $row['ma_kh'];?>" onclick="return confirm('Bạn có chắc chắc muốn xóa không');" >
							<i class="glyphicon glyphicon-trash icon-white"></i>
							Delete
							</a>
							</td>
							</tr>
							<?php }?>
							</tbody>
							</table>
							</div>
							</div>
							</div>
				</main>
			</div>
		</div>
	</div>
	
</body>
</html>