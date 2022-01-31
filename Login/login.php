<?php include '../config.php' ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="loginStyle.css?v=<?=$version?>">
</head>
<body>
    <?php include '../header/header.php'?>
    <div id="mainPage">
    <div id="korniza">
        <form class="box" action="#" method="post">
            <h1>Log In</h1>
    
            <input type="email" required autocomplete="off" id="email" placeholder="E-mail">
            <input type="password" required autocomplete="off" id="password" placeholder="Password">
            <p id="showId" onclick="show()">Show Password</p>

            <button id="loginButton">
                    <div><b>Log in</b></div>
            </button>

            <div id="forgotField">
                <a href="" id="forgotPassword">Forgot Password?</a>
            </div>
        </form>
    </div>
    <div id="signUp">
        <div id="signBox">
            <p>Don't have an account? <a href="../Register/register.php">Register here</a></p>
        </div>
    </div>
    </div>
    <?php include '../footer/footer.php'?>
    <script src="main.js"></script>
</body>
</html>