<?php
include_once('config.php');

class service 
{
    public $name;
    public $price;
    public $image;
    public $image_name;
    public $image_up;
    public $image_location;

 public function __construct()
{
 $db=new Nagla;
 $this->conn= $db->conn;
 }

public function upload($name,$price,$image_up)
{
  
  $insert=("INSERT INTO  products (name, price, image) VALUES ('$name', '$price', '$image_up')");
  $result=$this->conn->query($insert);
 return $result;

}
public function condition($image_location,$image_up)
{
    
    move_uploaded_file($_SESSION ["image_location"],'images/'.$_SESSION["image_name"]);
    
  }
  public function updatecondition($id,$name,$price,$image_up)
    {
      if(isset($_SESSION["image_location"]))
      if($_SESSION["image_location"] != "" )
      
{
    $this->condition($image_location,$image_up);
   $rr= $this->conn->query($this->update($_SESSION['id'],$name,$price,$image_up));
    
}else
{
  
  $rr =$this->conn->query ("UPDATE products SET name='$name', price='$price' WHERE id='{$_SESSION['id']}'");
  
}

  
  }
               
    
    public function update($id,$name,$price,$image_up)
    {
      
      $update = $this->conn->query("UPDATE products SET name='$name', price='$price', image='$image_up' WHERE id='{$_SESSION['id']}'");
    
    }
    public function delete($id)
    {
      
     $id =$this->conn->query("DELETE FROM products WHERE id= $id");
     return $id;
    }

  }


?>
