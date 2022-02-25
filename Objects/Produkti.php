<?php
class Produkti{
    public $indicator;
    public $imageLink;
    public $productName;
    public $description;
    public $price;
    public $category;

    public function __construct($indicator, $imageLink, $productName, $description, $price, $category){
        $this->indicator=$indicator;
        $this->imageLink=$imageLink;
        $this->productName=$productName;
        $this->description=$description;
        $this->price=$price;
        $this->category=$category;
    }

    public function writeProduct(){
        return "<tr><td>".$this->indicator."</td><td>".$this->productName."</td><td>".$this->price."$</td><td>".$this->category."</td>
        <td><a href=\"../ProductManagement/editProduct.php?id=".$this->productName."\" id=\"editButton\">Edit</a></td><td><a href=\"../ProductManagement/deleteProduct.php?id=".$this->productName."\" id=\"deleteButton\">Delete</a></td><tr>";
    }
    public function __toString(){
        return "<div class=\"product\" id=\"".$this->category."\">
                    <a href=\"../ProductPage/productPage.php?id=".$this->productName."\"><img src=".$this->imageLink." ></a>
                    <div id=\"prodDesc\">
                        <div id=\"prodCart\">
                        <a href=\"../Wishlist/addToWishlist.php?id=".$this->productName."\"><img src=\"../Images/favProd.png\" class=\"Wish\"><a>
                        <a href=\"../Cart/addToCart.php?id=".$this->productName."\"><img src=\"../Images/cartProd.png\" class=\"Cart\"></a>
                        </div><a href=\"../ProductPage/productPage.php?id=".$this->productName."\">
                        <div id=\"prodName\">
                            <h4>$this->productName</h4>
                        </div>
                        <h5>$this->price$</h5>
                    </div></a>
                </div>";
    }
}
?>