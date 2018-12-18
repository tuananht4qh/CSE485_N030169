<?php	
	header("Content-Type:text/html;charset=UTF-8");
	include ('../connect.php');
	
		if(isset($_POST["btnthembv"]))
		 {
		 	
		 		$tenkh=$_POST['name'];			 	
				$magv=$_POST['giaovien'];
				$noidung=$_POST['noidung'];
							
		 		
			 if($tenkh == null|| $magv==null ||$noidung==null )
			 {
					echo '<script language="javascript">
                    alert("Vui lòng nhập đầy đủ thông tin");'; 
                       echo "location.href='themkh.php';
                    </script>";
                    
			}
			else{
			
							
					$sql ="INSERT INTO `khoahoc`( `ten_kh`, `Ma_GV`, `noidungkh`) VALUES ('$tenkh','$magv','$noidung')";
								
					$kq=mysqli_query($conn,$sql);

					if($kq)
					{
						echo '<script language="javascript">
		                    alert("Bạn đã thêm thành công");'; 
		                       echo "location.href='qlkhoahoc.php';
		                    </script>";		                 
					}
				}	
					
			}
	
?>