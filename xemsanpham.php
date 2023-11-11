<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XEM SẢN PHẨM</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/xemsanpham.css" type="text/css">
</head>

<body>
    <?php
     include_once("controller/cDetailsProduct.php");
     $p = new CDetailsProduct();

   
        if(isset($_REQUEST["submitAddToCart"])){
            $quantity = $_REQUEST["quantity"];
            $maSanPham = $_REQUEST["MaSanPham"];
            echo $maSanPham;
            echo "----------------------------------------------------------------";
            echo $quantity;
            $respon = $p -> addToCart($quantity, $maSanPham);

            if($respon){
                echo "<script> alert('thêm sản phầm vào giỏ hàng thành công') </script>";
            }


        };
    ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> shopmyphamNumberTwo@gmail.com</li>
                                <li>Miễn phí vận chuyển cho đơn hàng từ 399k</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-user"></i></a>
                                <a href="#"><i class="fa fa-phone"></i></a>
                                <a href="shoping-cart.html"><i class="fa fa-shopping-bag"></i></a>
                            </div>

                            <div class="header__top__right__auth">
                                <a href="#">Follow Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="../PTUD_N10/index.php"><img src="../PTUD_N10/img/logoha.png" alt=""></a>
                    </div>
                </div>

                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <input type="text" name="search" placeholder="Nhập sản phẩm cần tìm.">
                            <button type="submit" class="site-btn">TÌM</button>
                        </form>
                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                </div>

                <div class="col-lg-12">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="#">Danh mục</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="../PTUD_N10/xemsanpham.php">Xem sản phẩm</a></li>
                                    <li><a href="../PTUD_N10/dathang.php">Đặt hàng</a></li>
                                    <li><a href="../PTUD_N10/thongtinsanpham.html">Xem thông tin đơn hàng</a></li>
                                    <li><a href="../PTUD_N10/huydon.html">Hủy đơn</a></li>
                                    <li><a href="#">Khác</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Chính sách</a></li>
                            <li><a href="#">Quản lý</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <br>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/bgxemct.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>COSMETICS</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">

                        <?php
                        include_once("view/vDetailsProduct.php");
                        $p = new vDetailsProduct();
                        $p->viewAllProducts();
                        ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="product__details__text">
                            </div>
                        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Footer Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with
                                <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        toastr.success("Have Fun")
    </script>;

</body>

</html>