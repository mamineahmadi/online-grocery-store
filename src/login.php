<?php
session_start();
if (!isset($_SESSION["currentLogin"])){
    $_SESSION["currentLogin"] = null;
}
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="scripts/Util.js"></script>
    <script type="text/javascript" src="scripts/Cart.js"></script>
    <script type="text/javascript" src="scripts/Item.js"></script>
    <script type="text/javascript" src="scripts/Sales.js"></script>
    <script type="text/javascript" src="scripts/AbstractComponent.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>

</head>


<body>
    <?php
    if ($_SESSION["currentLogin"] != null) {
        $header = file_get_contents('common/headerloggedin.php');
        echo $header;
    } else {
        $header = file_get_contents('common/header.php');
        echo $header;
    }
    
    ?>
    <script>
        document.getElementById("helloUser").innerHTML="Hello, <?php echo $_SESSION["currentLogin"][0]; ?>!";
    </script>


    <div class="login_form" style="font-family: 'Roboto';">
        <br />
        <br />
        <br />
        <br />

        <h1 class="center">Sign In</h1><br>
        <form action="php/attemptLogin.php" method="POST">
            <center>
                <table>
                    <tr>
                        <td>
                            <h5>Username <span class="red">*</span></h5>
                        </td>
                    </tr>
                    <tr>
                        <td><input style="height:55px; font-size:16;" type="text" name="username" size="20"
                                placeholder="Username..." required="true"></td>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    </tr>

                    <tr>
                        <td>
                            <h5>Password <span class="red">*</span></h5>
                        </td>

                    </tr>
                    <tr>
                        <td><input style="height:55px;font-size:16" type="password" name="password"
                                placeholder="Password..." required="true"></td>
                    </tr>
                </table>
                <br>

                <a class="black" href="forgetpassword.php" title="Can't remember your password?"><small>Forgotten your
                        password?</small></a><br><br>

                <input class="btn btn-success" name="login" type="submit" value="Login">
            </center>
        </form>
    </div>
    <br>
    <br>
    <br>


    <?php
    $footer = file_get_contents('common/footer.php');
    echo $footer;
    ?>
</body>

</html>