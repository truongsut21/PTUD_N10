<?php
    session_start();
    ob_start();
    include "View/header.php";
            switch ($_GET['act']){
                case 'login':
                    if(isset($_POST['login'])&&($_POST['login'])){
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $kq = checkuser1($user,$pass);
                        $role=$kq[0]['role'];
                        if($role==1){
                            $_SESSION['role'] = $role;
                            header('location: admin/index.php');
                        }else{
                            $_SESSION['role']=$role;
                            $_SESSION['iduser']=$kq[0]['SoDienThoai'];
                            $_SESSION['username']=$kq[0]['MatKhau'];
                            header('location: index.php');
                        }
                    }
            else{
            
    }}
?>