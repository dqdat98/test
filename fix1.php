<?php 
 	$manv = $_POST['txtmanv'];
 	$hoten = $_POST['txthoten'];
 	$gioitinh = $_POST['radio'];
 	$quequan = $_POST['txtquequan'];
 	$namtuyendung = $_POST['txtnamtuyendung'];
 	$conn = mysqli_connect("localhost","root","","qlnv") or die("Không thể kết nối tới database");
	mysqli_set_charset($conn, 'UTF8');
	$qr = mysqli_query($conn, "UPDATE nhanvien SET txtmanv = '$manv',txthoten = '$hoten',radio = '$gioitinh', txtquequan = '$quequan', txtnamtuyendung = '$namtuyendung' ");
	header("location: show.php");
 ?>
