<?php
    include_once("Model/mProduct.php");
    class CProduct{
        function getAllProducts(){
            $p = new MProduct();
            $tbl = $p -> selectAllProducts();
            return $tbl;
        }
       
                
    function getSearchProduct($search){
        $p=new MProduct();
        $tbl= $p->selectSearchProduct($search);
        return $tbl;
        
    }
    }
?>