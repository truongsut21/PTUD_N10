<?php
include_once("connect.php");

class MDetailsProduct
{
    function addToCart($quantity, $maSanPham, $idCustommer)
    {
        $p = new ConnectDB();
        $con = null;
        if ($p->connect_DB($con)) {
            $str = "INSERT INTO `giohang` (`MaGioHang`, `SoLuong`, `MaKhachHang`, `sanpham_MaSanPham`) VALUES (NULL, '".$quantity."', '03', '".$maSanPham."');";
            $tbl = mysqli_query($con, $str);
            $p->closeDB($con);
            return $tbl;
        } else {
            return false;
        }
    }
}


