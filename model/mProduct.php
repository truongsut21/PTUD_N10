<?php
    include_once("connect.php");

    class MProduct {
        function selectAllProducts() {
            $p = new ConnectDB();
            $con = null; // Declare $con here
            if ($p->connect_DB($con)) {
                $str = "SELECT a.MaSanPham, a.TenSanPham, a.HinhAnh, a.GiaBan, a.ThuongHieu, d.NoiDungDanhGia,a.trangThai, a.SoLuongTon, a.MoTa FROM sanpham a LEFT JOIN noidungdanhgia d ON a.MaSanPham = d.MaSanPham;";
                $tbl = mysqli_query($con, $str); // Use mysqli_query with the connection parameter
                $p->closeDB($con);
                return $tbl;
            } else {
                return false;
            }
        }

        function selectSearchProduct($search){
            $con = null;
            $p=new ConnectDB();
            if ($p->connect_DB($con)) {
                $str = "SELECT * from sanpham where TenSanPham like '%".$search."%'";
                $tbl = mysqli_query($con, $str);
                $p->closeDB($con);
                return $tbl;
            } else {
                return false;
            }
            
        }
       
    }
