<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liet ke danh sach mat hang</title>
</head>

<body>
    <div class="container">
        <h1>Danh sách mặt hàng</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Mã hàng</th>
                    <th>Tên hàng</th>
                    <th>Mô tả</th>
                    <th>Đơn giá</th>
                    <th>Nguồn gốc</th>
                    <th>Acction</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //ket noi
                require_once 'connect.php';
                //cau lenh
                $lietke_sql = "SELECT * FROM tbmathang order by mahang, tenhang, mota, dongia, nguongoc";
                // thuc hien cau lenh
                $result = mysqli_query($conn, $lietke_sql);
                while ($r = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $r['mahang']; ?>
                        </td>
                        <td>
                            <?php echo $r['tenhang']; ?>
                        </td>
                        <td>
                            <?php echo $r['mota']; ?>
                        </td>
                        <td>
                            <?php echo $r['dongia']; ?>
                        </td>
                        <td>
                            <?php echo $r['nguongoc']; ?>
                        </td>
                        <td>
                            <a href="sua.php?sid=<?php echo $r['mahang']; ?>" class="btn btn-info">Edit</a>
                            <a onclick="return confirm('Bạn xó muốn xóa mặt hàng này không?')"
                                href="xoa.php?mahang=<?php echo $r['mahang']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <?php
                }
                ?>
            </tbody>
        </table>
        </tbody>
        </table>
    </div>
</body>

</html>