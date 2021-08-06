<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>

    <!-- header file here -->

    <?php include 'inc/header.php'; ?>



    <?php

    if ($_POST["given"] == 1) {
        echo '<p style="background: lightgreen; color: white;"> Success! your email ';
        echo $_POST["email"];
        echo ' has been registered with us.<br> Please continue shopping with us!!!</p>';
    }
    ?>



    <form class="" action="" method="post">
        <fieldset id="main">
            <div class="inputContainer">
                <div>
                    <div class="nameContainer">
                        <fieldset>

                            <input type="text" name="name" class="form_input" placeholder="" value="" required>
                            <label for="" class="form_label">Enter your full Name </label>

                        </fieldset>
                    </div>


                    <!-- con: contact -->
                    <div class="number">
                        <fieldset>

                            <input type="text" name="telPhone" class="form_input" placeholder="" value="" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="10" required>
                            <label for="" class="form_label">Enter mobile number </label>

                        </fieldset>
                    </div>


                    <div class="email">
                        <fieldset>
                        
                            <input type="email" name="email" class="form_input" placeholder="" required>
                            <label for="" class="form_label">Enter email </label>

                        </fieldset>

                    </div>



                    <div class="gender">
                        
                        <input type="radio" id="gender" class="form_input" name="gender" value="male" required>Male
                        <input type="radio" id="gender" class="form_input" name="gender" value="female" required>Female
                        <input type="radio" id="gender" class="form_input" name="gender" value="female" required>Prefer not say
                    </div>

                </div>


                <div>

                    <div>
                        <fieldset>

                            <input type="text" name="username" class="form_input" placeholder="" value="" required>
                            <label for="" class="form_label">Create a username </label>
                        </fieldset>
                    </div>

                    <div>
                        <fieldset>
                            
                            <input type="password" name="pass" class="form_input" placeholder="" value="" required>
                            <label for="" class="form_label">Enter a password </label>

                        </fieldset>
                    </div>


                    <div>
                        <fieldset>

                            <input type="password" name="pass" class="form_input" placeholder="" value="">
                            <label for="" class="form_label">Re-enter Password: </label>

                        </fieldset>
                    </div>
                </div>

            </div>





            <div class="submit">
                <input type="hidden" name="given" value="1">
                <input type="submit" id="submit" name="submit" value="Sign Up">
            </div>
        </fieldset>
    </form>

</body>


<script>
    // const x = document.querySelectorAll("input");
    // const y = document.querySelectorAll("legend");

    // for(let i=0;i<x;i++)
    // {
    //     let str;
    //     x[i].addEventListener("focus", function() {
    //         str = this.placeholder;
    //         console.log("called");
    //         x[i].placeholder = "";
    //         y[i].style.display = "inline";
    //     });

    //     x[i].addEventListener("blur", function() {
    //         console.log("called_2");
    //         x[i].placeholder = str;
    //         y[i].style.display = "none";
    //     });
    // }

</script>


</html>