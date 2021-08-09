<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/header_footer.css">
</head>

<body>
    <header>
        <div class="heading">
            <div class="logo">
                <img src="./img/logo/logo_dark.svg" alt="logo">
            </div>

            <div>
                <h1>ELECTRONIX</h1>
                <p><u>your one stop for electricals</u></p>
            </div>
        </div>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="your_cart.php" id="navDiff"> <img src="./img/logo/cart_black.svg" id="cartImg" alt=""> </a></li>
                <li><a href="about.php">About us</a></li>
            </ul>
        </nav>

        <label for="nav-toggle" class="nav-toggle-label">
            <img src="./img/logo/menuBar.svg" class="open-nav" alt="">
            <img src="./img/logo/close.svg" class="hide-nav" alt="open">
        </label>


        <div id="products">
            <div class="content"></div>
            <div class="btn">
                <button>
                    <img src="./img/logo/close.svg" alt="">
                </button>
            </div>
        </div>

    </header>




</body>

<script src="../js/changeImg.js"></script>

</html>