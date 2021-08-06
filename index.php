<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELECTRONIX</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

</head>

<!-- onload="looping();" -->

<body>

    <!-- header file -->
    <?php include 'inc/header.php'; ?>


    <br>
    <div>
        <div class="slideshow">
            <div class="imgCont">
                <img src="img/1.png" alt="" id="img1">
                <img src="img/2.jpg" alt="" id="img2">
                <img src="img/3.jpg" alt="" id="img3">
                <img src="img/4.jpg" alt="" id="img4">
                <img src="img/5.jpg" alt="" id="img5">
                <img src="img/6.gif" alt="" id="img6">
                <img src="img/7.jpg" alt="" id="img7">
                <img src="img/8.jpg" alt="" id="img8">
                <img src="img/9.jpg" alt="" id="img9">
                <!-- don't remove last image, else the 9th image is put out of loop -->
                <img src="img/img.jpg" alt="" id="extra">
            </div>
        </div>

        <!-- <div id="theme">
                <button onclick="changeTheme();">Theme</button>
            </div> -->

    </div>
    <br>


    <section id="main">
        <div>

            <section>
                <div>
                    <img class="sImg" src="img/tv.jpg" alt="">
                </div>

                <div class="content">
                    <h2>See Big Think Big</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem deserunt, iusto eaque atque maiores nobis porro debitis, optio dolores ea voluptatum nemo consectetur dolorem similique.</p>
                </div>

            </section>
        
            <section>
                
                <div class="content">
                    <h2>See Big Think Big</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem deserunt, iusto eaque atque maiores nobis porro debitis, optio dolores ea voluptatum nemo consectetur dolorem similique.</p>
                </div>
                
                <div>
                    <img class="sImg" src="img/refrigerator.jpeg" alt="">
                </div>
            
            </section>
            
            
            <section>
                
                <div>
                    <img class="sImg" src="img/air-cooler.jpeg" alt="">
                </div>
                
                <div class="content">
                    <h2>See Big Think Big</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem deserunt, iusto eaque atque maiores nobis porro debitis, optio dolores ea voluptatum nemo consectetur dolorem similique.</p>
                </div>    

            </section>



            <section>
                
                <div class="content">
                    <h2>See Big Think Big</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem deserunt, iusto eaque atque maiores nobis porro debitis, optio dolores ea voluptatum nemo consectetur dolorem similique.</p>
                </div>

                <div>
                    <img class="sImg" src="img/ac3.jpg" alt="">
                </div>

            </section>



            <section>

                <div>
                    <img class="sImg" src="img/washing-machine.jpg" alt="">
                </div>
                
                <div class="content">
                    <h2>See Big Think Big</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem deserunt, iusto eaque atque maiores nobis porro debitis, optio dolores ea voluptatum nemo consectetur dolorem similique.</p>
                </div>

            </section>


            <section>
                
                <div class="content">
                    <h2>See Big Think Big</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem deserunt, iusto eaque atque maiores nobis porro debitis, optio dolores ea voluptatum nemo consectetur dolorem similique.</p>
                </div>

                <div>
                    <img class="sImg" src="img/mobile.jpg" alt="">
                </div>

            </section>



            <section>
                
                <div>
                    <img class="sImg" src="img/oven.jpg" alt="">
                </div>

                <div class="content">
                    <h2>See Big Think Big</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem deserunt, iusto eaque atque maiores nobis porro debitis, optio dolores ea voluptatum nemo consectetur dolorem similique.</p>
                </div>

            </section>



            <section>

                <div class="content">
                    <h2>See Big Think Big</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem deserunt, iusto eaque atque maiores nobis porro debitis, optio dolores ea voluptatum nemo consectetur dolorem similique.</p>
                </div>

                <div>
                    <img class="sImg" src="img/speaker2.jpg" alt="">
                </div>

            </section>
        
        </div>

    </section>



    <!-- footer file -->
    <?php include 'inc/footer.php'; ?>

</body>

<!-- <script>

        function changeTheme(){
            console.log("called");
            console.log(document.querySelector('body').style.backgroundColor);
            if(document.querySelector('body').style.background === "#fbfaf7"){
                document.querySelector('body').style.background = '#2b2d42';
            }
        }

    </script> -->

<script src="js/slideshow.js" charset="utf-8"></script>

</html>