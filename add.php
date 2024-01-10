<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm sản phẩm</title>

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
<h1>Thêm sản phẩm</h1>
<div class="box">
	<form action="xulythem.php" method="POST" class="box-1">
	<table class="box-2">

		<tr>
			<td>Mã sản phẩm</td>
			<td><input type="text" name="txtMaSp"></td>
		</tr>
		<tr>
			<td>Tên sản phẩm</td>
			<td><input type="text" name="txtTenSp"></td>
		</tr>

		<tr>
			<td>Ảnh</td>
			<td><input type="file" name="txtAnh" accept=".jpg, .jpeg, .png, .gif, .JFIF"></td>
		</tr>

		<tr>
			<td>Giá</td>
			<td><input type="text" name="txtGia"></td>
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


