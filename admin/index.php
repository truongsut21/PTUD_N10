<?php
    session_start();
    ob_start();
    if(isset($_SESSION['VaiTro']) && ($_SESSION['VaiTro'] == 1)){
        include "../Model/connectdb.php";
        include "view/header.php";
        if(isset($_GET['act'])){
            switch ($_GET['act']){
                case 'thoat':
                    if(isset($_SESSION['VaiTro'])) 
                    unset($_SESSION['VaiTro']);
                    header('location: login.php');
            }
        }else{
            
        }
    
    }else{
        header('location: login.php');
    }
?>
