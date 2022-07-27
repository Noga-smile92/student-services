
<?php

class Nagla
{
       public $user;
        public $host;
        public $pass;
        public $conn;
        
            public function __construct()
        {
            $this->gg();
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        }
    public function gg()
    {
     return [$this->user = "root",
     $this->host = "localhost",
     $this->pass = "",
     $this->db = "services"];  
    }
        public function connect()
        {
           
        if($this->conn->connect_error)
        {
            die("<h1> Database connection failed! <h1>");
        }else
        {
           
            return $this->conn=$conn;
         
            
        }
    }
}
?>