<?php

class Produkti{
    public $productLink;
    public $imageLink;
    public $productName;
    public $description;
    public $price;

    public function __construct($productLink, $imageLink, $productName, $description, $price){
        $this->productLink=$productLink;
        $this->imageLink=$imageLink;
        $this->productName=$productName;
        $this->description=$description;
        $this->price=$price;
    }
    
    public function __toString(){
        return "<div id=\"product\">
                    <a href=".$this->productLink."><img src=".$this->imageLink." >
                    <div id=\"prodCart\">
                    <img src=\"../Images/favProd.png\">
                    <img src=\"../Images/cartProd.png\">
                    </div>
                    <div id=\"prodDesc\">
                        <h4>$this->productName</h3>
                        <h5>$this->price$</h4></a>
                    </div>
                </div>";
    }
}
?>