<?php include '../config.php'?>
<!DOCTYPE html>
<head>
    <title>Product</title>
    <link rel="stylesheet" href="productStyle.css?v=<?=$version?>">
</head>
<body>
    <?php include '../header/header.php'?>
    <div id="productDiv">
        <img src="..\Images\Fridge.jpg" alt="Image" height="400px" width="400px">
        <div id="productInfo">
            <h1>Samsung Smart Fridge</h1>
            <h3>The latest case in point: the Samsung RF28K9380SG. It's a beauty of an icebox in black stainless steel and one that features Samsung's "4-Door Flex" styling with elegant, recessed handles, a door-in-a-door Food Showcase compartment and the option to dial the temperature of half of the freezer up into fridge mode. It debuted last year for 4000$, but today, you'll find it marked down to about 2600$.</h3>
            <h4>2600.00$</h4>
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