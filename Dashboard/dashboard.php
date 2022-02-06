<?php include '../config.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboardStyle.css?v=<?=$version?>">
</head>
<body>
    <?php include '../header/header.php'?>
    <div id="categMain">
        <div id="leftSide">
            <ul id="categoryBar" class="inlineBox">
                <li><b>Users</li>
                <li>Products</b></li>
            </ul>
        </div>
        <div id="rightSide">
            <table>
                <tr><td colspan="4" id="userHeader">Users Table</td></tr>
                <tr><th>User_ID</th><th>User_Name</th><th>User_Password</th><th>User_BirthDate</th></tr>
                <tr><td>1</td><td>Edi Krasniqi</td><td>Password1</td><td>07.01.2003</td><tr>
                <tr><td>2</td><td>Edi Krasniqi</td><td>Password2</td><td>07.01.2003</td><tr>
            </table>
            <table id="productTable">
                <tr><td colspan="4" id="productHeader">Product Table</td></tr>
                <tr><th>Product_ID</th><th>Product_Name</th><th>Product_Price</th><th>Product_Category</th></tr>
                <tr><td>1</td><td>iPhone 13</td><td>1500.00$</td><td>Phones</td><tr>
                <tr><td>2</td><td>MacBook Air</td><td>2000.00$</td><td>Computers</td><tr>
            </table>
        </div>
    </div>
    <?php include '../footer/footer.php'?>
</body>
</html>