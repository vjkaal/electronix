<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./css/header_footer.css">
    </head>
    <body>

        <footer>

            <div class="valuesContainer">

                <span class="values-top">Our Values</span>
                <div class="values">

                    <span class="top"><b>Best-in-Class Content for You</b></span>
                    <span class="top"><b>Customer Satisfaction</b></span>

                </div>

            </div>


            <div class="factContainer">

                <div class="facts">

                    <span class="top"><b>2019</b></span>
                    <span class="bottom">Launched</span>

                </div>

                <div class="facts">

                    <span class="top"><b>100K+</b></span>
                    <span class="bottom">Happy Customers</span>

                </div>

            </div>


            <div class="copyrightContainer">
                <span>
                &copy; Copyright Electronix.com
                </span>
                
                <?php
                
                $year = date('Y');
                echo " $year";
                
                ?>
            </div>

        </footer>

    </body>
</html>
