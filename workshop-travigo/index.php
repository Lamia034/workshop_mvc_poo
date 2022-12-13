<?php 
// require_once './view/includes/header.php';
require_once './autoload.php';
require_once './controller/HomeController.php';


$home = new HomeController();

$user = ['add','update','delete','logout','login','profil'];

$pages = ['home','about','tours','contact'];



if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){

	if(isset($_GET['page'])){
		if(in_array($_GET['page'],$pages)){
			$page = $_GET['page'];
			$home->index($page);
		}else{
			include('view/includes/404.php');
		}
	}else{
		$home->index('home');
	}
}


// require_once './views/includes/footer.php';
