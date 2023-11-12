<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylee.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <title>Form login unitop.vn</title>
</head>

<body>
    <h2>Home Page</h2>
    <a href="dangnhap.php?act=thoat">Thoat</a>
    <a href="doimatkhau.php">Doi mat khau</a>
    <!-- <a href="capnhatttcn.php?act=id">Cap nhat thog tin ca nhan ne</a> -->
    <a href="capnhatttcn.php">Sửa</a>

    <?php
    session_start();

    // Lấy giá trị từ session
    $username = $_SESSION['MaKhachHang'];
    echo "ma khach hàng khi đăng nhập: " . $username;
    ?>

</body>

</html>