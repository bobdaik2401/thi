<?php
error_reporting(0);
$ma = $_GET["txtMaSp"];
$ten = $_GET["txtTenSp"];
$anh = $_GET["txtAnh"];
$gia = $_GET["txtGia"];
$conn =  new mysqli('localhost','root','','baitap');
$str = "UPDATE band set  tensp='$ten', anh='$anh', gia='$gia' where masp ='$ma' ";
$result =mysqli_query($conn,$str);
header("Location: hienthi.php");
?>