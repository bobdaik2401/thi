<?php
	error_reporting(0);
	$id = $_GET['id'];
	$conn= new mysqli('localhost','root','','baitap');
	$str = "select * from band where masp='$id'";
	$result= mysqli_query($conn,$str);
	while($row=mysqli_fetch_row($result))
	{
		$ma=$row[0];
		$ten=$row[1];
		$anh=$row[2];
		$gia=$row[3];
	}
	//echo $ma.$ten;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa sản phẩm</title>

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
	margin: 50px;
}
.box-2{
	margin: 0 auto;
}

h1{
	text-align: center;
	color: red;
}	
</style>
</head>
<body>
<h1>Sửa sản phẩm</h1>
<div class="box">
	<form action="xulysua.php" method="GET" class="box-1">
	<table class="box-2">
		<tr>
			<td>Mã sản phẩm</td>
			<td><input type="text" name="txtMaSp" value="<?php echo $ma; ?>"></td>
		</tr>
		<tr>
			<td>Tên sản phẩm</td>
			<td><input type="text" name="txtTenSp" value="<?php echo $ten; ?>"></td>
		</tr>

		<tr>
			<td>Ảnh</td>
			<td><input type="file" name="txtAnh" accept=".jpg, .jpeg, .png, .gif, .JFIF" value="<?php echo $anh; ?>"></td>
		</tr>

		<tr>
			<td>Giá</td>
			<td><input type="text" name="txtGia" value="<?php echo $gia; ?>"></td>
		</tr>
		

		<tr>
			<td></td>
			
				<td>
				<input type="submit" name="btOk" values="Thêm mới">
				<input type="reset" name="bthuy" values="Cancel">
			    </td>
			
			
		</tr>
	</table>
    </form>
</div>

</body>
</html>

