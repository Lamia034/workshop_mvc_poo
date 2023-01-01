

<?php

require_once '../controller/ProductsController.php';
require_once '../model/product.php';
require_once './dashboard.php';

if(isset($_POST['idproduct'])){
    $exitProduct = new ProductController();
    $exitProduct->deleteProduct();
}

?>