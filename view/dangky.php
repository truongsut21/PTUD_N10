<?php
if((isset($_POST['submit'])) && ($_POST['submit'])){
            $hoten=$_REQUEST["name"];
            $sodienthoai=$_REQUEST["phone"];
            $email=$_REQUEST["email"];
            $matkhau=$_REQUEST["pass"];
            $diachi ='';
            $role ='';
            $pattern = '/^[0-9]{10}$/';
            $checkpass = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
        if(empty($hoten) || empty($sodienthoai) ||empty($email) ||empty($matkhau)){
            $txt = "Bạn cần nhập đầy đủ thông tin";
        }else if(!preg_match($pattern, $sodienthoai)){
            $txt = "Số điện thoại không hợp lệ";
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $txt = "Email không hợp lệ";
        }else if((!preg_match($checkpass, $matkhau))){
            $txt = "Mật khẩu ít nhất có 8 ký tự trong đó ít nhất một ký tự đặc biệt như @$!%*?&, ký tự chữ thường, hoa từ 'a' đến 'z' và số từ 0 - 9";
        }else{
            include_once("../Controller/ckhachhang.php");
            $p =  new controlProduct();
            $re = $p->ktradky($email);
            if($re==1){
                $kq = $p->UpdateProds1($hoten,$sodienthoai, $diachi, $matkhau,$email, $role);
                if($kq==1){
                    echo "<script> alert('Đăng ký thành công')</script>";
                    echo header("refresh: 0; url='dangnhap.php'");
                }
                else{
                    $txt = "Lỗi đăng ký";
                } 
            }else{
                $txt = "Email đã tồn tại";
            }
            
        }  
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylee.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <title>Đăng ký tài khoản</title>
</head>
<body>
    <div id="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" id="form-login" method="post">
            <h1 class="form-heading">Đăng ký tài khoản</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name="name" class="form-input" placeholder="Họ tên">
            </div>
            <div class="form-group">
                <i class="far fa-phone"></i>
                <input type="text" name="phone" class="form-input" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
                <i class="far fa-envelope"></i>
                <input type="text" name="email" class="form-input" placeholder="Email">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name="pass" class="form-input" placeholder="Mật khẩu" onpaste="return false;">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" name="submit" value="Đăng ký" class="form-submit"> 
            <div class="polocy">
            Bằng việc đăng ký, bạn đã đồng ý với chúng tôi về <a href="#">Điều khoản dịch vụ & Chính sách bảo mật</a>
            </div>
            <div class="login-po">
                Bạn đã có tài khoản?<a href="dangnhap.php"> Đăng nhập</a>
            </div>
            <?php
                if(isset($txt) && ($txt!="")){
                    echo "<div style='color: red; text-align: center;'>$txt</div>";
                }
            ?>
        </form>
    </div>
     
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../js/login.js"></script>
<script src="../js/pass.js"></script>

</html>
