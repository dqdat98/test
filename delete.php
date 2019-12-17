<?php 
	$conn = mysqli_connect("localhost","root","","qlnv");
	mysqli_query($conn, "set names 'utf8'");
	$manv = $_GET['txtmanv'];
	mysqli_query($conn, "DELETE FROM nhanvien WHERE manv = '$manv'");
	header("hienthi.php");
?>