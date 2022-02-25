<?php include '../config.php';
require_once ('../Objects/CartController.php');
require_once ('../Objects/Produkti.php');
require_once ('../Objects/ProduktiController.php');
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['user'])){
    echo '<script>window.location.href="../Login/login.php";
        alert("Please Log in!");</script>';
}else{
    $cart = new CartController;
    $produktet = new ProduktiController;
    $allProducts = $cart->readData();
}?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="stilizimiCart.css?v=<?=$version?>">
</head>
<body>
<?php include '../header/header.php' ?>
    <div class="korniza">
        <div class="cartDiv">
            <div class="div1-kornizat-items">
                <?php 
                     $count = 0;
                     foreach($allProducts as $produkti){
                         if($produkti['userEmail'] == $_SESSION['user']){
                         $current = $produktet->edit($produkti['productName']);
                         echo "
                            <div class=\"product\" id=\"".$current['category']."\">
                                <a href=\"../ProductPage/productPage.php?id=".$current['productName']."\"><img src=".$current['imageLink']." >
                                <div id=\"prodDesc\">
                                    <div id=\"prodName\">
                                        <h4>".$current['productName']."</h4>
                                    </div>
                                    <h5>".$current['productPrice']."</h5></a>
                                    <a href=\"deleteFromCart.php?id=".$current['productName']."\" id=\"removeWish\">Remove</a>
                                </div>
                            </div>";
                            $count++;
                        }                                
                    }
                    if($count==0){
                        echo '<div class="div1-kornizat-faqja">
                                    <img src="../Images/Cart.png" alt="" width="32px" height="32">
                                    <h3>Your cart is empty</h3>
                                    <p>The products that are saved here arent secured so any product that goes out of stock will not be available for purchase</p><br>
                                    <a href="../Categories/categories.php"><button id="continueButton">Continue Shopping</button></a>
                               </div>';
                    }else{
                        echo '</br><a href="../Categories/categories.php"><button id="continueButton">Continue Shopping</button></a>';
                    }
                ?>
            </div>
        </div>
        <div class="recommendDiv">
            <p>Recommended by us</p>
            <div class="cartList">
                <a href="../ProductPage/ps5.php"><img src="../Images/PS5.jpg" alt="" id="recommendItem1"></a>
            </div>
            <div class="cartList">
                <a href="../ProductPage/macBook.php"><img src="../Images/Laptop.jpg" alt="" id="recommendItem2"></a>
            </div>
            <div class="cartList">
                <a href="../ProductPage/beats.php"><img src="../Images/Headphones.jpg" alt="" id="recommendItem3"></a>
            </div>
        </div>  
    </div>
    <?php include '../footer/footer.php' ?>
</body>
</head>
</html>