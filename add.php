<?php 
 	$manv = $_POST['txtmanv'];
 	$hoten = $_POST['txthoten'];
 	$gioitinh = $_POST['radio'];
 	$quequan = $_POST['txtquequan'];
 	$namtuyendung = $_POST['txtnamtuyendung'];
 	$conn = mysqli_connect("localhost","root","","qlnv") or die("Không thể kết nối tới database");
	mysqli_set_charset($conn, 'UTF8');
	$qr = mysqli_query($conn, "INSERT INTO nhanvien(manv,hoten,gioitinh,quequan,namtuyendung) VALUES ('$manv','$hoten','$gioitinh','$quequan','$namtuyendung')");
	if ($qr) {
		header("location: show.php");
	}
 ?>
