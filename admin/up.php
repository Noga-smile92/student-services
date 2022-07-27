<?php
session_start();
include ('service.php');
include_once ('config.php');
if(isset($_POST['update'])){
    $_SESSION["id"] = $_POST['id'];
    $name  = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $_SESSION ["image_location"] = $_FILES['image']['tmp_name'];
    $_SESSION ["image_name"] = $_FILES['image']['name'];
    $_SESSION["image_up"] = "images/" .$_SESSION["image_name"];
    $nn= new service;
   $ee=$nn->updatecondition($_SESSION["id"],$name,$price, $_SESSION["image_up"]);
       header('location: index.php');
}
?>