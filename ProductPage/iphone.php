<?php include '../config.php'?>
<!DOCTYPE html>
<head>
    <title>Product</title>
    <link rel="stylesheet" href="productStyle.css?v=<?=$version?>">
</head>
<body>
    <?php include '../header/header.php'?>
    </div>
    <div id="productDiv">
        <img src="..\Images\Phone.jpg" alt="Image" height="400px" width="400px">
        <div id="productInfo">
            <h1>iPhone 13 128GB</h1>
            <h3>The iPhone 13 and 13 Mini received a number of significant upgrades including new cameras, a bigger battery, more storage and a brighter screen. The iPhone 13 is a delightful upgrade to last year's already wonderful iPhone 12 family. Some will be disappointed because it's not radically different from previous models, but that's actually part of the charm.</h3>
            <h4>1500.00$</h4>
            <div id="buttons">
                <button id="cartButton">
                    <div id="flexCart">
                        <div id="addToImg"><img src="../Images/FilledCart.png" alt="FilledCart" width="24px" height="24px"></div>
                        <div><p><b>ADD TO CART</b></p></div>
                    </div>
                    
                </button>
                <button id="wishlistButton"><img src="../Images/Heart.png" alt="Heart"></button>
            </div>
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