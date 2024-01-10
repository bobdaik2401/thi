<?php
 error_reporting(0);
$Masp=$_POST["txtMaSp"];
$Tensp=$_POST["txtTenSp"];
$Anh = $_POST["txtAnh"];
$Gia=$_POST["txtGia"];
echo $Masp." ".$Tensp." ".$Anh." ".$Gia."<br>";
echo 'Hiển thị thành công';

$conn = new mysqli('localhost','root','','baitap');
$str = "insert into band(masp,tensp,anh,gia) values('$Masp','$Tensp','$Anh','$Gia')";
$result = mysqli_query($conn,$str);

header("Location: hienthi.php");
?>