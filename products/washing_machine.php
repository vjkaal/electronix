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
                    <button class="topBtn" onclick='show(1); displayItems_1("t1d",0)'>Semi-automatic</button>
                    <button class="topBtn" onclick='show(2); displayItems_1("t2d",0)'>Fully Automatic</button>
                </div>
            </nav>


            <nav class="bottombar">
                <div class="t1b btmChild">

                    <div class="one">

                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",0)'>
                                <span>6 - 6.9 Kg</span>
                            </button>
                        </div>

                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",1)'>7 - 7.9 Kg</button>
                        </div>

                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",2)'>8+ Kg</button>
                        </div>

                    </div>

                </div>




                <div class="t2b btmChild">

                    <div class="one">

                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",0); setActive("t2b1",0)'>Top Load</button>
                        </div>

                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",2); setActive("t2b1",1)'>Front Load</button>
                        </div>

                    </div>



                    <div class="two">

                        <div class="t2b2">
                            <button class="btmBtn" onclick='displayItems_2("t2b1","t2d",0,2)'>6 - 6.9 Kg</button>
                        </div>

                        <div class="t2b2">
                            <button class="btmBtn" onclick='displayItems_2("t2b1","t2d",1,3)'>7 - 7.9 Kg</button>
                        </div>

                        <div class="t2b2">
                            <button class="btmBtn" onclick='displayItems_2("t2b1","t2d",1,4)'>8+ Kg</button>
                        </div>

                    </div>

                </div>


            </nav>

        </div>


        <!--
            
            
            semi section
       
    
        -->


        <!--
            
            
            6 Kg section
    
    
        -->

        <div class="display t1d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=wt667qpndpgxtl+specs" target="_blank">Samsung 6.5 Kg Semi-auto 5 Star Top Loading Washing Machine (White)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/washing_machines/s_6_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 9,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <!--
            
            
            7 Kg section
    
    
        -->

        <div class="display t1d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=ACE+7.5+SUPREME+specs" target="_blank">Whirlpool 7.5 Kg 5 Star Semi-auto Top Loading Washing Machine (Grey Dazzle)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/washing_machines/s_7_1.jpg" alt="">
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
            
            
            8 Kg section
    
    
        -->

        <div class="display t1d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=craw2222+specs" target="_blank">Croma 8.5 Kg Semi-auto Top-load Washing Machine (White)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/washing_machines/s_8_1.png" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 11,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>



        <!--
            
            
            auto section
       
    
        -->


        <!--
            
        
            top loading section
    
    
        -->


        <!--
            
            
            6 Kg section
    
    
        -->

        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=tl+rss+aqua+specs" target="_blank">IFB 6.5 Kg 5 Star Full-auto Top Loading Washing Machine (Light Grey)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/washing_machines/f_t_6_1.jpg" alt="">
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
            
            
            7 Kg section
    
    
        -->

        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=whitemagic+elite+7.5+specs" target="_blank">Whirlpool 7.5 Kg Full-auto Top Loading Washing Machine (Grey)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/washing_machines/f_t_7_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 17,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>



        <!--
            
        
            front loading section
    
    
        -->


        <!--
            
            
            6 Kg section
    
    
        -->

        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=diva+aqua+sx+specs" target="_blank">IFB 6 Kg 5 Star Full-auto Front-load Washing Machine (Silver)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/washing_machines/f_f_6_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 23,000/-</span>
                        </div>

                        <div class="btn"><button>Buy Now</button></div>
                        </div>';
            }

            ?>


        </div>


        <!--
            
            
            7 Kg section
    
    
        -->

        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=waj2416sin+specs" target="_blank">Bosch 7 Kg 5 Star Inverter Touch Control Full-auto Front-load Washing Machine (Silver)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/washing_machines/f_f_7_1.jpeg" alt="">
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
            
            
            8 Kg section
    
    
        -->

        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                            <a href="https://www.google.com/search?q=fht1408zwl+specs" target="_blank">LG 8 Kg 5 Star Inverter Full-auto Front-load Washing Machine (Silver)</a>
                        </div>

                        <div class="img">
                            <img src="../res/img/washing_machines/f_f_8_1.jpg" alt="">
                        </div>

                        <div class="price">
                            <span>Rs. 38,000/-</span>
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