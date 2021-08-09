<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>LOGIN</title>
        <link rel="stylesheet" href="css/login.css">

        <script>
            function hideAll() {
                document.addEventListener("DOMContentLoaded", function(){
                    document.getElementById("loginForm").style.display="none";
                    document.getElementById("signupContainer").style.display="none";
                });
            }
        </script>

    </head>
    <body>

        <!-- header file -->
        <?php
            
           include 'inc/header.php'; 
            
        ?>





        <?php

        function chkPass($email, $pass)
        {
            return 1;
        }

        $inputYes = 0;
        // echo var_dump($_POST["email"]);
        // echo var_dump($_POST["pass"]);

        if($_POST["given"] == 1)
        {
            // echo "test pass";

            if(strlen($_POST["email"]) == 0 && strlen($_POST["pass"]) == 0)
            {
                echo '<p ';
                echo 'style="background: red; color: white; text-align: center; padding: .5rem 0px;"';
                echo '>Please enter Correct input</p>';
                $inputYes = 0;
            }
            else $inputYes = 1;

            if($inputYes == 1)
            {
                if(chkPass($_POST["email"],$_POST["pass"]) == 1)
                {
                    echo '<script>';
                    echo 'hideAll();';
                    echo '</script>';
                    echo '<form action="index.php" method="post">';
                    echo '<center><input type="submit" ';
                    echo 'style="border: 0px; border-radius: .5rem; padding: 1rem;margin: 2rem; font-weight: 600; background: #fbfaf7; box-shadow: 0px 0px 1rem #2b2d42;"';
                    echo 'name="submit" value="Back to Home Page"></center>';
                    echo '</form>';
                }

            }
        }

        ?>


        <form id="loginForm" action="login.php" method="post">
            <fieldset id="main">

                <div class="inputContainer">

                    <div class="emailContainer">
                        <fieldset>

                            <input type="email" class="form_input" name="email" placeholder="">
                            <label for="email" class="form_label">Enter email</label>

                        </fieldset>
                    </div>
                    <br>
                    <div class="passContainer">
                        <fieldset>

                            <input type="password" class="form_input" name="pass" placeholder="">
                            <label for="pass" class="form_label">Enter password</label>

                        </fieldset>
                    </div>

                </div>
                <br>
                <div class="submitContainer">
                    <fieldset>

                        <input type="hidden" name="given" value="1">
                        <center><input type="submit" id="submit" name="submit" value="Login"></center>

                    </fieldset>
                </div>
                <br>

            </fieldset>

        </form>


        <div class="signupContainer">
            New Customer? &nbsp;&nbsp; <a href="signup.php"> Create an Account</a>
        </div>



    </body>



</html>
