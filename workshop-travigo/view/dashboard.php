<?php
require_once '../controller/ProductsController.php';
// require_once '../alerts.php';
$data = new ProductController();
$products = $data->getAllProducts();

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




    <table  class="table" border="1">
  <thead>
    <th >Image</th>
    <th >Product</th>
    <th>Price</th>
    <th>Description</th>
    <th>edite/delete</th>
    <th >add new product</th>
  </thead>
  <tbody>
    <?php foreach($products as $product):?>
    <tr>
      <td><img src="./view/img/<?php echo $product['img'];?>" style="width: 50px;"></td>
      <td><?php echo $product['productname'];?></td>
      <td><?php echo $product['price'];?></td>
      <td><?php echo $product['productdesc'];?></td>


      <td style="display:flex;justify-content:space-between;justify-content:space-around;">
                    <form method="POST" class="me-1" action="update.php">
                        <input type="hidden" name="idproduct" value="<?php echo $product['idproduct'];?>">
                        <button type="submit" name="submit" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>

                        
                    </form>
                    <form method="POST" class="me-1" action="delete.php">
                        <input type="hidden" name="idproduct" value="<?php echo $product['idproduct'];?>">
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                    
                </td>
                <td>
                <form method="POST" class="me-1" action="add.php">
                        <input type="hidden" name="idproduct" value="<?php echo $product['idproduct'];?>">
                        <button class="btn btn-sm btn-danger"><i class="fa-solid fa-plus"></i></button>
                    </form>
    </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>




<script src="js/script.js"></script>
</body>
</html>