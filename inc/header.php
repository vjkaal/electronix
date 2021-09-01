<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <header>
        <div class="heading">
            <div class="logo">
                <img class="hImg" src="./res/img/logo/logo_dark.svg" alt="logo">
            </div>

            <div class="textContent">
                <h1>ELECTRONIX</h1>
                <p><u>your one stop for electricals</u></p>
            </div>
        </div>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">

        <nav>
            <ul>
                <li><a class="navItems changeHREF" href="index.php">Home</a></li>

                <li>
                    <p class="navItems" id="pdts">
                        <button class="productBtn" onclick="showProducts()">
                            <span>Products</span>
                        </button>
                    </p>
                </li>

                
                <li>
                    <a class="navItems changeHREF" href="your_cart.php" id="navDiff">
                        <img class="hImg" src="./res/img/logo/cart_black.svg" id="cartImg" alt="">
                    </a>
                </li>
            
                <li><a class="navItems changeHREF" href="login.php">Login</a></li>
            </ul>
        </nav>

        <label for="nav-toggle" class="nav-toggle-label">
            <img src="./res/img/logo/menuBar.svg" class="open-nav hImg" alt="">
            <img src="./res/img/logo/close.svg" class="hide-nav hImg" alt="open">
        </label>


        <div id="products" style="display: none;">
            <div class="product-div-close-btn">
                <button onclick="showProducts()">
                    <img class="hImg" src="./res/img/logo/close.svg" alt="">
                </button>
            </div>

            <div class="content">

                <div class="one">

                    <a class="productDivItems changeHREF" href="products/tv.php">
                        <div class="tv">
                            <img class="hImg" src="./res/img/logo/tv_black_24dp.svg" alt="tv logo">
                            <div class="text">
                                Televisions
                            </div>
                        </div>
                    </a>

                    <a class="productDivItems changeHREF" href="products/speakers.php">
                        <div class="speaker">
                            <img class="hImg" src="./res/img/logo/speaker_black_24dp.svg" alt="speaker n headphones logo">
                            <div class="text">
                                Speakers and Headphones
                            </div>
                        </div>
                    </a>

                </div>

                <div class="two">

                    <a class="productDivItems changeHREF" href="products/mobiles.php">
                        <div class="mobile">
                            <img class="hImg" src="./res/img/logo/phone_android_black_24dp.svg" alt="mobile logo">
                            <div class="text">Mobiles</div>
                        </div>
                    </a>

                </div>

                <div class="three">

                    <a class="productDivItems changeHREF" href="products/coolers.php">
                        <div class="cooler">
                            <img class="hImg" src="./res/img/logo/air_black_24dp.svg" alt="air cooler logo">
                            <div class="text">Air Coolers</div>
                        </div>
                    </a>


                    <a class="productDivItems changeHREF" href="products/ac.php">
                        <div class="ac">
                            <img class="hImg" src="./res/img/logo/ac_unit_black_24dp.svg" alt="ac logo">
                            <div class="text">AC</div>
                        </div>
                    </a>

                </div>

                <div class="four">

                    <a class="productDivItems changeHREF" href="products/refrigerators.php">
                        <div class="refrigerator">
                            <img class="hImg" src="./res/img/logo/kitchen_black_24dp.svg" alt="refrigerator logo">
                            <div class="text">Refrigerators</div>
                        </div>

                    </a>

                    <a class="productDivItems changeHREF" href="products/ovens.php">
                        <div class="oven">
                            <img class="hImg" src="./res/img/logo/microwave_black_24dp.svg" alt="oven logo">
                            <div class="text">Microwave Ovens</div>
                        </div>
                    </a>

                </div>

                <div class="five">

                    <a class="productDivItems changeHREF" href="products/washing_machine.php">
                        <div class="washing-machine">
                            <img class="hImg" src="./res/img/logo/local_laundry_service_black_24dp.svg" alt="washing machine logo">
                            <div class="text">Washing Machine</div>
                        </div>
                    </a>

                </div>

            </div>
        </div>

    </header>




</body>


<script>
    function showProducts() {

        let navToggle = document.querySelector(".nav-toggle");
        navToggle.checked = false;

        let div = document.querySelector("#products");
        console.log(div.style.display);
        if (div.style.display == "none") {
            div.style.display = "block";
        } else div.style.display = "none";
    }


</script>

</html>