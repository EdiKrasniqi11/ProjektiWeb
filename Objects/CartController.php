<?php
    require_once ('Database.php');
    class CartController{
        public $db;
        
        public function __construct(){
            $this->db=new Database;
        }
        public function insert($productName){
            $query = $this->db->pdo->prepare('INSERT INTO cart(productName,userEmail) VALUES (:productName, :userEmail)');
            $query->bindParam(':productName', $productName);
            $query->bindParam(':userEmail', $_SESSION['user']);
            $query->execute();
        }
        public function delete($productName){
            $query = $this->db->pdo->prepare('DELETE FROM cart WHERE productName = :productName');
            $query->bindParam(':productName', $productName);
            $query->execute();
        }
        public function edit($productName){
            $query = $this->db->pdo->prepare('SELECT * from cart WHERE productName = :productName');
            $query->bindParam(':productName', $productName);
            $query->execute();
    
            return $query->fetch();
        }
        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM cart');
            return $query->fetchAll();
        }
    }
?>