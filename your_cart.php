<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>YOUR CART</title>
    <link rel="stylesheet" href="css/your_cart.css">
</head>

<body>

    <!-- header file -->
    <?php include 'inc/header.php'; ?>

    <script>

        function redirect(){
            window.location.href = "products.php";
        }

    </script>


    <section>
        <div class="items">

            <div>
                <div class="img">

                    <img id="nothingInCart" src="img/logo/nothingInCart.png" alt="">

                </div>


                <div class="span">

                    <span>There is nothing in your cart...</span>

                </div>
            </div>

            <div class="btn">

                <button onclick="redirect()">Buy something</button>
            </div>
        </div>
    </section>


</body>

</html>