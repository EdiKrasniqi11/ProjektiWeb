var users = document.getElementById('userTable');
var products = document.getElementById('productTable');
function showAll(){
    users.style.display="table";
    products.style.display="table";
}
function showUsers(){
    users.style.display="table";
    products.style.display="none";
}
function showProducts(){
    users.style.display="none";
    products.style.display="table";
}