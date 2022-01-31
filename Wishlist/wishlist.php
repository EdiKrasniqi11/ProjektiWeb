<?php include '../config.php' ?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="wishlistStyle.css?v=<?=$version?>">
</head>
<body>
    <?php include '../header/header.php'?>
    <div class="korniza">
        <div class="cartDiv">
            <div class="div1-kornizat-faqja">
                <img src="../Images/Heart.png" alt="" width="32px" height="32">
                <h3>Your wishlist is empty</h3>
                <p>The products that are saved here arent secured so any product that goes out of stock will not be available for purchase</p><br>
                <a href="../Categories/categories.html"><button id="continueButton">Continue Shopping</button></a>
            </div>
        </div>
        <div class="recommendDiv">
            <p>Recommended by us</p>
            <div class="cartList">
                <a href="../ProductPage/ps5.html"><img src="../Images/PS5.jpg" alt="" id="recommendItem1"></a>
            </div>
            <div class="cartList">
                <a href="../ProductPage/macBook.html"><img src="../Images/Laptop.jpg" alt="" id="recommendItem2"></a>
            </div>
            <div class="cartList">
                <a href="../ProductPage/beats.html"><img src="../Images/Headphones.jpg" alt="" id="recommendItem3"></a>
            </div>
        </div>
    </div>
    <?php include '../footer/footer.php'?>
</body>