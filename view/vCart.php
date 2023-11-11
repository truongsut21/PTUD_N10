<?php
include_once("controller/cCart.php");
class VCart
{
    function viewAllProducts()
    {
        $p = new CCart();
        $tbl = $p->getAllProduct();
        showProduct($tbl);
    }

    function cartTotal()
    {
        $p = new CCart();
        $tbl = $p->getAllProduct();
        $total = 0;
        if ($tbl) {
            if (mysqli_num_rows($tbl) > 0) {
                while ($row = mysqli_fetch_assoc($tbl)) {
                    $total += $row['GiaBan'] * $row['SoLuong'];
                }
            }
        } else {
            echo "Vui lòng nhập dữ liệu!";
        }

        echo number_format($total, 0, ',', '.');
        echo "đ";
    }
}


function showProduct($tbl)
{
    if ($tbl) {
        if (mysqli_num_rows($tbl) > 0) {
            while ($row = mysqli_fetch_assoc($tbl)) {
                echo '
                
                ';
            }
        }
    } else {
        echo "Vui lòng nhập dữ liệu!";
    }
}
