<?php 

class product {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM products');
		$stmt->execute();
		return $stmt->fetchAll();
		// $stmt->close();
		$stmt = null;
	}

	static public function getProduct($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM products WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$product = $stmt->fetch(PDO::FETCH_OBJ);
			return $product;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO products (Img,ProductName,ProductPrice)
			VALUES (:img,:productname,:productprice)');
		$stmt->bindParam(':img',$data['Img']);
		$stmt->bindParam(':productname',$data['ProductName']);
		$stmt->bindParam(':productprice',$data['ProductPrice']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		// $stmt->close();
		$stmt = null;
	}
	static public function update($data){
		$stmt = DB::connect()->prepare('UPDATE products SET Img=:img,ProductName=:productname,ProductPrice=:productprice WHERE id=:id');
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':img',$data['Img']);
		$stmt->bindParam(':productname',$data['ProductName']);
		$stmt->bindParam(':productprice',$data['ProductPrice']);
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