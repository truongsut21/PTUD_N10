<?php
include_once("Model/mDetailsProduct.php");
class CDetailsProduct
{
    function addToCart($quantity, $maSanPham)
    {
        $p = new MDetailsProduct();
        $idCustommer = getIdCustommer();
        $tbl = $p->addToCart($quantity, $maSanPham, $idCustommer);
        return $tbl;
    }
}

function getIdCustommer()
{
    return '01';
}
