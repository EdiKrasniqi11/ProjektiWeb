<?php include '../config.php'?>
<?php require_once ('../Objects/UserController.php');
$users = new UserController;
$allUsers = $users->readData()

?>
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
                <tr><td colspan="9" id="userHeader">Users Table</td></tr>
                <tr><th>User_Name</th><th>User_Birthday</th><th>User_Gender</th><th>User_Email</th><th>User_Password</th><th>User_Role</th></tr>
                <?php foreach($allUsers as $user):?><tr>
                <td><?php echo $user['userName']." ".$user['userSurname'];?></td>
                <td><?php echo $user['userDay']."/".$user['userMonth']."/".$user['userYear'];?></td>
                <td><?php echo $user['userGender'];?></td>
                <td><?php echo $user['userEmail'];?></td>
                <td><?php echo $user['userPassword'];?></td>
                <td><?php echo $user['userRole'];?> </td>
                <td><a href="editUser.php?id=<?php echo $user['userEmail'];?>" id="editButton">Edit</a></td>
                <td><a href="deleteUser.php?email=<?php echo $user['userEmail'];?>" id="deleteButton">Delete</a></td>
                </tr><?php endforeach ?>
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