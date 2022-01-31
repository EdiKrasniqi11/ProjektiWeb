<?php include '../config.php'?>
<!DOCTYPE html>
<head>
    <title>Product</title>
    <link rel="stylesheet" href="productStyle.css?v=<?=$version?>">
</head>
<body>
    <?php include '../header/header.php'?>
    <div id="productDiv">
        <img src="..\Images\Laptop.jpg" alt="Image" height="400px" width="400px">
        <div id="productInfo">
            <h1>Mac Book Air 1TB</h1>
            <h3>The MacBook Air is easily one of the most exciting Apple laptops of recent years. Its M1 chip is a real game-changer, and the ability to run both legacy apps, M1-optimized apps and iOS apps is very impressive. Battery life is also great, and performance is excellent as well.</h3>
            <h4>2000.00$</h4>
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