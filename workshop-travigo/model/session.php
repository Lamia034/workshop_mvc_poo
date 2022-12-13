<?php
session_start();
if(!isset($_SESSION['Email'])){
	header("location:/workshop-travigo/profil.php?erreur=1");
	die();
}