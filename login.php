<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>LOGIN</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>

        <!-- header file -->
        <?php include 'inc/header.php'; ?>



        <form id="loginForm" action="login.php" method="post">
            <fieldset>

                <div class="inputContainer">

                    <div class="emailContainer">
                        <!-- <legend>Email:</legend> -->
                        <input type="email" id="email" name="email" placeholder="Enter email: ">
                    </div>
                    <br>
                    <div class="passContainer">
                        <!-- <legend>Password:</legend> -->
                        <input type="password" id="pass" name="pass" placeholder="Enter password: ">
                    </div>

                </div>
                <br>
                <div class="submitContainer">
                    <input type="hidden" name="given" value="1">
                    <input type="submit" id="submit" name="submit" value="Login">
                </div>
                <br>

                <div class="signupContainer">
                    New Customer?<a href="signup.php">Sign UP</a>
                </div>

            </fieldset>

        </form>



        <?php

        function chkPass($email, $pass)
        {
            return 1;
        }

        if($_POST["given"] == 1)
        {
            // echo "test pass";
            if(chkPass($_POST["email"],$_POST["pass"]) == 1)
            {
                echo '<script type="text/javascript">';
                echo 'console.log("This is correct");';
                echo 'document.getElementById("loginForm").style.display="none";';
                echo '</script>';
                echo '<form action="index.php" method="post">';
                echo '<center><input type="submit" id="backToHomePage" name="submit" value="Back to Home Page"></center>';
                echo '</form>';
            }
        }

        ?>

        <!-- footer file -->
        <?php include 'inc/footer.php'; ?>


    </body>



</html>
