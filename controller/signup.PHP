<?php 
   $db = new PDO('mysql:host=127.0.0.1;dbname=brief5;charset=utf8','root','');
   $query = $db->prepare('select * from user ');
   $data = $query->fetch();
   if(isset($_POST['submit'])){
	$Name = $_POST['name'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$req = $db->prepare("insert into user (name,Email,Password) values(?,?,?)");
	$req->execute([$Name,$Email,$Password]);
	header('location: ../view/login.php');
   }
 
   
  
  
?>