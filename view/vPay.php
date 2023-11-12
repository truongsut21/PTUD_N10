<?php
include_once("controller/cPay.php");
class VPay
{
    function viewAllProducts()
    {
        $p = new CPay();
        $tbl = $p->getAllProduct();
        showProduct($tbl);
    }
}


function showProduct($tbl)
{
    if ($tbl) {
        if (mysqli_num_rows($tbl) > 0) {
            while ($row = mysqli_fetch_assoc($tbl)) {
                echo '<input type="hidden" name="TongTien[]" class="_price" value=' . $row["GiaBan"] * $row["SoLuong"].'>';
                echo '<input type="hidden" name="MaSanPham[]" class="_price" value='.$row["MaSanPham"].'>';
                echo '<li>' . $row["TenSanPham"] . ' <span>' . $row["GiaBan"] * $row["SoLuong"]  . '</span></li>';
            };
        }
    } else {
        echo "Vui lòng nhập dữ liệu!";
    }
}
