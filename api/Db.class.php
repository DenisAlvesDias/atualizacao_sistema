<?php

class Db {
   private $con = null;
   
   public function con(){
       if($this->con==null){
           $this->con = new PDO(
                \sprintf("mysql:host=%s;dbname=%s;charset=utf8", "localhost", "food"), 
                "root", 
                "",
                array(
                    PDO::ATTR_EMULATE_PREPARES => false
                    )
            );
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       }
       
       return $this->con;
       
   }
}
