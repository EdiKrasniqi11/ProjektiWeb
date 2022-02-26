<?php
    require_once ('Database.php');
    class ReviewController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }
        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM reviews');
            return $query->fetchAll();
        }
        public function insert($productName, $request){
            try{
                $query = $this->db->pdo->prepare('INSERT INTO reviews(productName,userEmail,review) VALUES (:productName, :userEmail, :review)');
                $query->bindParam(':productName', $productName);
                $query->bindParam(':userEmail', $_SESSION['user']);
                $query->bindParam(':review', $request['review']);
                $query->execute();
            }catch(PDOException $pdoe){
                echo '<script>alert("To stop from spamming please don\'t type the same review twice!");</script>';
                header('Location: '.$_SERVER['HTTP_REFERER']);
            }
        }
        public function delete($productName, $review){
            $query = $this->db->pdo->prepare('DELETE FROM reviews WHERE productName = :productName AND userEmail = :userEmail AND review = :review');
            $query->bindParam(':productName', $productName);
            $query->bindParam(':userEmail', $_SESSION['user']);
            $query->bindParam(':review', $review);
            $query->execute();
        }
    }
?>      