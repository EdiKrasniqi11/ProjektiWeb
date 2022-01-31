<?php include '../config.php'?>
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
            <img src="..\Images\Headphones.jpg" alt="Image" height="400px" width="400px">
        </div>
        <div id="productInfo">
            <h1>Beats by Dre Headphones</h1>
            <p>Dre (Beats) is a leading audio brand founded in 2006 by Dr. Dre and Jimmy Iovine. Through its family of premium consumer headphones, earphones and speakers, Beats has introduced an entirely new generation to the possibilities of premium sound entertainment. Dynamically block unwanted external noise with Active Noise Cancelling (ANC). When you need to hear the world around you, switch to Transparency mode, which uses external-facing microphones to mix the sounds around you for a natural listening experience.</p>
            <h4>150.00$</h4>
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