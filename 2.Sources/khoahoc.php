<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Khóa học</title>
		<link href="css/khoahoc.css" rel="stylesheet" type="text/css"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header-KH">
		<span>Trang Khóa Học</span>
	</div>
	<div id="main-KH" style="background: ##FFFAFA">
		<p>Tra cứu khóa học</p>
		<div class="row">
		  <div class="col-sm-6">
		  	<div class="makh">
					<form action="timkiem.php" method="post" accept-charset="utf-8" >
					<span>Mã khóa học :
			     		 <input id="tk-txt" type="text"  name="search_keywords" placeholder="nhập nội dung tìm kiếm" class="form-control">
			  		</span>
			  		<span>Mã Giảng Viên :
					<input id="tk-gv" type="text"  name="search_gv" placeholder="nhập nội dung tìm kiếm..." class="form-control">
		  		</span> 
			      <button type="submit" name="btn_search" data-toggle="modal" data-target="#myModal" class="btn btn-success" style="color: #fff; height: 40px; float: right;">Tìm Kiếm</button>
			    </form>
		  		<!-- <span>Mã khóa học :
					<input type="text">
		  		</span>
		  		<br>
		  		<span>Mã Giảng Viên :
					<input type="text">
		  		</span> -->
		  	</div>
		  	
		  </div>
		  <div class="col-sm-6" style="margin-bottom: 100px;">
				<div class="makh">
					<!-- <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success" style="color: #fff; height: 40px;">Tìm Kiếm</button> -->
								<!-- Modal -->
								<div id="myModal" class="modal fade" role="dialog">
								  <div class="modal-dialog">

								    <!-- Modal content-->
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								        <h4 class="modal-title">Thêm Khóa Học</h4>
								      </div>
								      <div class="modal-body">
								        <div class="container">
											<div class="row">
												<div class="col-md-12">
												<form action='checkLogin.php' method='POST'>
													  <div class="form-group">
													    <label for="txtMa_GV">Mã Khóa Học</label>
													    <input style="width: 350px;" type="Ma_GV" class="form-control" id="txtMa_GV" name="txtMa_GV">
													  </div>
													  <div class="form-group">
													    <label for="txtPassword">Tên Khóa Học</label>
													    <input style="width: 350px;" type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="">
													  </div>
													   <div class="form-group">
													    <label for="txtMa_GV">Mã Giáo Viên</label>
													    <input style="width: 350px;" type="Ma_GV" class="form-control" id="txtMa_GV" name="txtMa_GV">
													  </div>
													  <button style="width: 100px; border-radius: 5px;" type="submit">Tạo</button>
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
		  		</div>
		  </div>
		</div>
<?php
	include 'main-kh.php';
?>
	</div>
<?php
	include 'footer.php';
?>
</body>
</html>