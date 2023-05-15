<?php
$mahang = $_GET['sid'];
require_once 'connect.php';
$sua_sql = "SELECT * FROM tbmathang WHERE mahang=$mahang";

$result = mysqli_query($conn, $sua_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sửa mặt hàng</title>
</head>

<body>
    <div class="container">
        <h1>Form Thêm Mặt Hang</h1>
        <form action="update.php" method="post">
            <div class="form-group">
                <lable for="mahang">Mã hàng</lable>
                <input type="text" id="mahang" class="form-control" name="mahang" value="<?php echo $row['mahang'] ?>">
            </div>
            <div class="form-group">
                <lable for="tenhang">Tên hàng</lable>
                <input type="text" id="tenhang" class="form-control" name="tenhang"
                    value="<?php echo $row['tenhang'] ?>">
            </div>
            <div class=" form-group ">
                <lable for=" mota">Mô tả</lable>
                <input type="text" id="mota" class="form-control" name="mota" value="<?php echo $row['mota'] ?>">
            </div>
            <div class=" form-group">
                <lable for="acction">Đơn giá</lable>
                <input type="text" id="dongia" class="form-control" name="dongia" value="<?php echo $row['dongia'] ?>">
            </div>
            <div class=" form-group">
                <lable for="nguongoc">Nguồn gốc</lable>
                <input type="text" id="nguongoc" class="form-control" name="nguongoc"
                    value="<?php echo $row['nguongoc'] ?>">
            </div>
            <button type=" submit" class="btn btn-success">Cập nhật</button>
        </form>
    </div>
</body>

</html>