<?php
include_once("Model/mPay.php");
class CPay
{
    function getAllProduct()
    {
        $p = new MPay();
        $tbl = $p->getAllProduct();
        return $tbl;
    }

    function getInfoUsers()
    {
        $p = new MPay();
        $tbl = $p->getInfoUsers();
        return $tbl;
    }


    function handlePay()
    {
        if (isset($_REQUEST['btnPay'])) {
            $maSanPhams = $_REQUEST['MaSanPham'];
            $tongTiens = $_REQUEST['TongTien'];

            $maNhanVien = '01';
            $maKhachHang = '02';
            $NgayLap = date("Y-m-d");


            // Hiển thị các giá trị đã chọn
            foreach ($maSanPhams as $maSanPham => $item) {
                // echo $item . "\n --"; // item là mã sản phẩm
                // echo $tongTiens[$index] . "\n"; // đây là tổng tiền
            }
        }
    }
}
