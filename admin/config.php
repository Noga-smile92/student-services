


<?php

class gg
{
       public $username;
        public $host;
        public $pass;
        public $db;
        public $conn;
    
        public function kk()
        {
     return [$this->username = "root",
     $this->host = "localhost",
     $this->pass = "",
     $this->db = "services"];
            
        }
    }
    class Nagla extends gg
    {
        public function __construct()
    {
        parent::kk();
        $this->conn = new mysqli($this->host, $this->username, $this->pass, $this->db) or die('could not connect to mysql');
        
    }
    
    }
    
      
    

?>      
