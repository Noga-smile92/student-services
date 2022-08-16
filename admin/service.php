<?php
include_once('config.php');
interface Service 
{
   
  public function connect();

}
class SQlconnection implements Service
{
   
  public function connect()
  {
   
  $db= new Nagla;
  $this->conn=$db->conn;
return $this->conn;
  }
}

class uploo 
  {
    public $uploos;
    public function __construct(Service $uploos)
    {
      $this->uploos=$uploos;
    
     }
     public function connect()
     {
      return $this->uploos->connect();
      
     }
        
  public function upload($name,$price,$image_up)
  {
    
    $insert=("INSERT INTO  products (name, price, image) VALUES ('$name', '$price', '$image_up')");
    $result=$this->conn->query($insert);
    return $result;
   
  
  }
  
  
}


  
   

 




    

  


?>
