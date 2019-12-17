<?php 
	error_reporting(0);
	$manv = $_GET['txtmanv'];
	$hoten = $_GET['txthoten'];
	$gioitinh = $_GET['radio'];
	$quequan = $_GET['txtquequan'];
	$namtuyendung = $_GET['txtnamtuyendung'];
 ?>
<h1>Sửa thông tin</h1>
 <form action="fix1.php" method="POST">
 	<table border="1">
 		<tr>
 			<td>Mã nhân viên</td>
 			<td><input type="text" name="txtmanv" ></td>
 		</tr>
 		<tr>
 			<td>Họ tên</td>
 			<td><input type="text" name="txthoten"></td>
 		</tr>
 		<tr>
 			<td>Giới tính</td>
 			<td><input type="radio" name="radio" value= "1">Nam <input type="radio" name="radio" value="2">Nữ</td>
 		</tr>
 		<tr>
 			<td>Quê quán</td>
 			<td><input type="text" name="txtquequan"></td>
 		</tr>
 		<tr>
 			<td>Năm tuyển dụng</td>
 			<td><input type="text" name="txtnamtuyendung"></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><input type="submit" name="btnsua" value="Sửa"> <input type="reset" name="btnreset" value="Nhập lại"></td>
 		</tr>
 	</table>
 </form>
