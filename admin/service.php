 <?php
include_once('C:\wamp64\www\Student Services\admin\config.php');
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
class del 
{
  private $dels;
  public function __construct(Service $dels)
{
  $this->dels=$dels;

 }
 public function connect()
 {
return $this->dels->connect();
 }
 
    public function delete($id)
    {
      return $this->connection->connect();
     $id =("DELETE FROM products WHERE id= $id");
          return $this->conn->query($id);
     
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
  $result= $this->conn->query($insert);
   return $result;
  
  }
  
  
}
class updaten 
{
  public function __construct(Service $up)
    {
      $this->up=$up;
    
     }
     
 public function connect()
 {
return $this->$up->connect();
 }
  public function updatecondition($id,$name,$price,$image_up) 
    {
     
      if(isset($_SESSION["image_location"]))
          
{
  $rr=$this->conn->query("UPDATE products SET name='$name', price='$price' WHERE id='{$_SESSION['id']}'");
}else
{
  move_uploaded_file($_SESSION ["image_location"],'images/'.$_SESSION["image_name"]);
  $rr=$this->conn->query("UPDATE products SET name='$name', price='$price', image='$image_up' WHERE id='{$_SESSION['id']}'"); 
}
return $rr;

  }
}
               
  



  
   

 




    

  


?>
           
  



  
   

 




    

  






