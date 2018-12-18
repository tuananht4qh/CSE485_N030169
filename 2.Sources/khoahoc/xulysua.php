<?php	
	header("Content-Type:text/html;charset=UTF-8");
	include ('../connect.php');
	if(isset($_GET['id']))
	{
		$id_sua=$_GET['id'];
		if(isset($_POST["btnsua"]))
		 {
		 	
		 		$tenkh=$_POST['name'];			 	
				$magv=$_POST['giaovien'];
				$noidung=$_POST['noidung'];
									
				 $update="UPDATE `khoahoc` SET `ten_kh`='$tenkh',`Ma_GV`='$magv',
				`noidungkh`='$noidung' WHERE ma_kh='$id_sua'";
							
				$kq=mysqli_query($conn,$update);

				if($kq)
				{
					echo '<script language="javascript">
	                    alert("Bạn đã sửa thành công");'; 
	                       echo "location.href='qlkhoahoc.php';
	                    </script>";		                 
				}
					
					
		}
	}
	
?>