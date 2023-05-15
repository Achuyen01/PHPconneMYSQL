<?php
require_once 'connect.php';
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
$search_sql = "SELECT * FROM tbmathang WHERE name LIKE '%$keyword%' OR description LIKE '%$keyword%'";
$result = mysqli_query($conn, $search_sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    }
} else {
    echo "Không tìm thấy sản phẩm nào.";
}