<?php
require_once('Database.php');   
class ProduktiController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function readData(){
        $query = $this->db->pdo->query('SELECT * FROM produkti');
        return $query->fetchAll();
    }
    public function insert($request){
        $request['productLink'] = '../ProductPage/'.$request['productLink'];
        $request['imageLink'] = '../Images/'.$request['imageLink'];
        $query = $this->db->pdo->prepare('INSERT INTO produkti(productLink,imageLink,productName,productDescription,productPrice,category) VALUES (:productLink, :imageLink, :productName, :productDescription, :productPrice, :category)');
        $query->bindParam(':productLink', $request['productLink']);
        $query->bindParam(':imageLink', $request['imageLink']);
        $query->bindParam(':productName', $request['productName']);
        $query->bindParam(':productDescription', $request['productDescription']);
        $query->bindParam(':productPrice', $request['productPrice']);
        $query->bindParam(':category', $request['category']);
        
        $query->execute();
        header("Location:../Dashboard/dashboard.php");
    }
    public function edit($productName){
        $query = $this->db->pdo->prepare('SELECT * from produkti WHERE productName = :productName');
        $query->bindParam(':productName', $productName);
        $query->execute();

        return $query->fetch();
    }
    public function update($request, $productName){
        $request['imageLink'] = '../Images/'.$request['imageLink'];
        $query = $this->db->pdo->prepare('UPDATE produkti SET productLink=:productLink, imageLink=:imageLink, productDescription=:productDescription, productPrice=:productPrice, category=:category WHERE productName=:productName');
        $query->bindParam(':productLink', $request['productLink']);
        $query->bindParam(':imageLink', $request['imageLink']);
        $query->bindParam(':productDescription', $request['productDescription']);
        $query->bindParam(':productPrice', $request['productPrice']);
        $query->bindParam(':category', $request['category']);
        $query->bindParam(':productName', $productName);

        $query->execute();
        header("Location:../Dashboard/dashboard.php");
    }
    public function delete($productName){
        $query = $this->db->pdo->prepare('DELETE from produkti WHERE productName = :productName');
        $query->bindParam(':productName', $productName);
        $query->execute();
        header("Location: dashboard.php");
    }
}
?>