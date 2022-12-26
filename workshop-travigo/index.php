<?php
require_once './autoload.php';
require_once './controller/HomeController.php';

$home = new HomeController();

$admin = ['add','update','delete','logout','dashboard','login'];

$pages = ['home','about','tours','contact'];



if (isset($_GET['page']) && in_array($_GET['page'],$admin)) {

  if (isset($_SESSION['logged']) && isset($_SESSION['logged']) === true) {
    if ($_GET['page'] === "login") {
      $home->index("dashboard");
    } else {
      $page = $_GET['page'];
      $home->index($page);
    }

  }else{
    $home->index('login');
  }

}else if(isset($_GET['page']) && in_array($_GET['page'],$pages)){
      $page=$_GET['page'];
      $home->index($page);
}else if (!isset($_GET['page'])) {
  $home->index('home');
}else{
  include('views/includes/404.php');
}

