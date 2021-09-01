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
                    <button class="topBtn" onclick='show(1); displayItems_1("t1d",0)'>Personal Coolers</button>
                    <button class="topBtn" onclick='show(2); displayItems_1("t2d",0)'>Tower Coolers</button>
                    <button class="topBtn" onclick='show(3); displayItems_1("t3d",0)'>Window Coolers</button>
                    <button class="topBtn" onclick='show(4); displayItems_1("t4d",0)'>Desert Coolers</button>
                </div>
            </nav>


            <nav class="bottombar">
                <div class="t1b btmChild">

                    <div class="one">

                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",0)'>10L</button>
                        </div>

                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",1)'>20L</button>
                        </div>


                        <div class="t1b1">
                            <button class="btmBtn" onclick='displayItems_1("t1d",2)'>30L</button>
                        </div>

                    </div>

                </div>




                <div class="t2b btmChild">


                    <div class="one">

                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",0)'>20L</button>
                        </div>

                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",1)'>30L</button>
                        </div>

                        <div class="t2b1">
                            <button class="btmBtn" onclick='displayItems_1("t2d",2)'>55L</button>
                        </div>

                    </div>


                </div>



                <div class="t3b btmChild">

                    <div class="one">

                        <div class="t3b1">
                            <button class="btmBtn" onclick='displayItems_1("t3d",0)'>30L</button>
                        </div>

                        <div class="t3b1">
                            <button class="btmBtn" onclick='displayItems_1("t3d",1)'>50L</button>
                        </div>

                    </div>

                </div>



                <div class="t4b btmChild">


                    <div class="one">

                        <div class="t4b1">
                            <button class="btmBtn" onclick='displayItems_1("t4d",0)'>50L</button>
                        </div>


                        <div class="t4b1">
                            <button class="btmBtn" onclick='displayItems_1("t4d",1)'>60L</button>
                        </div>

                        <div class="t4b1">
                            <button class="btmBtn" onclick='displayItems_1("t4d",2)'>70L</button>
                        </div>

                        <div class="t4b1">
                            <button class="btmBtn" onclick='displayItems_1("t4d",3)'>80L+</button>
                        </div>

                    </div>

                </div>

            </nav>

        </div>


        <!--
            
        
            personal section
    
    
        -->


        <!--
            
        
            10L section
    
    
        -->

        <div class="display t1d">

            <?php

            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                        <a href="https://www.google.com/search?q=usha+atomaria+9L+specs" target="_blank">Usha Atomaria Personal Cooler 9L (White)</a>
                        </div>
    
                        <div class="img">
                        <img src="../res/img/coolers/personal/10/1.jpg" alt="">
                        </div>
    
                        <div class="price">
                        <span>Rs. 4,000/-</span>
                        </div>
    
                        <div class="btn"><button>Buy Now</button></div>
                    </div>';
            }

            ?>


        </div>


        <!--
            
            
            20L section
    
    
        -->

        <div class="display t1d">

            <?php

            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                        <div class="heading">
                        <a href="https://www.google.com/search?q=bajaj+frio+23L+specs" target="_blank">Bajaj Frio 23L Personal Air Cooler (White)</a>
                        </div>
    
                        <div class="img">
                        <img src="../res/img/coolers/personal/20/1.jpeg" alt="">
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
            
        
            30L section
    
    
        -->


        <div class="display t1d">

            <?php

            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                    <div class="heading">
                        <a href="https://www.google.com/search?q=bajaj+px97+36L+specs" target="_blank">Bajaj Paltini PX97 Torque 36L (White)</a>
                    </div>
    
                    <div class="img">
                        <img src="../res/img/coolers/personal/30/1.jpg" alt="">
                    </div>
    
                    <div class="price">
                        <span>Rs. 6,000/-</span>
                    </div>
    
                    <div class="btn"><button>Buy Now</button></div>
                    </div>';
            }


            ?>

        </div>


        <!--
            
            
            tower section
    
    
        -->


        <!--
            
        
            20L section
        
    
        -->
        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=havai+bullet+specs" target="_blank">HAVAI Bullet Tower Air Cooler 20L (White)</a>
				</div>

				<div class="img">
					<img src="../res/img/coolers/tower/20/1.jpg" alt="">
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
            
        
            30L section
        
    
        -->
        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=havai+bullet+xl+specs" target="_blank">HAVAI Bullet XL Tower Air Cooler 34L (White)</a>
				</div>

				<div class="img">
					<img src="../res/img/coolers/tower/30/1.jpg" alt="">
				</div>

				<div class="price">
					<span>Rs. 8,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			    </div>';
            }

            ?>

        </div>


        <!--
            
        
            50L section
    
    
        -->

        <div class="display t2d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
				<div class="heading">
					<a href="https://www.google.com/search?q=symphony+diet+3d+55i++specs" target="_blank">Symphony Diet 3D 55i+ Tower Air Cooler 55L with Touchscreen(Black n White)</a>
				</div>

				<div class="img">
					<img src="../res/img/coolers/tower/50/1.jpeg" alt="">
				</div>

				<div class="price">
					<span>Rs. 12,000/-</span>
				</div>

				<div class="btn"><button>Buy Now</button></div>
			    </div>';
            }

            ?>

        </div>



        <!--
            
        
            window section
    
    
        -->

        <!--
            
        
            30L section
    
        
        -->


        <div class="display t3d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                    <div class="heading">
                        <a href="https://www.google.com/search?q=bajaj+sb2003+32L+specs" target="_blank">Bajaj SB2003 32L Window Air Cooler (White)</a>
                    </div>

                    <div class="img">
                        <img src="../res/img/coolers/window/30/1.jpg" alt="">
                    </div>

                    <div class="price">
                        <span>Rs. 6,000/-</span>
                    </div>

                    <div class="btn"><button>Buy Now</button></div>
                    </div>';
            }

            ?>

        </div>


        <!--
            
        
            50L section
    
    
        -->


        <div class="display t3d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                    <div class="heading">
                        <a href="https://www.google.com/search?q=havells+brina+50L+specs" target="_blank">Havells Brina Window Air Cooler 50L (Purple)</a>
                    </div>

                    <div class="img">
                        <img src="../res/img/coolers/window/50/1.jpg" alt="">
                    </div>

                    <div class="price">
                        <span>Rs. 8,000/-</span>
                    </div>

                    <div class="btn"><button>Buy Now</button></div>
                    </div>';
            }

            ?>

        </div>



        <!--
            
        
            desert section
    
    
        -->


        <!--
            
        
            50L section
    
    
        -->

        <div class="display t4d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                    <div class="heading">
                        <a href="https://www.google.com/search?q=bajaj+dc+dlx+54L+specs" target="_blank">Bajaj DC 55 DLX Desert Air Cooler 54L (White)</a>
                    </div>

                    <div class="img">
                        <img src="../res/img/coolers/desert/50/1.jpg" alt="">
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
            
        
            60L section
    
    
        -->

        <div class="display t4d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                    <div class="heading">
                        <a href="https://www.google.com/search?q=blue+star+da60ema++specs" target="_blank">Blue Star DA60EMA Desert Air Cooler 60L (Grey)</a>
                    </div>

                    <div class="img">
                        <img src="../res/img/coolers/desert/60/1.png" alt="">
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
            
        
            70L section
    
    
        -->


        <div class="display t4d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                    <div class="heading">
                        <a href="https://www.google.com/search?q=symphony+sumo+75xl+specs" target="_blank">Symphony Sumo 75XL Powerful Desert Air Cooler 75L (Grey)</a>
                    </div>

                    <div class="img">
                        <img src="../res/img/coolers/desert/70/1.jpg" alt="">
                    </div>

                    <div class="price">
                        <span>Rs. 12,000/-</span>
                    </div>

                    <div class="btn"><button>Buy Now</button></div>
                    </div>';
            }

            ?>

        </div>


        <!--
            

            80L+ section
        
        
        -->

        <div class="display t4d">

            <?php


            for ($i = 0; $i < 4; $i++) {
                echo '<div class="individual">
                    <div class="heading">
                        <a href="https://www.google.com/search?q=usha+100sd1+specs" target="_blank">Usha 100SD1 Desert Cooler 100L (White)</a>
                    </div>

                    <div class="img">
                        <img src="../res/img/coolers/desert/80/1.jpg" alt="">
                    </div>

                    <div class="price">
                        <span>Rs. 12,000/-</span>
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