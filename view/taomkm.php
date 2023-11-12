<?php
    session_start();
    ob_start();
    include "../Model/ketnoi.php";
    include "../Model/khachhang.php";
if((isset($_POST['submit'])) && ($_POST['submit'])){
            $email = $_SESSION['employee_id_check'];  
            $newPassword=$_REQUEST["newPassword"];
            $renewPassword=$_REQUEST["renewPassword"];
            $checkpass = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
        if($email){
            if(empty($renewPassword) || empty($newPassword)){
                $txt = "Bạn cần nhập đầy đủ thông tin";
            }else if($newPassword != $renewPassword){
                $txt = "Nhập lại mật khẩu không trùng khớp";
            }else if((!preg_match($checkpass, $newPassword))){
                $txt = "Mật khẩu ít nhất có 8 ký tự trong đó ít nhất một ký tự đặc biệt như @$!%*?&, ký tự chữ thường, hoa từ 'a' đến 'z' và số từ 0 - 9";
            }
            else{
                include_once("../Controller/ckhachhang.php");
                $p =  new controlProduct();
                $kq = $p->capnhatmatkhau1($email, $newPassword);
                if($kq==1){
                    echo "<script> alert('Tạo mật khẩu mới thành công')</script>";
                    echo header("refresh: 0; url='dangnhap.php'");
                }
                else{
                    $txt = "loi";
                } 
            }
        }else{
            $txt = "loi";
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
 
    <title>Quên mật khẩu</title>
</head>
<body>
    <div id="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" id="form-login" method="post">
            <h1 class="form-heading">Quên mật khẩu</h1>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name="newPassword" class="form-input" placeholder="Nhập mật khẩu mới" onpaste="return false;">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name="renewPassword" class="form-input" placeholder="Nhập lại mật khẩu" onpaste="return false;">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" name="submit" value="Tạo mật khẩu" class="form-submit"> 
            <?php
                if(isset($txt) && ($txt!="")){
                    echo "<div style='color: red; text-align: center;'>$txt</div>";

                }
            ?>
        </form>
    </div>
     
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../js/login.js"></script>
<script src="../js/pass.js"></script>
</html>