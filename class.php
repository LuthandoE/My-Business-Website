<?php

   class news{
    
    private $mysqli;
    public function __construct(){
      $this->mysqli = new mysqli();
    }
    public function __destruct(){
        
    }
  }

?>