<?php
include_once("connect.php");

class MPay
{
    function getAllProduct()
    {
        $p = new ConnectDB();
        $con = null;
        if ($p->connect_DB($con)) {
            $str = 'SELECT sp.TenSanPham, sp.GiaBan, gh.SoLuong, sp.MaSanPham FROM giohang gh JOIN sanpham sp ON gh.sanpham_MaSanPham = sp.MaSanPham WHERE gh.MaKhachHang = "03";';
            $tbl = mysqli_query($con, $str);
            $p->closeDB($con);
            return $tbl;
        } else {
            return false;
        }
    }

    function addOrder($maSanPham, $maNhanVien, $maKhachHang, $tongTien, $NgayLap, $soLuong)
    {
        $p = new ConnectDB();
        $con = null;
        if ($p->connect_DB($con)) {
            $str = "INSERT INTO `hoadon` (`MaHoaDon`, `MaSanPham`, `MaNhanVien`, `MaKhachHang`, `TongTien`, `NgayLap`, `SoLuong`) 
            VALUES ('', '$maSanPham', '$maNhanVien', '$maKhachHang', '$tongTien', '$NgayLap', '$soLuong');";
            $tbl = mysqli_query($con, $str);
            $p->closeDB($con);
            return $tbl;
        } else {
            return false;
        }
    }

    function getInfoUsers()
    {
        $p = new ConnectDB();
        $con = null;
        $maKhachHang =  '01';
        if ($p->connect_DB($con)) {
            $str = "SELECT * FROM `khachhang` WHERE MaKhachHang = '$maKhachHang'";
            $tbl = mysqli_query($con, $str);
            $p->closeDB($con);
            return $tbl;
        } else {
            return false;
        }
    }
}
