<?php 
require_once '../model/product.php';
require_once '../database/DB.php';

class ProductController{

	public function getAllProducts(){
		$products = product::getAll();
		return $products;
	}

	public function getOneProduct(){
		if(isset($_POST['idproduct'])){
			$data = array(
				'idproduct' => $_POST['idproduct']
			);
			$produit = Product::getProduct($data);
			return $produit;
		}
	}
	

	public function addProduct(){
		if(isset($_POST['submit'])){
			$data = array(
				'img' => $_POST['img'],
				'productname' => $_POST['productname'],
				'productdesc' => $_POST['productdesc'],
				'price' => $_POST['price'],
			);
			$result = product::add($data);
			if($result === 'ok'){
				session::set('success','Product added');
				Redirect::to('home.php');
			}else{
				echo $result;
			}
		}
	}

	public function updateProduct(){
	
			if(isset($_POST['update'])){
       $data = array(
				'idproduct' => $_POST['idproduct'],
				'productname' => $_POST['productname'],
				'price' => $_POST['price'],
				'productdesc' => $_POST['productdesc'],
				'img' => $_POST['img'],
	  			 );	
				 $result = Product::update($data);
				if($result === 'ok'){

				 session::set('success','modified');
				  Redirect::to('home.php');
				 }else{
				echo $result;
			}
		}
	}


}



?>