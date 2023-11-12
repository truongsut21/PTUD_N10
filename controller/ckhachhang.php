<?php
    include_once("../model/khachhang.php");
    class ControlProduct{
        function UpdateProds1($hoten,$sodienthoai, $diachi, $matkhau,$email, $role){
            $p=new modelProduct();
            $insert = $p->dangky($hoten,$sodienthoai, $diachi, $matkhau,$email, $role);
            if($insert==true){
                return 1;
            }
            else{
                return 0;
            }
        }

        function ktradky($email){
            $p=new modelProduct();
            $insert = $p->checkdangky($email);
            if($insert==true){
                return 1;
            }
            else{
                return 0;
            }
        }
        
        // function laymk($sdt){
        //     $p=new modelProduct();
        //     $insert = $p->laypass($sdt);
        //     if($insert==true){
        //         return 1;
        //     }
        //     else{
        //         return 0;
        //     }
        // }

        function laymk($sdt) {
            $p = new modelProduct();
            $hashed_password = $p->laypass($sdt);
            return $hashed_password;
        }
        
        function capnhatmatkhau($oldPassword, $newPassword){
            $p=new modelProduct();
            $re = $p->changePassword($oldPassword, $newPassword);
            if($re==true){
                return 1;
            }
            else{
                return 0;
            }
        }

        function capnhatmatkhau1($email, $newPassword){
            $p=new modelProduct();
            $re = $p->changePassword1($email, $newPassword);
            if($re==true){
                return 1;
            }
            else{
                return 0;
            }
        }

        function capnhatttcn($hoten, $sdt, $dc, $mk,$email,$vaitro){
            $p=new modelProduct();
            $re = $p->UpdateProd($hoten, $sdt, $dc, $mk,$email,$vaitro);
            if($re==true){
                return 1;
            }
            else{
                return 0;
            }
        }
}
?>