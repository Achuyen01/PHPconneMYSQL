<?php
require "connect.php";
if (isset($_GET["mahang"])) {
    $mahang = $_GET["mahang"];
}
$stmt = $conn->prepare("DELETE FROM tbmathang WHERE mahang=?");
$stmt->bind_param("s", $customerID);
$customerID = $mahang;
$stmt->execute();
$stmt->close();
$conn->close();
header("Location: lietke.php");
?>