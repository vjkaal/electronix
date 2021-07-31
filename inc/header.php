<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./css/header_footer.css">
    </head>
    <body>
        <header>
            <div class="headingContainer">
                <h1>ELECTRONIX</h1>
                <p><u>your one stop for electronic items</u></p>
            </div>

            <div class="navContainer">
                <button type="button" name="button" onclick="displayNav()"> <img src="./img/menuBar_black.svg" alt=""> </button>
                <nav>
                    <a href="index.php" class="active">Home</a>
                    <a href="products.php">Products</a>
                    <a href="login.php" id="navDis1">Login</a>
                    <a href="your_cart.php" id="navDis2"> <img src="img/cart_white.svg" alt=""> </a>
                    <a href="about.php">About us</a>
                </nav>
            </div>
        </header>


    </body>

    <script type="text/javascript">
        function displayNav(){
            if(document.getElementsByTagName('nav')[0].style.display === 'none'){
                 document.getElementsByTagName('nav')[0].style.display = 'block';
            }
            else document.getElementsByTagName('nav')[0].style.display = 'none';

            console.log("called");
        }
    </script>
</html>
