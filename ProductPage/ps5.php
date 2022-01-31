<?php include '../config.php'?>
<!DOCTYPE html>
<head>
    <title>Product</title>
    <link rel="stylesheet" href="productStyle.css?v=<?=$version?>">
</head>
<body>
    <?php include '../header/header.php'?>
    <div id="productDiv">
        <img src="..\Images\PS5.jpg" alt="Image" height="400px" width="400px">
        <div id="productInfo">
            <h1>Sony Playstation 5 1TB</h1>
            <h3>The PS5 is a powerful and well-designed console that offers a compelling next-gen gaming experience. Its library of exclusive games continues to be a showcase for the PS5’s marvelous DualSense controller, spatial 3D audio tech and super-fast SSD, and it’s the reason why so many gamers will covet Sony’s new PlayStation console. It might be too big for some setups, though, and a couple of issues hold it back from being a five-star product. However, it's a welcome upgrade over the PS4 and an exciting portal to next-gen gameplay.</h3>
            <h4>500.00$</h4>
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