<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/products/products.css">

</head>

<body>

    <?php

    include '../inc/header.php';

    ?>


    <div class="mainContent">

        <div class="navContainer">

            <nav class="topbar">
                <div class="t1 topChild">
                    <button class="topBtn" onclick='show(1); displayItems_1("t1d",0)'>Solo Microwave Ovens</button>
                    <button class="topBtn" onclick='show(2); displayItems_1("t2d",0)'>Grill Microwave Ovens</button>
                    <button class="topBtn" onclick='show(3); displayItems_1("t3d",0)'>Convection Microwave Ovens</button>
                </div>
            </nav>


            <nav class="bottombar">
                <div class="t1b btmChild">

                    <div class="one">

                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",0)'>15 - 20 L</button>
                        </div>

                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",1)'>21 - 25 L</button>
                        </div>

                    </div>

                </div>




                <div class="t2b btmChild">

                    <div class="one">

                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",0)'>upto 20 L</button>
                        </div>

                    </div>

                </div>


                <div class="t3b btmChild">

                    <div class="one">

                        <div class="t3b1">
                            <button class="btmBtn" onclick='displayItems_1("t3d",0)'>20 - 25 L</button>
                        </div>

                        <div class="t3b1">
                            <button class="btmBtn" onclick='displayItems_1("t3d",1)'>26 L - 30 L</button>
                        </div>

                        <div class="t3b1">
                            <button class="btmBtn" onclick='displayItems_1("t3d",2)'>31 L - 35 L</button>
                        </div>

                    </div>

                </div>


            </nav>

        </div>


        <!--
            
            
            solo section
       
    
        -->


        <!--
            
            
            20 L section
    
    
        -->

        <div class="display t1d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=nn-sm25jbfdg+specs" target="_blank">Panasonic 20 L Solo Microwave Oven (Black)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/ovens/s_20_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 5,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <!--
            
        
            25 L section
    
    
        -->


        <div class="display t1d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=25pm25+specs" target="_blank">IFB 25 L Solo Microwave Oven (Silver)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/ovens/s_25_1.png" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 7,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>



        <!--
            
        
            grill section
    
    
        -->


        <!--
            
            
            20 L section
    
    
        -->


        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=2005+etb+specs" target="_blank">Bajaj 20 L Grill Microwave Oven (White)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/ovens/g_20_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 7,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <!--
            
        
            convection section
    
        
        -->


        <!--
            
            
            20 L section
    
    
        -->


        <div class="display t3d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=ct353bfdg+specs" target="_blank">Panasonic 23 L Convection Microwave Oven (Black)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/ovens/c_20_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 10,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <!--
            
            
            26 L section
    
    
        -->


        <div class="display t3d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=30SC4+specs" target="_blank">IFB 30 L Convection Microwave Oven (Black)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/ovens/c_26_1.jpeg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 13,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <!--
            
            
            31 L section
    
    
        -->


        <div class="display t3d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=mc32k7056ck/tl+specs" target="_blank">Samsung 32 L Convection Microwave Oven (Black)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/ovens/c_31_1.jpeg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 21,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>

    </div>
</body>




<script src="../js/headerFile.js"></script>
<script src="../js/products.js"></script>


</html>