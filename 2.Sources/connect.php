
<?php
$host="localhost"; // luôn luôn là localhost
$username="root"; // user của mysql
$password=""; // Mysql password
 
// kết nối cơ sở dữ liệu
 $conn=mysqli_connect('localhost','root','','quanlykhoahoc')or die("cannot select DB");
 mysqli_set_charset($conn , 'UTF8');
?>