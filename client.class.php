<?php 
  require 'dbconnect.class.php';

  Class Client
    {
        private $cnx;

        public function __construct()
        {
            $db=new  BaseDonnees;
            $this->cnx=$db->connectDB();

        }

        public function ReadAllClients()
        {
            try {
                $req='SELECT * FROM students';
                $result=$this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }

        public function creatClient($Id,$firstname,$lastname,$email,$phone) 
        {
            try {
                $sql='INSERT INTO students(Id,firstname,lastname,email,phone)
                VALUES (:etu_id,:etu_fn,:etu_ln,:etu_email,:etu_phone)';
                $result=$this->cnx->prepare($sql);
                $result->bindparam(':etu_id',$Id);
                $result->bindparam(':etu_fn',$firstname);
                $result->bindparam(':etu_ln',$lastname);
                $result->bindparam(':etu_email',$email);
                $result->bindparam(':etu_phone',$phone);
                $result->execute();
                return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
        public function updateClient($Id,$firstname,$lastname,$email,$phone)
        {
            try{
           
            $sql='UPDATE students SET  firstname= :e_firstname , lastname=:e_lastname, email =:e_email ,phone=:e_phone WHERE Id =:e_id ';
            $result=$this->cnx->prepare($sql);
            $result->bindparam(':e_firstname',$firstname);
            $result->bindparam(':e_lastname',$lastname);
            $result->bindparam(':e_email',$email);
            $result->bindparam(':e_phone',$phone);
            $result->bindparam(':e_id',$Id);
            $result->execute();
            return $result;
        } catch (PDOEXception $e) {
            echo $e->getMessage();
        }
        }
        public function DeleteClient($Id,$firstname,$lastname,$email,$phone )
        {
            try {
                $sql='DELETE FROM students WHERE Id=:e_id';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(':e_id',$Id);
                $result->execute();
                return $result;
            } catch (PDOEXception $e) {
                   echo $e->getMessage();
            }
        }
    }


?>