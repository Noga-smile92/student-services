<?php
//include 'C:\wamp64\www\rakwan-shop\config\app.php';

 class registercontroller
{
    
    public function __construct()
    {
        $db= new dbconnection;
        $this->conn=$db->conn;
    }
   
public function registration($name,$email,$pass)
{
$register_query=("INSERT INTO users(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
$result=$this->conn->query($register_query);
return $result;
}
public function isusersexists($email)
{
    $checkuser="SELECT Email FROM users WHERE email='$email' LIMIT 1";
    $result=$this->conn->query($checkuser);
    if ($result->num_rows>0)
    {
        return true;
    }
    else 
    {
        return false;
       
    }
}

public function confirmpassword($pass,$cpass)
{
if ($pass==$cpass)
{
    return true;
}else 
{
    return false;
}
}
}
?>