<?php
    include('../../Model/cn.php');

session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['SoDienThoai'])) {
    header("Location: login.php");
    //echo 'alert("sai")';
    exit();
}
// else{
//     echo 'alert("đúng")';
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý dữ liệu khi form được gửi đi
    $HoTen = $_POST['HoTen'];
    $SoDienThoai = $_POST['SoDienThoai'];
    $DiaChi = $_POST['DiaChi'];
    $Email = $_POST['Email'];

    $SoDienThoaiSession = $_SESSION['SoDienThoai'];

    // Cập nhật thông tin cá nhân trong cơ sở dữ liệu
    $query = "UPDATE khachhang SET HoTen='$HoTen', SoDienThoai='$SoDienThoai', DiaChi='$DiaChi', Email='$Email' WHERE SoDienThoai='$SoDienThoaiSession'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Cập nhật thông tin thành công.";
    } else {
        echo "Lỗi cập nhật thông tin: " . mysqli_error($conn);
    }
}

// Lấy thông tin khách hàng từ cơ sở dữ liệu
$SoDienThoai = $_SESSION['SoDienThoai'];
$query = "SELECT * FROM khachhang WHERE SoDienThoai = '$SoDienThoai'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Lỗi truy vấn: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin cá nhân</title>
</head>
<body>
    <h2>Cập nhật thông tin cá nhân</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="HoTen">Họ tên:</label>
        <input type="text" name="HoTen" value="<?php echo $row['HoTen']; ?>" required><br>

        <label for="SoDienThoai">Số điện thoại:</label>
        <input type="text" name="SoDienThoai" value="<?php echo $row['SoDienThoai']; ?>" required><br>

        <label for="DiaChi">Địa chỉ:</label>
        <input type="text" name="DiaChi" value="<?php echo $row['DiaChi']; ?>" required><br>

        <label for="Email">Email:</label>
        <input type="email" name="Email" value="<?php echo $row['Email']; ?>" required><br>

        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>
