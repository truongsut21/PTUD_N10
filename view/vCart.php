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
                <tr>
                    <form action="#" method="get">
                        <input type="hidden" name="MaGioHang" value="' . $row['MaGioHang'] . '">
                    <td class="shoping__cart__item">
                        <img src="img/' . $row['HinhAnh'] . '" alt="">
                        <h5>' . $row['TenSanPham'] . '</h5>
                    </td>
                    <td class="shoping__cart__price">
                        ' . $row['GiaBan'] . '
                    </td>
                    <td class="shoping__cart__quantity">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" name="SoLuong" value="' . $row['SoLuong'] . '">
                            </div>
                        </div>
                    </td>
                    <td class="shoping__cart__total">
                        ' . $row['GiaBan'] * $row['SoLuong'] . '
                    </td>
                    <td class="">
                        <button type="submit" name="btnUpdateProduct" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    </td>
                    <td class="">

                        <button type="submit" name="btnDeleteProduct" class="btn btn-danger">x</button>
                    </td>
                </form>
                </tr>
                ';
            }
        }
    } else {
        echo "Vui lòng nhập dữ liệu!";
    }
}
