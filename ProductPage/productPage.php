<?php include '../config.php';?>
<?php require_once ('../Objects/ProduktiController.php');
if(!isset($_SESSION)){
    session_start();
}
if(isset($_GET['id'])){
    $productName=$_GET['id'];
}
$product = new ProduktiController;
$currentProduct = $product->edit($productName);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
    <link rel="stylesheet" href="productStyle.css?v=<?=$version?>">
</head>
<body>
    <?php include '../header/header.php' ?>
    <div id="productDiv">
        <div id="productImage">
            <img src="<?php echo $currentProduct['imageLink']?>" alt="Image" height="400px" width="400px">
        </div>
        <div id="productInfo">
            <h1><?php echo $currentProduct['productName']?></h1>
            <p><?php echo $currentProduct['productDescription']?></p>
            <h4><?php echo $currentProduct['productPrice']?>$</h4>
            <button id="cartButton">
                <div id="flexCart">
                    <div id="addToImg"><img src="../Images/FilledCart.png" alt="FilledCart" width="24px" height="24px"></div>
                    <div><p><b>ADD TO CART</b></p></div>
                </div>
                
            </button>
            <a href="../Wishlist/addToWishlist.php?id=<?php echo $_GET['id']?>"><button id="wishlistButton"><img src="../Images/Heart.png" alt="Heart" id="heart"></button></a>
        </div>
    </div>
    <div id="reviewDiv">
        <h2>Reviews</h2>
        <textarea type="text" id="reviewSection" placeholder="Post a Review"></textarea><br>
        <button id="postButton" onclick="postReview()"><b>POST</b></button>
    </div>
    <?php include '../footer/footer.php'?>
    <script src="main.js"></script>
</body>
</html>