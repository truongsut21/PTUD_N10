<?php
    include('../Model/cn.php');

session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['SoDienThoai'])) {
    header("Location: login.php");
    //echo 'alert("sai")';
    exit();
}

if((isset($_POST['submit'])) && ($_POST['submit'])){
    $pattern = '/^[0-9]{10}$/';
    $HoTen = $_POST['HoTen'];
    $SoDienThoai = $_POST['SoDienThoai'];
    $DiaChi = $_POST['DiaChi'];
    $Email = $_POST['Email'];
    if(empty($HoTen) || empty($SoDienThoai) ||empty($Email)){
        $txt = "Bạn cần nhập đầy đủ thông tin";
    }else if(!preg_match($pattern, $SoDienThoai)){
        $txt = "Số điện thoại không hợp lệ";
    }else if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        $txt = "Email không hợp lệ";
    }else{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Xử lý dữ liệu khi form được gửi đi 
        
            $SoDienThoaiSession = $_SESSION['SoDienThoai'];
        
            // Cập nhật thông tin cá nhân trong cơ sở dữ liệu
            $query = "UPDATE khachhang SET HoTen='$HoTen', SoDienThoai='$SoDienThoai', DiaChi='$DiaChi', Email='$Email' WHERE SoDienThoai='$SoDienThoaiSession'";
            $result = mysqli_query($conn, $query);
        
            if ($result) {
                echo "<script> alert('Cập nhật thông tin thành công')</script>";
            } else {
                echo "Lỗi cập nhật thông tin: " . mysqli_error($conn);
            }
        }
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylee.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Cập nhật thông tin cá nhân</title>
</head>
<body>
    <div id="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" id="form-login" method="post">
            <h1 class="form-heading">Cập nhật thông tin cá nhân</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name="HoTen" class="form-input" value="<?php echo $row['HoTen']; ?>">
            </div>
            <div class="form-group">
                <i class="far fa-phone"></i>
                <input type="text" name="SoDienThoai" class="form-input" value="<?php echo $row['SoDienThoai']; ?>">
            </div>
            <div class="form-group">
                <i class="far fa-phone"></i>
                <input type="text" name="DiaChi" class="form-input" value="<?php echo $row['DiaChi']; ?>">
            </div>
            <div class="form-group">
                <i class="far fa-envelope"></i>
                <input type="text" name="Email" class="form-input" value="<?php echo $row['Email']; ?>">
            </div>
           
            <input type="submit" name="submit" value="Cập nhật" class="form-submit"> 
            
            <?php
                if(isset($txt) && ($txt!="")){
                    echo "<div style='color: red; text-align: center;'>$txt</div>";
                }
            ?>
        </form>
    </div>
</body>
</html>
