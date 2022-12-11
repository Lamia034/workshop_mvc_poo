<?php
require_once 'HomeController.php'

$home = new HomeController();

$pages = ['home','tours','about','contact','add','update','delete'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
    }
}else{
    $home->index('home');
}

$home->index('$_GET['page']');
?>