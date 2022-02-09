<?php
function addToWish(){
    return "<script>
    var wishProducts = document.getElementsByClassName('Wish');
    var cartProducts = document.getElementsByClassName('Cart');
    var wishIndex = 0;
    var cartIndex = 0;
    for(let i=0;i<wishProducts.length;i++){
        wishProducts[i].addEventListener(\"click\", function(){
            if(wishIndex === 0){
                wishProducts[i].src = \"../Images/favFillProd.png\";
                wishIndex ++;
            }else{
                wishProducts[i].src = \"../Images/favProd.png\";
                wishIndex = 0;
            }
        });
    }
    for(let i=0;i<cartProducts.length;i++){
        cartProducts[i].addEventListener(\"click\", function(){
            if(wishIndex === 0){
                cartProducts[i].src = \"../Images/cartFillProd.png\";
                wishIndex ++;
            }else{
                cartProducts[i].src = \"../Images/cartProd.png\";
                wishIndex = 0;
            }
        });
    }</script>";
}

function categoryMenu(){
    return "
        <script>
            function showAll(){
                var products = document.getElementsByClassName('product');
                for(let i=0;i<products.length;i++){
                    location.reload();
                }
                console.log(products);
            }
            function showCategory(elementi){
                var category = elementi.innerHTML;
                var products = document.getElementsByClassName('product');
                for(let i=0;i<products.length;i++){
                    if(products[i].id === category){
                        products[i].style.display=\"inline-block\";
                    }
                    else{
                        products[i].style.display=\"none\";
                    }
                }
            }
        </script>
    ";
}


?>