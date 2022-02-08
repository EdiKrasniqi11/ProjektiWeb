<?php include '../config.php' ?>
<?php require_once '../Objects/Produkti.php'?>
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
                <li><b><a href="categories.php">All</a></li>
                <li><a href="phones.php">Phones</a></li>
                <li><a href="computers.php">Computers</a></li>
                <li><a href="television.php">Television</a></li>
                <li><a href="gaming.php">Gaming</a></li>
                <li><a href="smartHome.php">SmartHome</a></li>
                <li><a href="camera.php">Camera & Video</a></li>
            </ul>
        </div>
        <div id="rightSide">
            <?php
                $produkti1 = new Produkti("1", "../ProductPage/beats.php", "../Images/Headphones.jpg", "Beats by Dre", "Description 1", "200.00", "Phones");
                echo $produkti1;
            ?>
        </div>
    </div>
    <?php include '../footer/footer.php'?>
    <script src="main.js"></script>
</body>
</html>