<?php
require_once ('../Objects/ReviewController.php');
$reviews = new ReviewController;
if(isset($_GET['productName'])){
    $productName = $_GET['productName'];
}
if(isset($_GET['review'])){
    $review = $_GET['review'];
}
$reviews->delete($productName, $review);
header('Location: '.$_SERVER['HTTP_REFERER']);
?>