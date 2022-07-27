<?php
//include 'C:\wamp64\www\rakwan-shop\config\app.php';
include_once  'registercontroller.php';
include_once  'logincontroller.php';
if (isset($_POST['login_btn']))
{
    $email = validateInput($db->conn, $_POST['email']);
    $pass = validateInput($db->conn, md5($_POST['password']));
$auth=new logincontroller;
$checklogin=$auth->userlogin($email,$pass);
if ($checklogin){
        
        
    redirect("logged in successfully","index.php");  
    
}else
{
    redirect("invalid Email or password","login2.php");
}
}
if(isset($_POST['submit']))
{

   $name = validateInput($db->conn, $_POST['name']);
   $email = validateInput($db->conn, $_POST['email']);
   $pass = validateInput($db->conn, md5($_POST['password']));
   $cpass = validateInput($db->conn, md5($_POST['cpassword']));
   $register= new registercontroller;
   $result_password=$register->confirmpassword($pass,$cpass);
   $result_user=$register->isusersexists($email);
   $register_query=$register->registration($name,$email,$pass);
if($result_password)
{
    if ($result_user){
        
        
    redirect("already Email Exists","register.php");  
    
    }else{
    
    if($register_query){
        
    redirect("registered successfully","login2.php");
   
    
    }else{
       
        redirect("something went wrong","register.php");
        
       
} 
       
  
}
}
else
{ 
    redirect("password and confirm password doesn't match","register.php");
    
}
}
?>
