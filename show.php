<?php 
	
	$conn = mysqli_connect("localhost","root","","qlnv") or die("Không thể kết nối tới database");
	mysqli_set_charset($conn, 'UTF8');
	$qr = mysqli_query($conn, "SELECT * FROM nhanvien");
 ?>
<table border="1" style="background-color: #00FFFF">
	<tr>
		<td style="color: red;  text-align: center;">Mã nhân viên</td>
		<td style="color: red;  text-align: center;">Họ tên</td>
		<td style="color: red;  text-align: center;">Giới tính</td>
		<td style="color: red;  text-align: center;">Quê quán</td>
		<td style="color: red;  text-align: center;">Năm tuyển dụng</td>
		<td style="color: red;  text-align: center;"></td>
	</tr>
	<?php 
		while ($rs = MYSQLI_FETCH_ARRAY($qr, MYSQLI_ASSOC)) {
		echo "<tr>";
		echo "<td>".$rs["manv"]."</td>";
		echo "<td>".$rs["hoten"]."</td>";
		echo "<td>".$rs["gioitinh"]."</td>";
		echo "<td>".$rs["quequan"]."</td>";
		echo "<td>".$rs["namtuyendung"]."</td>";
		echo "<td><a href ='fix.php'>Sửa</a> || <a href='delete.php'>Xóa</a></td>";
		echo "</tr>";
	} ?>
</table>
