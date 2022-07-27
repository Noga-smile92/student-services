<?php
session_start();
define('URL_SITE','http://localhost/student services/');
include_once 'C:\wamp64\www\student services\config\dbconnection.php';
$db= new dbconnection;
if (!function_exists('base_url'))   
{
    function base_url($slug)
{
   echo URL_SITE.$slug;
}
}
function redirect($message,$page)
{
    $redirectto =URL_SITE.$page;
    $_SESSION['message']="$message";
    header ("location:$page");
    exit(0);
}
if (!function_exists('validateinput'))   
{
function validateInput($dbcon,$input)
{
    return mysqli_real_escape_string($dbcon,$input);
}
}
?>