<?php include '../config.php' ?>
<?php require_once '../Objects/ProduktiController.php';

if(isset($_GET['id'])){
    $productName = $_GET['id'];
}
$product = new ProduktiController;
$currentProduct = $product->edit($productName);
if(isset($_POST['submit'])){
    $product->update($_POST,$productName);
}?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="createProductStyle.css?v=<?=$version?>">
</head>
<body>
    <?php include '../header/header.php'?>
    <div id="mainPage">
    <div id="korniza">
        <form class="box" method="POST">
            <h1><?php echo $currentProduct['productName']?></h1>
            <input type="file" id="imageLink" name="imageLink" accept="image/*">
            <textarea name="productDescription" id="productDescription"><?php echo $currentProduct['productDescription']?></textarea>
            <div id="priceCategory">
                <input type="text" id="productPrice" name="productPrice" placeholder="price" value="<?php echo $currentProduct['productPrice']?>">
                <select name="category" id="category">
                    <option value="Camera">Camera</option>
                    <option value="Computers">Computers</option>
                    <option value="Gaming">Gaming</option>
                    <option value="Phones">Phones</option>
                    <option value="Smart Home">Smart Home</option>
                    <option value="Television">Television</option>
                </select>
            </div>
            
            <button type="submit" name="submit" id="loginButton">
                    <div><b>Update Product</b></div>
            </button>
        </form>
    </div>
</div>
    <?php include '../footer/footer.php'?>
</body>
</html>