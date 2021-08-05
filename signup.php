<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body>
        
        <?php

            if($_POST["given"] == 1)
            {
                echo '<p style="background: lightgreen; color: white;"> Success! your email ';
                echo $_POST["email"];
                echo ' has been registered with us.<br> Please continue shopping with us!!!</p>';
            }
        ?>


        <!-- header file here -->

        <?php include'inc/header.php'; ?>


        <form class="" action="" method="post">
            <fieldset>
                <div class="inputContainer">
                    <div class="fNameContainer">
                        <input type="text" name="fName" placeholder="Enter first name: ">
                    </div>
                    <div class="lNameContainer">
                        <input type="text" name="lName" placeholder="Enter last name: ">
                    </div>
                    <br>
                    <div class="sexInputContainer">
                        Sex:
                        <input type="radio" name="sex" value="male">Male
                        <input type="radio" name="sex" value="female">Female
                    </div>

                    <!-- con: contact -->
                    <div class="conContainer">
                        <input type="number" name="conNum" placeholder="Enter mobile number: ">
                        <input type="email" name="email" placeholder="Enter email: ">
                    </div>
                </div>

                <br>
                <div class="passContainer">
                    <input type="password" name="pass" placeholder="Enter a password: ">
                    <br>
                    <input type="password" name="pass" placeholder="Re-enter password: ">
                </div>
                <br>
                <br>
                <div class="submitContainer">
                    <input type="hidden" name="given" value="1">
                    <input type="submit" name="submit" value="Sign Up">
                </div>
            </fieldset>
        </form>

    </body>
</html>
