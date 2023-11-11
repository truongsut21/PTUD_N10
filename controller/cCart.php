<?php
    include_once("Model/MCart.php");
    class CCart{
        function getAllProduct(){
            $p = new MCart();
            $tbl = $p -> getAllProduct();
            return $tbl;
        }
        
       
    }
?>