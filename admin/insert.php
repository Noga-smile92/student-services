<?php
include ('service.php');
include_once ('config.php');
if(isset($_POST['upload']))
{
    $name  = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $_SESSION["image_location"] = $_FILES['image']['tmp_name'];
    $_SESSION["image_name"] = $_FILES['image']['name'];
    $_SESSION["image_up"] = "images/". $_SESSION["image_name"];
    $insert= new service();
    $up=$insert->upload($name,$price, $_SESSION["image_up"]);
    $load=$insert->condition($_SESSION["image_location"],$_SESSION["image_up"]);
    if($load) 
    {
        echo "<script> alert('upload service successfully'); </script>";

    }else
    {
        echo "<script> alert('make error'); </script>";
    }
    header('location: index.php');
}


?>
