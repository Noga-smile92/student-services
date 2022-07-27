<?php
//include 'C:\wamp64\www\student services\config\app.php';

 class logincontroller
{
    public function __construct()
    {
        $db= new dbconnection;
        $this->conn=$db->conn;
    }
    public function userlogin($email,$pass)
    {
        $checklogin = ("SELECT * FROM `users` WHERE email = '$email' AND password = '$pass' LIMIT 1") or die('query failed');
       $result =$this->conn->query($checklogin);
       if ($result->num_rows>0)
       {
        $data = $result->fetch_assoc();
        $this->userauthenication($data);
        return true;
       }
       else 
       {
           return false;
          
       }
    }
       public function userauthenication($data)
       {
        $_SESSION['authenicated']=true;
        //$_SESSION['auth_role']=$data['role_as'];
        $_SESSION['auth_user']=[
'user_id'=>$data['id'],
'user_fname'=>$data['name'],
'user_email'=>$data['email'],
'user_pass'=>$data['password']];
       }
   
}
    ?>