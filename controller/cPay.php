<?php
    include_once("Model/mPay.php");
    class CCart{
        function getAllProduct(){
            $p = new MPay();
            $tbl = $p -> getAllProduct();
            return $tbl;
        }
 
    }
