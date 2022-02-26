<?php include '../config.php';?>
<?php require_once ('../Objects/ProduktiController.php');
require_once ('../Objects/WishlistController.php');
require_once ('../Objects/CartController.php');
require_once ('../Objects/ReviewController.php');
require_once ('../Objects/UserController.php');
if(!isset($_SESSION)){
    session_start();
}
if(isset($_GET['id'])){
    $productName=$_GET['id'];
}
$product = new ProduktiController;
$currentProduct = $product->edit($productName);
$wishlist = new WishlistController;
$cart = new CartController;
$review = new ReviewController;
$allReviews = $review->readData();
$user = new UserController;

if(isset($_POST['submit'])){
    if($_POST['review'] == ''){
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }else{
        $review->insert($productName, $_POST);
        header('Location: productPage.php?id='.$productName);
    }
}

if($wishlist->exists($productName)){
    $favImage = '../Images/favFillProd.png';
    $favLink = '../Wishlist/deleteFromWishlist.php';
}else{
    $favImage = '../Images/favProd.png';
    $favLink = '../Wishlist/addToWishlist.php';
}
if($cart->exists($productName)){
    $cartText = 'ADDED';
    $cartLink = '../Cart/deleteFromCart.php';
}else{
    $cartText = 'ADD TO CART';
    $cartLink = '../Cart/addToCart.php';
}
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
            <a href="<?php echo $cartLink;?>?id=<?php echo $currentProduct['productName']?>"><button id="cartButton">
                <div id="flexCart">
                    <div id="addToImg"><img src="../Images/FilledCart.png" alt="FilledCart" width="24px" height="24px"></div>
                    <div><p><b><?php echo $cartText;?></b></p></div>
                </div>
            </button></a>
            <a href="<?php echo $favLink;?>?id=<?php echo $_GET['id']?>"><button id="wishlistButton"><img src="<?php echo $favImage?>" alt="Heart" id="heart"></button></a>
        </div>
    </div>
    <div id="reviewDiv">
        <h2>Reviews</h2>
        <form method="POST">
            <input type="text" id="reviewSection" name="review" placeholder="Post a Review" ></textarea><br>
            <input type="submit" name="submit" id="postButton" value="POST">
        </form>
        <br><br>
        <?php
            foreach($allReviews as $reviewIndex){
                if($reviewIndex['productName'] == $productName){
                    $useri = $user->edit($reviewIndex['userEmail']);
                    echo '<div id="review">'.$useri['userName'].' '.$useri['userSurname'].': '.$reviewIndex['review'].'<p id="reviewDate">'.$reviewIndex['reviewDate'].'<p>';
                    if($reviewIndex['userEmail'] == $_SESSION['user']){
                        echo '<a href="deleteReview.php?productName='.$productName.'&review='.$reviewIndex['review'].'" name="delete" id="deleteReview">Delete</a>';
                    }
                    echo '</div><br>';
                }
            }
        ?>
    </div>
    <?php include '../footer/footer.php'?>
    <script src="main.js"></script>
</body>
</html>