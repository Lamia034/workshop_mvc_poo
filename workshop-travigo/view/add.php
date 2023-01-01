<?php

require_once '../model/product.php';
require_once '../controller/ProductsController.php';
require_once '../database/DB.php';


if(isset($_POST['add']) && isset($_POST['img'])){
    $newProduct = new ProductController();
    $newProduct->addProduct();
}

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travigo - Travel for everyone</title>
	<meta name="description" content="travelling siteweb that assure you a safe tour all over the world">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
        <div class="bkg"> 

    <div class="contacts">ADD Product</div>
    <center>
    <div class="cartproduct">
   <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="productname">destination</label>
    <input type="text" name="productname" class="form-control" placeholder="productname">   <br>
    <label for="price">Price</label>
    <input type="number" name="price" class="form-control" placeholder="Price"><br>
    <label for="productdesc">description</label>
    <input type="text" name="productdesc" class="form-control" placeholder="ProductDescription"><br>
    <label for="img"> IMAGE</label>
    <input type="file" name="img" class="form-control" value="img"><br>
    <button type="submit" class="form-control btn btn-primary" name="add" value="add">SUBMIT</button>
    
    </div>

   </form>
    
       
</div>
</center>
</body>
</html>