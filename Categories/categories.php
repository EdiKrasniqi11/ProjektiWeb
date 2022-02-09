<?php include '../config.php'?>
<?php require_once 'main.php';?>
<?php require_once ('../Objects/Produkti.php')?>
<?php require_once ('../Objects/ProduktiController.php');
$produktet = new ProduktiController;
$allProducts = $produktet->readData();?>
<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
    <link rel="stylesheet" href="categoriesStyle.css?v=<?=$version?>">
</head>
<body>
<?php include '../header/header.php'?>
    <div id="categMain">
        <div id="leftSide">
            <ul id="categoryBar" class="inlineBox">
                <li onclick="showAll()"><b>All</li>
                <li onclick="showCategory(this)">Phones</li>
                <li onclick="showCategory(this)">Computers</li>
                <li onclick="showCategory(this)">Television</li>
                <li onclick="showCategory(this)">Gaming</li>
                <li onclick="showCategory(this)">Smart Home</li>
                <li onclick="showCategory(this)">Camera</li>
            </ul>
        </div>
        <div id="rightSide">
            <?php
                foreach($allProducts as $product){
                    $produkti = new Produkti($product['productLink'], $product['imageLink'], $product['productName'], $product['productDescription'], $product['productPrice'], $product['category']);

                    echo $produkti;
                }
            ?>
        </div>
    </div>
    <?php include '../footer/footer.php'?>
    <?php echo addToWish();?>
    <?php echo categoryMenu();?>
</body>
</html>