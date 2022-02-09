<?php include '../config.php'?>
<?php require_once('../Objects/User.php');
require_once ('../Objects/UserController.php');
$users = new UserController;
$allUsers = $users->readData();?>
<?php require_once('../Objects/Produkti.php');
require_once('../Objects/ProduktiController.php');
$produktet = new ProduktiController;
$allProducts = $produktet->readData();?>
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
                <li><b>All</li>
                <li>Users</li>
                <li>Products</b></li>
            </ul>
        </div>
        <div id="rightSide">
            <table>
                <tr><td colspan="9" id="userHeader">Users Table</td></tr>
                <tr><th>User_Name</th><th>User_Birthday</th><th>User_Gender</th><th>User_Email</th><th>User_Password</th><th>User_Role</th></tr>
                <?php foreach($allUsers as $user){
                    $userString = new User($user['userName'],$user['userSurname'],$user['userDay'],$user['userMonth'],$user['userYear'],$user['userGender'],$user['userEmail'],$user['userPassword'],$user['userRole']);

                    echo $userString;
                }?>
            </table>
            <table id="productTable">
                <tr><td colspan="6" id="productHeader">Product Table</td></tr>
                <tr><th>Product_Name</th><th>Product_Price</th><th>Product_Category</th></tr>
                <?php foreach($allProducts as $product){
                    $productString = new Produkti($product['productLink'], $product['imageLink'], $product['productName'], $product['productDescription'], $product['productPrice'], $product['category']);
                    
                    echo $productString->writeProduct();
                }
                ?>
                <tr><td colspan="6"><a href="../ProductManagement/createProduct.php" id="newProduct">+ Add New Product</a></td></tr>
            </table>
        </div>
    </div>
    <?php include '../footer/footer.php'?>
</body>
</html>