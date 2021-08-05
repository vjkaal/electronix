<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./css/header_footer.css">
    </head>
    <body>
        <header>
            <div>
                <div>
                    <img src="./img/logo_dark.svg" alt="logo">
                </div>

                <div>
                    <h1>ELECTRONIX</h1>
                    <p><u>your one stop for electricals</u></p>
                </div>
            </div>

            
            <nav>
                <a href="index.php">Home</a>
                <a href="products.php">Products</a>
                <a href="login.php">Login</a>
                <a href="your_cart.php" id="navDiff"> <img src="img/cart_black.svg" id="cartImg" alt=""> </a>
                <a href="about.php">About us</a>
            </nav>
        </header>


    </body>

    <script>

        document.getElementById("navDiff").addEventListener("mouseover", function(){
            console.log('hovered');
            document.getElementById("navDiff").src = "img/cart_white.svg";
        });

    </script>
</html>
