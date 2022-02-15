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
        <td><a href=\"../ProductManagement/editProduct.php?id=".$this->productName."\" id=\"editButton\">Edit</a></td><td><a href=\"deleteProduct.php?id=".$this->productName."\" id=\"deleteButton\">Delete</a></td><tr>";
    }
    public function __toString(){
        return "<div class=\"product\" id=\"".$this->category."\">
                    <a href=\"../HomePage/index.php\"><img src=".$this->imageLink." ></a>
                    <div id=\"prodDesc\">
                        <div id=\"prodCart\">
                        <img src=\"../Images/favProd.png\" class=\"Wish\" onclick=\"function{}\">
                        <img src=\"../Images/cartProd.png\" class=\"Cart\" onclick=\"carted()\">
                        </div><a href=\"../HomePage/index.php\">
                        <div id=\"prodName\">
                            <h4>$this->productName</h4>
                        </div>
                        <h5>$this->price$</h5>
                    </div></a>
                </div>";
    }
}
?>