<?php
header("Content-Type:text/html;charset=UTF-8");
	include('../connect.php');
	if(isset($_GET['id_xoa']))
	{
		$id_xoa=$_GET['id_xoa'];
		
		$sql1="DELETE FROM `khoahoc` WHERE ma_kh='$id_xoa'";
		$kq1=mysqli_query($conn,$sql1);

		$sql2="DELETE FROM `giaovien` WHERE Ma_GV='$id_xoa'";
		$kq2=mysqli_query($conn,$sql2);

		if($kq1&&$kq2)
		{
			 echo '<script language="javascript">
                    alert("Bạn đã xóa thành công");'; 
              echo "location.href='qlkhoahoc.php';
                    </script>";
        }
        else
        {
        	echo'Lỗi xóa';
        }
		
	}
	
?>