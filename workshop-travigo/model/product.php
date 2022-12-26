<?php 
require_once '../database/DB.php';

class product {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM products');
		$stmt->execute();
		return $stmt->fetchAll();
		// $stmt->close();
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
		$stmt = DB::connect()->prepare('INSERT INTO products (img,productname,productdesc,price)
			VALUES (:img,:productname,:productdesc,:price)');
		$stmt->bindParam(':img',$data['img']);
		$stmt->bindParam(':productname',$data['productname']);
		$stmt->bindParam(':price',$data['price']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		// $stmt->close();
		$stmt = null;
	}
	static public function update($data){
		$stmt = DB::connect()->prepare('UPDATE products SET img=:img,productname=:productname,productdesc=productdesc,price=:price WHERE idproduct=:idproduct');
		$stmt->bindParam(':idproduct',$data['idproduct']);
		$stmt->bindParam(':img',$data['img']);
		$stmt->bindParam(':productname',$data['productname']);
		$stmt->bindParam(':productdesc',$data['productdesc']);
		$stmt->bindParam(':price',$data['price']);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		// $stmt->close();
		$stmt = null;
	}

	static public function delete($data){
		$id = $data['id'];
		try{
			$query = 'DELETE FROM products WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

}