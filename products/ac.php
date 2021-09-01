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
                    <button class="topBtn" onclick='show(1); displayItems_1("t1d",0)'>Window AC</button>
                    <button class="topBtn" onclick='show(2); displayItems_1("t2d",0)'>Split AC</button>
                </div>
            </nav>


            <nav class="bottombar">
                <div class="t1b btmChild">

                    <div class="one">

                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",0)'>1.0 - 1.3 Ton</button>
                        </div>

                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",1)'>1.4 - 1.5 Ton</button>
                        </div>


                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",2)'>2.0 Ton +</button>
                        </div>

                    </div>

                </div>




                <div class="t2b btmChild">

                    <div class="one">

                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",0)'>1.0 - 1.3 Ton</button>
                        </div>

                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",1)'>1.4 - 1.5 Ton</button>
                        </div>


                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",2)'>1.6 - 1.8 Ton</button>
                        </div>


                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",3)'>2.0 Ton +</button>
                        </div>

                    </div>

                </div>

            </nav>

        </div>


        <!--
            
        
            1.0 Ton section
    
    
        -->


        <div class="display t1d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=glw12b32wsew+specs" target="_blank">Lloyd 1.0 Ton 3 Star Window AC (White)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/ac/w_1.0_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 21,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <!--
            
        
            1.5 Ton Section
    
    
        -->


        <div class="display t1d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=cw-xn181am+specs" target="_blank">Panasonic 1.5 Ton 5 Star Window AC (White)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/ac/w_1.5_1.jpeg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 29,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <!--
            
        
            2.0 Ton Section
    
    
        -->


        <div class="display t1d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=242LZH+specs" target="_blank">Voltas 2 Ton 2 Star Window AC (White)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/ac/w_2.0_1.png" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 31,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>



        <!--
            
        
            split section
    
    
        -->

        <!--
            
        
            1.0 Ton section
    
    
        -->


        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                    <div class="heading">
                        <a href="https://www.google.com/search?q=ar12aymyatbnna+specs" target="_blank">Samsung 1 Ton 4 Star Inverter Split AC (White)</a>
                    </div>

                    <div class="img">
                        <img src="../res/img/ac/s_1.0_1.jpg" alt="">
                    </div>

                    <div class="price">
                        <span>Rs. 32,000/-</span>
                    </div>

                    <div class="btn"><button>Buy Now</button></div>
                    </div>';
            }

            ?>


        </div>


        <!--
            
        
            1.5 Ton Section
    
    
        -->


        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                    <div class="heading">
                        <a href="https://www.google.com/search?q=cs/cu-nu18wkyw+specs" target="_blank">Panasonic 1.5 Ton 5 Star Twin Cool Inverter Split AC (White)</a>
                    </div>

                    <div class="img">
                        <img src="../res/img/ac/s_1.5_1.jpg" alt="">
                    </div>

                    <div class="price">
                        <span>Rs. 40,000/-</span>
                    </div>

                    <div class="btn"><button>Buy Now</button></div>
                    </div>';
            }

            ?>


        </div>


        <!--
            
        
            1.8 Ton Section
    
    
        -->


        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                    <div class="heading">
                        <a href="https://www.google.com/search?q=ftkg60tv+specs" target="_blank">Daikin 1.8 Ton 5 Star Inverter Split AC (White)</a>
                    </div>

                    <div class="img">
                        <img src="../res/img/ac/s_1.8_1.jpg" alt="">
                    </div>

                    <div class="price">
                        <span>Rs. 60,000/-</span>
                    </div>

                    <div class="btn"><button>Buy Now</button></div>
                    </div>';
            }

            ?>


        </div>


        <!--
            
        
            2.0 Ton Section
    
    
        -->


        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                
                    <div class="heading">
                        <a href="https://www.google.com/search?q=whirlpool+2+ton+3+star+specs" target="_blank">Whirlpool 2 Ton 3 Star Inverter Split AC (White)</a>
                    </div>

                    <div class="img">
                        <img src="../res/img/ac/s_2.0_1.jpg" alt="">
                    </div>

                    <div class="price">
                        <span>Rs. 37,000/-</span>
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