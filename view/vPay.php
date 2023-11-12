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
    function viewInfoUsers()
    {
        $p = new CPay();
        $tbl = $p->getInfoUsers();
        showInfoUsers($tbl);
    }
}

function showInfoUsers($tbl)
{
    if ($tbl) {
        // Lấy dữ liệu từ hàng đầu tiên của kết quả
        $row = mysqli_fetch_assoc($tbl);
      
        echo '
            <div class="row">
                    <div class="col-lg-12">
                        <div class="checkout__input">
                            <p>Họ tên<span>*</span></p>
                            <input name="HoTen" type="text" value="'.$row["HoTen"].'">
                        </div>
                    </div>
                </div>
                <div class="checkout__input">
                    <p>Số điện thoại<span>*</span></p>
                    <input name="SoDienThoai" type="tell" value="'.$row["SoDienThoai"].'">
                </div>
                <div class="checkout__input">
                    <p>Email<span>*</span></p>
                    <input name="Email" type="email" value="'.$row["Email"].'">
                </div>
                <div class="checkout__input">
                    <p>Địa chỉ<span>*</span></p>
                    <input name="DiaChi" type="text" placeholder="Street Address" class="checkout__input__add" value="'.$row["DiaChi"].'">
            </div>
        ';
    } else {
        echo "Không thể kết nối CSDL hoặc không tìm thấy thông tin người dùng.";
    }
}
function showProduct($tbl)
{
    if ($tbl) {
        if (mysqli_num_rows($tbl) > 0) {
            while ($row = mysqli_fetch_assoc($tbl)) {
                echo '<input type="hidden" name="TongTien[]" class="_price" value=' . $row["GiaBan"] * $row["SoLuong"] . '>';
                echo '<input type="hidden" name="MaSanPham[]" value=' . $row["MaSanPham"] . '>';
                echo '<li>' . $row["TenSanPham"] . ' <span>' . $row["GiaBan"] * $row["SoLuong"]  . '</span></li>';
            };
        }
    } else {
        echo "Vui lòng nhập dữ liệu!";
    }
}
