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
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/xemsanpham.css" type="text/css">
</head>

<body>
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
                                <a href="#"><i class="fa fa-shopping-bag"></i></a>
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
                        <a href="../PTUD_N10/home.php"><img src="../PTUD_N10/img/logoha.png" alt=""></a>
                    </div>
                </div>

                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <input type="text"  name="search" placeholder="Nhập sản phẩm cần tìm.">
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
                          include_once("view/vProduct1.php");
                          $p = new VProduct1();
                          $p -> viewAllProducts();

                          ?>
                        <!--<div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="img/xem.png" alt="">
                        </div>

                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/xem1.jpg"
                                src="img/xem1.jpg" alt="">
                            <img data-imgbigurl="img/xem2.jpg"
                                src="img/xem2.jpg" alt="">
                            <img data-imgbigurl="img/xem3.jpg"
                                src="img/xem3.jpg" alt="">
                            <img data-imgbigurl="img/xem4.jpg"
                                src="img/xem4.jpg" alt="">
                        </div>
                    </div>
                </div> -->
              
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">


                      

                  <!--  <h3>L'ORÉAL</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(10 đánh giá)</span>
                        </div>
                        <div class="product__details__price">149.000</div>
                        <p>Nước Tẩy Trang L'Oréal là dòng sản phẩm tẩy trang dạng nước đến từ thương hiệu 
                            L'Oreal Paris, được ứng dụng công nghệ Micellar dịu nhẹ giúp làm sạch da, 
                            lấy đi bụi bẩn, dầu thừa và cặn trang điểm chỉ trong một bước, mang lại làn da 
                            thông thoáng, mềm mượt mà không hề khô căng.
                        </p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Thêm vào Giỏ hàng</a>
                        <ul>
                            <li><b>Tình trạng:</b> <span>Còn hàng</span></li>
                            <li><b>Phù hợp cho:</b> <span>Da dầu </span></li>
                            <li><b>Dung tích:</b> <span>400ml </span></li>
                            <li><b>Chia sẻ đến:</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Mô tả sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Thông tin sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Đánh giá <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>MÔ TẢ</h6>
                                    <p>Nước Tẩy Trang L'Oréal là dòng sản phẩm tẩy trang dạng nước đến từ thương hiệu L'Oreal Paris, 
                                        được ứng dụng công nghệ Micellar dịu nhẹ giúp làm sạch da, lấy đi bụi bẩn, 
                                        dầu thừa và cặn trang điểm chỉ trong một bước, mang lại làn da thông thoáng,
                                        mềm mượt mà không hề khô căng.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông tin sản phẩm</h6>
                                    <p>Thành phần sản phẩm</p>
                                     <p>1. L'Oréal Paris Micellar Water 3-in-1 Deep Cleansing Even For Sensitive Skin (Xanh dương đậm)
                                        Thành phần chính:              
                                        Có hai lớp chất lỏng giúp hòa tan chất bẩn và loại bỏ toàn bộ lớp trang điểm hiệu quả, kể cả lớp trang điểm lâu trôi và không thấm nước chỉ trong một bước.                                      
                                        Lớp Micellar chứa các hạt mixen siêu nhỏ len lỏi sâu và dễ dàng lấy đi bụi bẩn, dầu thừa, lớp trang điểm và chất bẩn khác mà không làm khô da.                                       
                                        Thành phần đầy đủ: Aqua / Water, Cyclopentasiloxane, Isohexadecane, Potassium Phosphate, Sodium Chloride, Dipotassium Phosphate, Disodium Edta, Decyl Glucoside, Hexylene Glycol, Polyaminopropyl Biguanide, CI 61565 / Green 6</p>                                      
                                        <p>2. L'Oréal Paris Micellar Water 3-in-1 Refreshing Even For Sensitive Skin (Xanh dương nhạt)
                                        Thành phần chính:                                       
                                        Nước khoáng lấy từ những ngọn núi ở Pháp: làm dịu và giúp làn da trông tươi tắn lên sau khi tẩy trang.                                       
                                        Thành phần đầy đủ: Aqua / Water, Hexylene Glycol, Glycerin, Poloxamer 184, Disodium Cocoamphodiacetate, Disodium Edta, BHT , Polyaminopropyl Biguanide
                                        </p>
                                        <p>3. L'Oréal Paris Micellar Water 3-in-1 Moisturizing Even For Sensitive Skin (Hồng)
                                        Thành phần chính:                                      
                                        Chiết xuất hoa hồng Pháp: cân bằng độ ẩm & làm mềm mịn da, làn da vẫn đủ độ ẩm sau khi tẩy trang.                                      
                                        Thành phần đầy đủ: Aqua / Water, Hexylene Glycol, Glycerin, Rosa Gallica Flower Extract, Sorbitol, Poloxamer 184, Disodium Cocoamphodiacetate, Disodium Edta, Propylene Glycol, BHT , Polyaminopropyl Biguanide
                                        </p>
                                        <p>4. L'Oréal Paris Revitalift Crystal Purifying Micellar Water (Trắng)
                                        Thành phần chính:                                       
                                        Công nghệ micelles: hoạt động như một nam châm làm sạch, loại bỏ 5 loại tạp chất có trên da bạn hằng ngày, giúp lỗ chân lông thoáng sạch.                          
                                        Glycerin: giúp cấp nước và giữ độ ẩm cho da, phục hồi và duy trì vẻ ngoài khỏe khoắn.                                       
                                        Thành phần đầy đủ: Aqua / Water, Hexylene Glycol, Glycerin, Rosa Gallica Flower Extract, Sorbitol, Poloxamer 184, Disodium Cocoamphodiacetate, Disodium Edta, Propylene Glycol, BHT , Polyaminopropyl Biguanide
                                        </p>
                                        <p>5. L'Oreal Paris Revitalift Hyaluronic Acid Hydrating Micellar Water (Tím)
                                        Thành phần chính:                                       
                                        Hyaluronic Acid: giúp làm dịu và cấp ẩm da căng mọng từ bên trong, nuôi dưỡng da khỏe mạnh và sáng bóng.                                       
                                        Thành phần đầy đủ: Aqua / Water, Hexylene Glycol, Glycerin, Rosa Gallica Flower Extract, Sorbitol, Poloxamer 184, Disodium Cocoamphodiacetate, Disodium Edta, Propylene Glycol, BHT , Polyaminopropyl Biguanide</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Đánh giá</h6>
                                    <p>Sử dụng rất tốt không bị kích ứng da, cho shop 5 sao.
                            </div>
                        </div>
                    </div>
                </div>-->
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
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with 
                        <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p></div>
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

</body>
</html>