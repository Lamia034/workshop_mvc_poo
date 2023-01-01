<?php 
require_once '../database/DB.php';

class product {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM products');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt = null;
	}

	static public function getProduct($data){
		$idproduct = $data['idproduct'];
		try{
			$query = 'SELECT * FROM products WHERE idproduct=:idproduct';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idproduct" => $idproduct));
			$product = $stmt->fetch(PDO::FETCH_OBJ);
			return $product;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	} 

	static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO products (idproduct,img,productname,productdesc,price)
			VALUES (NOT NULL,:img,:productname,:productdesc,:price)');
		$str = srtval($data['img']);
		$stmt->bindParam(':img',$str,PDO::PARAM_STR);
		// $stmt->bindparam(':img',$data['img'],PDO::PARAM_STR);
		$stmt->bindParam(':productname',$data['productname'], PDO::PARAM_STR);
		$stmt->bindParam(':productdesc',$data['productdesc'], PDO::PARAM_STR);
		$pr = intval($data['price']);
		$stmt->bindParam(':price' , $pr, PDO::PARAM_INT );
	

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt = null;
	}
	static public function update($data){
		$stmt = DB::connect()->prepare('UPDATE products SET img=:img, productname=:productname,
		productdesc=:productdesc, price=:price WHERE idproduct=:idproduct');
		$stmt->bindParam(':img',$data['img'], PDO::PARAM_STR);
		$stmt->bindParam(':productname',$data['productname'], PDO::PARAM_STR);
		$stmt->bindParam(':productdesc',$data['productdesc'], PDO::PARAM_STR);
		$pr = intval($data['price']);
		$stmt->bindParam(':price' , $pr, PDO::PARAM_INT );
		$stmt->bindParam(':idproduct' , $data['idproduct'], PDO::PARAM_INT );

		// var_dump($data['price']);
		// die();
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt = null;
	}



	static public function delete($data){
		$idproduct = $data['idproduct'];
		try{
			$query = 'DELETE FROM products WHERE idproduct=:idproduct';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idproduct" => $idproduct));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}



}