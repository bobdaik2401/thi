<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Danh sách sản phẩm</title>
<style type="text/css">
.box{
	background-color: #ffffff;
    border: 3px solid #000000;
    border-radius: 4px;
    width: auto;
    margin: 20px 200px 20px 200px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
    overflow: hidden;
    display: block;
}
.box-1{
	margin: 0px auto;
	width: 400px;
}
h1{
	text-align: center;
	color: red;
}
</style>
</head>
<body>
<h1>Danh sách sản phẩm</h1>
<div class="box">
<?php
$conn = new mysqli('localhost','root','','baitap');
$str ="select * from band";
$result= mysqli_query($conn,$str);
?>
<div class="box-1">
<?php
echo'<table border=1>';
echo '<td>MãSP</td><td>TênSP</td><td>Ảnh</td><td>Giá</td><td>Chức năng</td></tr>';
while($row=mysqli_fetch_row($result))
{
	echo '<tr>';
	echo '<td>'.$row[0].'</td>';
	echo '<td>'.$row[1].'</td>';
	echo '<td>';
	 	echo '<img width="200" height="100" src="anh./' . $row[2] . '">';
		echo '</td>';
	echo '<td>'.$row[3].'</td>';
	?>
    <td>
    <a href="sua.php?id=<?php echo $row[0];?>">Sửa</a> &nbsp
    <a href="xoa.php?id=<?php echo $row[0];?>">Xóa</a>
    </td>
    <?php
	echo '</tr>';
}
echo '</table>';
?>
</div>
<?php
mysqli_close($conn);
?>

</div>

</body>
</html>