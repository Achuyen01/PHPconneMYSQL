<?php
//nhan du lieu tu Form
$mahang = $_POST['mahang'];
$tenhang = $_POST['tenhang'];
$mota = $_POST['mota'];
$dongia = $_POST['dongia'];
$nguongoc = $_POST['nguongoc'];
$dbname = "dbbanhang";

//ket noi csdl
require_once 'connect.php';

//viet lenh sql them du lieu
$themsql = "INSERT INTO tbmathang
(mahang, tenhang, mota, dongia, nguongoc) VALUES ('$mahang', '$tenhang', '$mota', '$dongia', '$nguongoc')";
//echo $themsql;exit;

//tthực hiện câu lệnh
mysqli_query($conn, $themsql);

//in thong bao thanh cong
echo "<h1>Thêm thành công</h1>";