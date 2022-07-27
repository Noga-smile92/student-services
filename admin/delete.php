<?php
include_once('service.php');
$_SESSION["id"]=$_GET['id'];
$del= new service;
$nn= $del->delete($_SESSION["id"]);
header('location: products.php')

?>