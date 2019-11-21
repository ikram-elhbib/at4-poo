<?php 
     
     class BaseDonnees
     {
         private $host='localhost';
         private $dbname='dsi22_g1_2019';
         private $user='root';
         private $pwd='';
         public $pdo=NULL;

         public function connectDB()
             {
                 try {
                     $this->pdo=new PDO('mysql:host='.$this->host.';dbname='.$this->dbname ,$this->user, $this->pwd);
                 } catch (PDOException $e) {
                     echo $e->getMessage();
                     
                 }
                 //***il faut retourner le resultat */
                 return $this->pdo;
             }
  
     }
  
    
    ?>