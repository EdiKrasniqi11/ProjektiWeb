<?php include '../config.php' ?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="stilizimiCart.css?v=<?=$version?>">
</head>
<body>
<?php include '../header/header.php' ?>
    <div class="korniza">
        <div class="cartDiv">
            <div class="div1-kornizat-faqja">
                <img src="../Images/Cart.png" alt="" width="32px" height="32">
                <h3>Your cart is empty</h3>
                <p>The products that are saved here arent secured so any product that goes out of stock will not be available for purchase</p><br>
                <a href="../Categories/categories.php"><button id="continueButton">Continue Shopping</button></a>
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