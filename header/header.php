<style>
    #header{
        width: 100%;
        height: calc(100vh * 0.06);
        background-color: #01303f;
        color:#F2F2F2;
        display:inline-flex;
        align-items:center;
        padding-top: 1%;
        padding-bottom: 1%;
    }
    #logoDiv{
        padding-left: 2%;
        flex-shrink: 1;
    }
    #logoDiv a{
        text-decoration:none;
        color:#F2F2F2;
        display:inline-flex;
    }
    #logo1{
        border-radius: 50%;
    }
    #header h2{
        font-size: 200%;
        font-family: monospace;
        margin-top:5%;
        margin-left:5%;
    }
    #buttonDiv{
        padding-right:3%;
        width: 100%;
        list-style: none;
        display:flex;
        justify-content:space-evenly;
        justify-content: right;
    }
    #buttonDiv a{
        text-decoration: none;
        width: auto;
        margin-right: 3%;
    }
    #button{
        text-align: center;
        font-size: 120%;
        background-color:#01303f;
        border:none;
        border-radius: 3px;
        color: #F2F2F2;
        font-family: monospace;
    }
    #button:hover{
        color:#89d6fb;
    }
    #search{
        width: 13%;
        background-color: #b1b1b1;
        border-radius: 20px;
        border:none;
        color: #182628;
        padding-left: 1%;
        padding-top: 0.4%;
        padding-bottom: 0.4%;
        font-family: monospace;
    }
</style>
<div name="header" id="header">
    <div id="logoDiv">
        <a href="..\HomePage\index.php">
            <img src="..\Images\Logo.PNG" alt="image not found" id="logo1" height="50px" width="50px">
            <h2>ProjektiWeb</h2>
        </a>
    </div>
    <div id="buttonDiv">
        <a href="..\Categories\categories.php" id="button">Categories</a>
        <a href="..\Cart\cart.php" id="button">Cart</a>
        <a href="..\Wishlist\wishlist.php" id="button">Wishlist</a>
        <a href="..\Login\login.php" id="button">Login/Register</a>
        <a href="..\Dashboard\dashboard.php" id="button">Dashboard</a>
        <input type="text" id="search" placeholder="Search">
    </div>
</div>