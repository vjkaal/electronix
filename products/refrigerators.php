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
                    <button class="topBtn" onclick='show(1); displayItems_1("t1d",0)'>Single Door</button>
                    <button class="topBtn" onclick='show(2); displayItems_1("t2d",0)'>Double Door</button>
                    <button class="topBtn" onclick='show(3); displayItems_1("t3d",0)'>Multi Door</button>
                    <button class="topBtn" onclick='show(4); displayItems_1("t4d",0)'>Side by Side</button>
                </div>
            </nav>


            <nav class="bottombar">
                <div class="t1b btmChild">

                    <div class="one">

                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",0)'>200 L</button>
                        </div>

                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",1)'>230 L</button>
                        </div>

                    </div>

                </div>




                <div class="t2b btmChild">

                    <div class="one">

                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",0)'>250 L</button>
                        </div>

                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",1)'>300 L</button>
                        </div>


                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",2)'>350 L</button>
                        </div>

                    </div>

                </div>


                <div class="t3b btmChild">

                    <div class="one">

                        <div class="t3b1">
                            <button class="btmBtn" onclick='displayItems_1("t3d",0)'>250 L - 300 L</button>
                        </div>

                        <div class="t3b1">
                            <button class="btmBtn" onclick='displayItems_1("t3d",1)'>500 L - 600 L</button>
                        </div>

                    </div>

                </div>


                <div class="t4b btmChild">

                    <div class="one">

                        <div class="t4b1">
                            <button class="btmBtn" onclick='displayItems_1("t4d",0)'>550 L - 600 L</button>
                        </div>

                    </div>

                </div>



            </nav>

        </div>



        <div class="display t1d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=gldc212sgbt2pb+specs" target="_blank">Lloyd 200 L 2 Star Direct Cool Single Door Refrigerator (Gardenia Blue)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/refrigerators/sd_200_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 31,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <div class="display t1d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=rr24m289yu2/nl+specs" target="_blank">Samsung 230 L 4 Star Direct Cool Single Door Refrigerator (Blue)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/refrigerators/sd_230_1.png" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 16,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>



        <!--
            
        
            double door here
    
    
        -->



        <!--
            
        
            250 L section
    
    
        -->

        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=rf+eon+236b+25+hi+ry+dr+specs" target="_blank">Godrej 236 L 2 Star Inverter Frost-Free Double Door Refrigerator (White)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/refrigerators/dd_250_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 20,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <!--
            
        
            300 L section
    
    
        -->

        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=glff313adst1pb+specs" target="_blank">Lloyd 310 L 3 Star Inverter Frost-Free Double Door Refrigerator (Dark Steel)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/refrigerators/dd_300_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 30,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <!--
            
        
            350 L section
    
    
        -->

        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=cnv+355+3s+specs" target="_blank">Whirlpool 340 L 3 Star Inverter Frost-Free Double Door Refrigerator (White)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/refrigerators/dd_350_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 35,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>




        <!--
            
        
            multi door section
    
    
        -->

        <!--
            
        
            300 L section
    
    
        -->

        <div class="display t3d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=fp+283d+specs" target="_blank">Whirlpool 260 L Frost-Free Multi-Door Refrigerator (Aplha Steel)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/refrigerators/md_350_1.png" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 35,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <!--
            
        
            500 L section
    
    
        -->

        <div class="display t3d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=nr-cy550gkxz+specs" target="_blank">Panasonic Econavi 550 L 6-Stage Invertor Frost-Free Multi-Door Refrigerator (Black Glass)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/refrigerators/md_500_1.jpeg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 85,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <!--
            
        
            side by side section
    
    
        -->



        <div class="display t4d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=hrf-619ss+specs" target="_blank">Haier 565 L Side-by-Side Door Refrigerator (Silver)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/refrigerators/ss_550_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 60,000/-</span>
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