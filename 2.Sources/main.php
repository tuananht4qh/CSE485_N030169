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
</head>
<body>
	<div id="Main">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/a.jpg" alt="Los Angeles">
					<div class="carousel-caption">
						<h3>Phương pháp thảo luận mới</h3>
						<p>LA is always so much fun!</p>
					</div>
				</div>

				<div class="item">
					<img src="images/b.jpg" alt="Chicago">
					<div class="carousel-caption">
						<h3>giảng viên mới</h3>
						<p>LA is always so much fun!</p>
					</div>
				</div>

				<div class="item">
					<img src="images/a.jpg" alt="New York">
					<div class="carousel-caption">
						<h3>Khóa học mới</h3>
						<p>LA is always so much fun!</p>
					</div>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<h1 style="text-align: center; font-family: Gotham;">Tin Tức Nổi Bật</h1>
		<div id="gt-chung">
			<h1>Giới Thiệu Chung</h1>
			<div class="col-lg-6">
				<h4>Địa Điểm
					<img style="width: 34px;height: auto;display: inline;" src="images/new.gif" alt="">
				</h4>
				<p>TRƯỜNG ĐẠI HỌC THỦY LỢI
					Địa chỉ : 175 TÂY SƠN, ĐỐNG ĐA, HÀ NỘI.
				</p>

				<h4>Thư Viện
					<img style="width: 34px;height: auto;display: inline;" src="images/new.gif" alt="">
				</h4>
				<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

			</div>
			<div class="col-lg-6">
				<h4>Nơi Làm Việc</h4>
				<p>TRƯỜNG ĐẠI HỌC THỦY LỢI</p>

				<h4>Phòng Ăn</h4>
				<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
			</div>
		</div>
		<!-- end -->
		<?php 
		require 'connect.php';
		$sql="SELECT * FROM `tintuc` order by ma_tt desc limit 0,3";
		$result=mysqli_query($conn,$sql);
		
		?>
		<div id="tintuc">
			<h1>Tin Tức</h1>
			<div class="col-lg-12" style="background: #eeeeee; margin-bottom: 20px;">
			<?php while($row=mysqli_fetch_assoc($result))
			{?>
			
				<h4><?php echo $row['tieudett']?>
					<img style="width: 34px;height: auto;display: inline;" src="images/new.gif" alt="">
				</h4>
				<p><li><?php echo $row['noidungtt']?></li></p>

				<!-- <h4>Khóa Học Toán</h4>
				<p><li>CMPSC 465 Data Structures and Algorithms (Fall 2014)</li></p>

				<h4>Khóa Học Văn
					<img style="width: 34px;height: auto;display: inline;" src="images/new.gif" alt="">
				</h4>
				<p><li>CMPSC 122 Advanced Programming in C++ (Spring 2013)</li>.</p> -->
			
				<?php }?>
			</div>
		</div>
		<!-- end -->
		<?php
		$sql1="SELECT * FROM `khoahoc` order by ma_kh desc limit 0,3";
		$result1=mysqli_query($conn,$sql1);
		
		?>
		<div id="khoahoc">
			<h1>Khóa Học</h1>
			<div class="col-lg-12" style="background: #eeeeee; margin-bottom: 20px;">
				<p>
					I have gained experience teaching the following courses:
				</p>
				<div class="row">
					<ul>
						<li>Teaching Assitant
							<?php while($row1=mysqli_fetch_assoc($result1)){?>
							<ul>
								<li><?php echo $row1['ten_kh']?></li>
								<!-- <li>CMPSC 465 Data Structures and Algorithms (Fall 2014)</li>
								<li>CMPSC 122 Advanced Programming in C++ (Spring 2013)</li>
								<li>CMPSC 101 Introduction to Programming in C++ (Fall 2012)</li> -->
							</ul>
							
						<?php 
						if( $row1['ma_kh']==135){
							echo $row1['noidungkh'];
						}
						}?> 
						</li>
						<!-- <li> -->

							<!-- <ul> -->
								<!-- <li> -->

								<!-- CMPSC 431W Database Management Systems (Fall 2015, Spring 2016, Fall 2016) <a href="http://www.cse.psu.edu/~yul189/cmpsc431w/" target="_blank">[course website]</a>
									<ul>
										<li>Received 6.7/7 student evaluation</li>
									</ul>
								</li>
								<li>Girlz Digital World: Fashion and Design in the Digital World (Summer 2013) -->
									
								<!-- </li> -->
							<!-- </ul> -->
						<!-- </li> -->
					
					</ul>

					</div>
					<!-- <p>I recorded and uploaded one semester of my lectures on <a href="https://www.youtube.com/c/DatabasePsu" target="_blank">this YouTube channel</a>.
					Feel free to browse and subscribe!</p> -->
				</div>
			</div>
			<!-- end -->
			<?php
			$sql2="SELECT * FROM `giaovien` order by Ma_GV desc limit 0,2";
			$result2=mysqli_query($conn,$sql2);
		
		?>
			<div id="giangvien">
				<h1>Giảng Viên</h1>
				
					<?php while($row2=mysqli_fetch_assoc($result2)){?>
					<div class="col-lg-12" style="background: #eeeeee;">
						<h4>Giảng Viên: <a href=""><?php echo $row2['username']?></a>
							<img style="width: 34px;height: auto;display: inline;" src="images/new.gif" alt="">
						</h4>
						<p><?php echo $row2['Khoa']?></p>

						<h4>Chuyên Ngành
							<img style="width: 34px;height: auto;display: inline;" src="images/new.gif" alt="">
						</h4>
						<p>Chuyên Ngành<a href=""> <?php echo $row2['chuyennganh']?></a> tại Đại Học Thủy Lợi</p>

						<h4>Tác Nghiệp </h4>
						<p><?php echo $row2['dc_lamviec']?></p>
					</div>
				<?php }?>
				
			</div>
			<!-- end -->
		</div>
		<!-- end-main -->
	</body>
	</html>