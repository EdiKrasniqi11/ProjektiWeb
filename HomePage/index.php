<?php include '../config.php' ?>
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
            <li><a href="..\ProductPage\ps5.php"><img src="..\Images\PS5.jpg" alt="image" id="trendingPhoto1"></a></li>
            <li><a href="..\ProductPage\macBook.php"><img src="..\Images\Laptop.jpg" alt="image" id="trendingPhoto2"></a></li>
            <li><a href="..\ProductPage\beats.php"><img src="..\Images\Headphones.jpg" alt="image" id="trendingPhoto3"></a></li>
            <li><a href="..\ProductPage\tv.php"><img src="..\Images\TV.jpg" alt="image" id="trendingPhoto4"></a></li>
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