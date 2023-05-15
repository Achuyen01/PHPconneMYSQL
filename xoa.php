<?php
//lay du lieu id can xoa
$mhid = $_GET['mahang'];
//echo $id;
require_once 'connect.php';
$xoa_sql = "DELETE  FROM tbmathang WHERE mahang=$mhid";
//thuc hien cau lenh
mysqli_query($conn, $xoa_sql);
echo "<h1>Xoa thanh cong</h1>";