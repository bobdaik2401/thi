<?php
error_reporting(0);
?>
<form action="" method="GET">
	<label>
		Nhập tên sản phẩm cần tìm kiếm:
	</label>
	<input type="text" name="txttensp" value="<?php echo $_GET["txttensp"];?>">
	<input type="submit" name="btnOK" value="Tìm Kiếm">
</form>
<?php
if(isset($_GET["btnOK"])<>NULL)
{
$tensp=$_GET["txttensp"];
$conn = new mysqli('localhost','root','','baitap');
$str ="select * from band where tensp like '%$tensp%'";
$result= mysqli_query($conn,$str);

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
    <a href="Sua.php?id=<?php echo $row[4];?>">Sửa</a> &nbsp
    <a href="xoa.php?id=<?php echo $row[4];?>">Xóa</a>
    </td>
    <?php
	echo '</tr>';
}
echo '</table>';
}
mysqli_close($conn);
?>
