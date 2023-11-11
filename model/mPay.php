<?php
include_once("connect.php");

class MPay
{
    function getAllProduct()
    {
        $p = new ConnectDB();
        $con = null;
        if ($p->connect_DB($con)) {
            $str = 'SELECT sp.TenSanPham, sp.GiaBan, gh.SoLuong FROM giohang gh JOIN sanpham sp ON gh.sanpham_MaSanPham = sp.MaSanPham WHERE gh.MaKhachHang = "03";';
            $tbl = mysqli_query($con, $str);
            $p->closeDB($con);
            return $tbl;
        } else {
            return false;
        }
    }

    

}
