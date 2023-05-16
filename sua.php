<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sửa</title>
</head>

<body>

</body>

</html>
<?php require "connect.php" ?>
<?php
$mahang = "";
if (isset($_GET["sid"])) {
    $mahang = $_GET["sid"];
}
?>
<?php

if (isset($_POST["sua"])) {
    $tenhang = $_POST["tenhang"];
    $mota = $_POST["mota"];
    $dongia = $_POST["dongia"];
    $nguongoc = $_POST["nguongoc"];
    if ($tenhang == "") {
        echo "vui lòng nhập tên mặt hàng!!!<br>";
    }
    if ($tenhang != "") {
        $stmt = $conn->prepare("UPDATE tbmathang SET tenhang=?, mota=?, dongia=?, nguongoc=? WHERE mahang=?");
        $stmt->bind_param("ssssss", $customerTen, $customerMota, $customerMahang, $customerNguongoc, $customerGia);
        $customerMahang = $mahang;
        $customerMota = $mota;
        $customerTen = $tenhang;
        $customerGia = $dongia;
        $customerNguongoc = $nguongoc;
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("location: them.php");

    }
} ?>
<?php
$stmt = $conn->prepare("SELECT * FROM tbmathang WHERE mahang = ?");
$stmt->bind_param("s", $customerMahang);
$customerMahang = $mahang;
$stmt->execute();
$result = $stmt->get_result();
echo $result->num_rows;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    ?>
    <br><br>
    <form method="post" action="">
        <div class="container">
            <h1>Form Thêm Mặt Hang</h1>
            <form action="them.php" method="post">
                <div class="form-group">
                    <lable for="mahang">Mã hàng</lable>
                    <?php echo $row['mahang']; ?><br><br>

                </div>
                <div class="form-group">
                    <lable for="tenhang">Tên hàng</lable>
                    <input type="text" id="tenhang" class="form-control" name="tenhang"
                        value="<?php echo $row['tenhang']; ?>"> <br><br>

                </div>
                <div class="form-group">
                    <lable for="mota">Mô tả</lable>
                    <input type="text" id="mota" class="form-control" name="mota"
                        value="<?php echo $row['mota']; ?>"><br><br>
                </div>
                <div class="form-group">
                    <lable for="acction">Đơn giá</lable>
                    <input type="text" id="dongia" class="form-control" name="dongia" value="<?php echo $row['dongia']; ?>">
                    <br><br>
                </div>
                <div class="form-group">
                    <lable for="nguongoc">Nguồn gốc</lable>
                    <input type="text" id="nguongoc" class="form-control" name="nguongoc"
                        value="<?php echo $row['nguongoc']; ?>"> <br><br>
                </div>
                <button type="submit" class="btn btn-success">Thêm mặt hàng</button>
            </form>
        </div>
    </form>
<?php }
?>