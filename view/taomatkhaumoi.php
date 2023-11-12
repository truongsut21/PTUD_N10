<?php
    session_start();
    ob_start();
    include "../Model/connectdb.php";
    include "../Model/user.php";
if((isset($_POST['submit'])) && ($_POST['submit'])){
            $matkhau=$_REQUEST["pass"];
            $otp = $_SESSION['email'];
        if(empty($matkhau)){
            $txt = "Bạn cần nhập mã xác minh";
        }
        else if($matkhau != $otp){
            $txt = "Mã xác minh không đúng";
        }
        else{
            header('location: taomkm.php');
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
                <input type="password" name="pass" class="form-input" placeholder="Nhập mã xác minh" onpaste="return false;">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            
            <input type="submit" name="submit" value="Kế tiếp" class="form-submit"> 
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