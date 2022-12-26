<?php

require_once '../model/product.php';
require_once '../controller/ProductsController.php';
require_once '../database/DB.php';

if(isset($_POST['idproduct'])){
    $exitProduct = new ProductController();
    $product = $exitProduct->getOneProduct();
}

if(isset($_POST['submit'])){
    $exitProduct = new ProductController();
    $exitProduct->updateProduct();
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
		<!-- <header>
		<a href="#" id="logo"><img src="img/logo.png" class="logo-img" alt="travelling"></a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a href="home.php">Home</a></li>
			<li><a href="tours.php">Tours</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="login.php">LogIn</a></li>
		</ul>
	</header> -->

    <h2 class="contacts">
             Add Product:
            </h2>
        <center>
    <div class="cartproduct">
  
   
   <form method="POST" >
    <div class="form-group">
   
    <label for="productname">ProductName</label><br>
    <input placeholder="ProductName" value="<?php echo $product['productname'] ?>" type="text" name="productname" class="form-control" >  <br>
    <input type="hidden" name="idproduct" value="<?php echo $product['idproduct'];?>"> <br>

    <label for="price">Price</label><br>
    <input value="<?php echo $product['price']; ?>" type="number" name="price" class="form-control" placeholder="price"><br>

    <label for="productdesc">Description</label><br>
    <input value="<?php echo $product['productdesc']; ?>" type="text" name="productdesc" class="form-control" placeholder="product description"><br>

    <label for="img"  value="<?php echo $product['img']; ?>"> IMAGE</label><br>


    <input type="file" name="img" class="form-control" ><br>
    <button type="submit" class="form-control btn btn-primary" name="submit">update</button>
    </div>

   </form>
    
     
</div>
</center>

</body>
</html>