<?php
// -------------------------------------------------------------------------SEND MAIL-------------------------------------------------------------------------------------
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/Exception.php';
require '../phpmailer/src/SMTP.php';
include_once '../model/connect1.php';

if (isset($_SESSION['user_id'])) {
    header("location:../product.php");
    exit();
}
if (isset($_POST['submit'])) {
    $emailPhone = mysqli_real_escape_string($con, $_POST['check']);
    if (filter_var($emailPhone, FILTER_VALIDATE_EMAIL)) {
        $select = mysqli_query($con, "SELECT * FROM `khachhang` where `Email` = '$emailPhone';") or die("select failed");
        if (mysqli_num_rows($select) > 0) {
            $row = mysqli_fetch_assoc($select);
            $_SESSION['employee_id_check'] = $row["MaKhachHang"];
            $otp = rand(100000, 999999);
            $_SESSION['email'] = $otp;

            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;

            $mail->Username = "let942217@gmail.com";
            $mail->Password = "ikfmpkfphmcyywcf";

            $mail->SMTPSecure = 'tls';

            $mail->Port = 587;

            $mail->setFrom("let942217@gmail.com");
            $mail->addAddress($emailPhone);

            $mail->isHTML(true);

            $mail->Subject = "Verification Code";
            $mail->Body = "mã code : $otp ";
            try {
                $mail->send();
                echo "<script>
                               alert('Đã gửi mã xác thực!'); 
                               location.href = 'taomatkhaumoi.php';
                               </script>";
            } catch (Exception $e) {
                echo "<script>
                               alert(''Message could not be sent. Mailer Error: ' . $mail->ErrorInfo'); 
                               </script>";
            }
        } else {
            $txt = "Email chưa được đăng ký";
        }
    } else {
        $txt = "Email không đúng định dạng";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylee.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../css/stylee.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Public+Sans&family=Work+Sans&display=swap" rel="stylesheet">
</head>

<body>
    
    <div id="wrapper">
        <form action="" id="form-login" method="post">
            <h1 class="form-heading">Quên mật khẩu</h1>
            <div class="form-group">
                <i class="far fa-envelope"></i>
                <input type="text" name="check" id="check" class="form-input" required="required" placeholder="Nhập email của bạn">
            </div>
            
            <input type="submit" name="submit" value="Gửi mã xác thực" class="form-submit"> 
            
            <div class="container-a">
                <a class="con-container" href="quenmatkhau.php">Quên mật khẩu</a>
                <a class="con-container" href="dangky.php">Đăng ký tài khoản </a>
                
            </div>
            <?php
                if(isset($txt) && ($txt!="")){
                    echo "<div style='color: red; text-align: center;'>$txt</div>";
                }
            ?>
        </form>
        
    </div>

    <script>
        const userHeader = document.getElementById("user_header");
        const loginLogout = document.querySelector(".login_logout");


        userHeader.addEventListener("click", function() {
            userHeader.classList.toggle("active");
            if (userHeader.classList.contains("active")) {
                loginLogout.style.display = "block";
            } else {
                loginLogout.style.display = "none";
            }

        });
    </script>
</body>

</html>