<?php
    session_start();
    ob_start();

    include "../Model/connectdb.php";
    include "../Model/user.php";
    if((isset($_POST['submit'])) && ($_POST['submit'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $role = checkuser1($user,$pass);
        $_SESSION['VaiTro']=$role;

        $_SESSION['SoDienThoai'] = $user;

        if(empty($pass) || empty($user)){
            $txt = "Bạn cần nhập đủ thông tin đăng nhập";
        }else if($role==1) {
            header('location: index.php');
        }else {
            $txt = "Số điện thoại hoặc mật khẩu không tồn tại";
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
 
    <title>Đăng nhập</title>
</head>
<body>
<div id="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" id="form-login" method="post">
            <h1 class="form-heading">Đăng nhập </h1>
            
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name="user" class="form-input" placeholder="Số điện thoại / Email">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name="pass" class="form-input" placeholder="Mật khẩu" onpaste="return false;">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            
            <input type="submit" name="submit" value="Đăng nhập" class="form-submit"> 
            
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
     
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../js/login.js"></script>
</html>