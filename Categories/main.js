var wishIndex=0;
var cartIndex=0;
function hearted(){
    var heart = document.getElementById('Wish"<.$this->productName."');
    if(wishIndex === 0){
        heart.src = "../Images/favFillProd.png"
        wishIndex++;
    }else{
        heart.src = "../Images/favProd.png"
        wishIndex=0;
    }
}
function carted(){
    var cart = document.getElementById('Cart".$this->productName."')
    if(cartIndex == 0){
        cart.src = "../Images/cartFillProd.png"
        cartIndex++;
    }else{
        cart.src = "../Images/cartProd.png"
        cartIndex=0;
    }
}