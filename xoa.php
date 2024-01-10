<?php
$conn = new mysqli('localhost', 'root', '', 'baitap');
$id = $_GET['id'];
$sql = "DELETE FROM band WHERE masp = '$id'";
if (mysqli_query($conn,$sql)) {
    echo "Xóa thành công!";
} else {
    echo "Lỗi xóa: " . mysqli_error($conn);
}
header("Location: hienthi.php");
mysqli_close($conn);
?>