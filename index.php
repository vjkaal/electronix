<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>ELECTRONIX</title>
        <link rel="stylesheet" href="css/master.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    </head>
    <body>

        <!-- header file -->
        <?php include 'inc/header.php'; ?>


        <br>
        <div class="products">
            <div class="slideshow">
                <div class="imgCont">
                    <button id="prev"><</button>
                    <img src="img/1.png" alt="" id="img1">
                    <img src="img/2.jpg" alt="" id="img2">
                    <img src="img/3.jpg" alt="" id="img3">
                    <img src="img/4.jpg" alt="" id="img4">
                    <img src="img/5.jpg" alt="" id="img5">
                    <img src="img/6.gif" alt="" id="img6">
                    <img src="img/7.jpg" alt="" id="img7">
                    <img src="img/8.jpg" alt="" id="img8">
                    <img src="img/9.jpg" alt="" id="img9">
                    <button id="next">></button>
                </div>
            </div>


            <!-- <table>
                <tr>
                    <td>Item type 1: </td>
                    <td>item 1 <img src="img/img.jpg" alt=""></td>
                    <td>item 2 <img src="img/img.jpg" alt=""></td>
                </tr>
                <tr>
                    <td>Item type 2: </td>
                    <td>item 1 <img src="img/img.jpg" alt=""></td>
                    <td>item 2 <img src="img/img.jpg" alt=""></td>
                </tr>
                <tr>
                    <td>Item type 3: </td>
                    <td>item 1 <img src="img/img.jpg" alt=""></td>
                    <td>item 2 <img src="img/img.jpg" alt=""></td>
                </tr>
            </table> -->
        </div>
        <br>



        <!-- footer file -->
        <?php include'inc/footer.php'; ?>


    </body>
    <script src="js/slideshow.js" charset="utf-8"></script>
</html>