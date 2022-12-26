<?php
if(isset($_POST['submit'])){
    $newProduct = new ProductController();
    $newProduct->addProduct();
}

?>

<div class="container mt-3">
    <div class="card-header">ADD Product</div>
   <a href="<?php echo BASE_URL;?>dashbord" class="btn btn-primary">HOME</a>
   
   <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="ProductName">destination</label>
    <input type="text" name="productname" class="form-control" placeholder="ProductName">   
    <label for="Price">Price</label>
    <input type="number" name="price" class="form-control" placeholder="Price">
    <label for="ProductDesc">description</label>
    <input type="text" name="productdesc" class="form-control" placeholder="ProductDescription">
    <label for="image"> IMAGE</label>
    <input type="file" name="file" class="form-control" >
    <button type="submit" class="form-control btn btn-primary" name="submit">SUBMIT</button>
    
    </div>

   </form>
    
       
</div>
