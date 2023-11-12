<?php
include_once("ketnoi.php");

function checkuser($user,$pass){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM khachhang 
    where SoDienThoai='".$user."' AND MatKhau='".$pass."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if(count($kq) >0){
        return $kq[0]['MaKhachHang'];
    }
    else return false;
}

class modelProduct{
    
    function dangky($hoten,$sodienthoai, $diachi, $matkhau,$email, $role){
        $con;
        $p= new clsketnoi();
        if($p->ketnoiDB($con)){
            $string = "INSERT INTO khachhang(HoTen,SoDienThoai, DiaChi, MatKhau, Email, trangThai) 
            VALUES('$hoten','$sodienthoai', '$diachi ', '$matkhau', '$email', '$role')";
            $kq = mysqli_query($con,$string);
            $p->dongKetNoi($con);
            return $kq;
        }else{
            return false;
        }
    }

    function checkdangky($email){
        $con;
        $p= new clsketnoi();
        if($p->ketnoiDB($con)){
            $query = "SELECT * FROM khachhang WHERE Email = '$email'";
            $result = mysqli_query($con, $query);
            $p->dongKetNoi($con);
            if ($result && mysqli_num_rows($result) > 0) {
                return false;
            } else {
                return true;
            }
            
        }else{
            return false;
        }
    }
    function laypass($sdt){
        $con;
        $p = new clsketnoi();
        if ($p->ketnoiDB($con)) {
            $string = "SELECT MatKhau FROM khachhang WHERE SoDienThoai = '$sdt'";
            $kq = mysqli_query($con, $string);
            if ($kq) {
                if (mysqli_num_rows($kq) > 0) {
                    $row = mysqli_fetch_assoc($kq);
                    $hashed_password = $row['MatKhau'];
                } else {
                    // Không tìm thấy khách hàng
                    $hashed_password = null;
                }
                $p->dongKetNoi($con);
                return $hashed_password;
            } else {
                // Xử lý lỗi truy vấn nếu cần
                return false;
            }
        } else {
            return false;
        }
    }
    
    // function laypass($sdt){
    //     $con;
    //     $p= new clsketnoi();
    //     if($p->ketnoiDB($con)){
    //         $string = "SELECT MatKhau FROM khachhang WHERE SoDienThoai = '$sdt'";
    //         $kq = mysqli_query($con,$string);
    //         $p->dongKetNoi($con);
    //         return $kq;
    //     }else{
    //         return false;
    //     }
    // }

    function changePassword($oldPassword, $newPassword) {
        $con;
        $p= new clsketnoi();
        if($p->ketnoiDB($con)){
            $string = "UPDATE khachhang SET MatKhau = '$newPassword' WHERE MatKhau = $oldPassword";
            $kq = mysqli_query($con,$string);
            $p->dongKetNoi($con);
            return $kq;
        }else{
            return false;
        }
    }

    function changePassword1($email, $newPassword) {
        $con;
        $p= new clsketnoi();
        if($p->ketnoiDB($con)){
            $string = "UPDATE khachhang SET MatKhau = '$newPassword' WHERE MaKhachHang = $email";
            $kq = mysqli_query($con,$string);
            $p->dongKetNoi($con);
            return $kq;
        }else{
            return false;
        }
    }


    function UpdateProd($hoten, $sdt, $dc, $mk,$email, $vaitro){
        $conn;
        $p=new clsketnoi();
        if($p->ketnoiDB($conn)){
            $string="UPDATE khachhang set HoTen='$hoten',SoDienThoai='$sdt',
            DiaChi='$dc',MatKhau='$mk',Email='$email', VaiTro='$vaitro'";
            $result=mysql_query($string);
            $p->dongketnoi($conn);
            return $result;
        }
        else{
            return false;
        }
    }

    function doiMatKhau($sdt_email, $mat_khau_cu, $mat_khau_moi) {
        $con;
        $p = new clsketnoi();
        if ($p->ketnoiDB($con)) {
            // Truy vấn để lấy mật khẩu hiện tại từ cơ sở dữ liệu
            $query = "SELECT MatKhau FROM khachhang WHERE SoDienThoai = '$sdt_email' OR Email = '$sdt_email'";
            $result = mysqli_query($con, $query);
    
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $hashed_password = $row['MatKhau'];
    
                // Kiểm tra mật khẩu cũ
                if (password_verify($mat_khau_cu, $hashed_password)) {
                    // Mật khẩu cũ đúng, có thể đổi mật khẩu mới
                    $hashed_new_password = password_hash($mat_khau_moi, PASSWORD_DEFAULT);
                    $update_query = "UPDATE khachhang SET MatKhau = '$hashed_new_password' WHERE SoDienThoai = '$sdt_email' OR Email = '$sdt_email'";
                    if (mysqli_query($con, $update_query)) {
                        return "Đổi mật khẩu thành công";
                    } else {
                        return "Lỗi khi cập nhật mật khẩu mới";
                    }
                } else {
                    return "Mật khẩu cũ không đúng";
                }
            } else {
                return "Tài khoản không tồn tại hoặc số điện thoại/email không hợp lệ";
            }
        } else {
            return "Lỗi kết nối cơ sở dữ liệu";
        }
    }
    
}
?>