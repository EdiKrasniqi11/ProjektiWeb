<?php include '../config.php'?>
<!DOCTYPE html>
<head>
    <title>Product</title>
    <link rel="stylesheet" href="productStyle.css?v=<?=$version?>">
</head>
<body>
    <?php include '../header/header.php'?>
    <div id="productDiv">
        <img src="..\Images\Camera.jpg" alt="Image" height="400px" width="400px">
        <div id="productInfo">
            <h1>Canon EOS 550D</h1>
            <h3>The EOS 550D combines exceptional still shooting with the ability to shoot Full HD (1080p) video. To satisfy your creativity the EOS 550D features full manual control and selectable frame rates. You can also shoot high speed 50/60fps movies at 720P for when the action is really fast. An HDMI connection allows High Definition playback of footage and images on any HDTV. Also with compatible TVs playback can be controlled using the TVs remote control.</h3>
            <h4>663.00$</h4>
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