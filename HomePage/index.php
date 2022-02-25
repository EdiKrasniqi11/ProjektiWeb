<?php include '../config.php' ?>
<?php require_once('../Objects/ProduktiController.php');
$produkti = new ProduktiController;
$allProducts = $produkti->readData();
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Projekti Final</title>
    <link rel="stylesheet" href="homeStyle.css?v=<?=$version?>">
</head>
<body>
    <?php include '../header/header.php'?>
    <div id="lightAquaDiv">
        <h2>TRENDING PRODUCTS</h2>
        <h4>See What others are buying</h4>
        <ul id="listaTrending">
            <?php
                $slicedArray = array_slice($allProducts,0,4);
                foreach($slicedArray as $product){
                    echo '<li><a href="../ProductPage/productPage.php?id='.$product['productName'].'"><img src="'.$product['imageLink'].'" alt="image" id="trendingPhoto"></a></li>';
                }
            ?>
        </ul>
    </div>
    <div name="darkAquaDiv" id="darkAquaDiv">
        <h2>TOP BRANDS</h2>
        <h4>Check out our most famous brands</h4>
        <div id="topBrands">
            <ul id="companyList">
                <button id="slideBack" onclick="backward()"><img src="../Images/Previous.png" alt=""></button>
                <li><a href=""><img src="..\Images\Acer.jpg" alt="Image" id="company1"></a></li>
                <li><a href=""><img src="..\Images\Apple.jpg" alt="Image" id="company2"></a></li>
                <li><a href=""><img src="..\Images\Dell.png" alt="Image" id="company3"></a></li>
                <button id="slideForward" onclick="forward()"><img src="../Images/Next.png" alt=""></button>
            </ul>
        </div>
    </div>
    <?php include '../footer/footer.php' ?>
    <script src="main.js?v=<?=$version?>"></script>
</body>
</html>