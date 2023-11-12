<?php
    function checkuser1($user,$pass){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM nhanvienkho 
        where SoDienThoai='".$user."' AND MatKhau='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        if(count($kq) >0) return $kq[0]['VaiTro'];
        else return 0;
    } 
?>