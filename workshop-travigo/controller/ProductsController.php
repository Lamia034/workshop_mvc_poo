<?php 

class ProductsController{

	public function getAllProducts(){
		$products = Product::getAll();
		return $products;
	}

	public function getOneProduct(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$product = Product::getProduct($data);
			return $product;
		}
	}
	public function findProducts(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$products = Products::searchProduct($data);
		return $products;
	} 

	public function addProduct(){
		if(isset($_POST['submit'])){
			//  $imageNft = $_POST['imageNft'];
			$data = array(
				'img' => $_POST['Img'],
				'productname' => $_POST['ProductName'],
				'productprice' => $_POST['ProductPrice'],
			);
			$result = Product::add($data);
			if($result === 'ok'){
				Session::set('success','Product added');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

	public function updateProduct(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'img' => $_POST['Img'],
				'productname' => $_POST['ProductName'],
				'productprice' => $_POST['ProductPrice'],
			);
			$result = Product::update($data);
			if($result === 'ok'){
				Session::set('success','Product modified');
				Redirect::to('profil');
			}else{
				echo $result;
			}
		}
	}
	public function deleteProduct(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = Product::delete($data);
			if($result === 'ok'){
				Session::set('success','product deleted');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

}



?>