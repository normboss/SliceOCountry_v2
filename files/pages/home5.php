<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "home";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <?php
    // require '../includes/globalSiteTag.html';
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/home5.css" media="screen" rel="stylesheet" type="text/css">
    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

</head>

<body>

    <?php
    //  require './files/includes/menu2.php'; 
    // require '../includes/header1.php';
    require '../includes/banner.php'
    ?>
    <main>

        <div class="container">
            <h1>A Taste of Home and a Touch of Country</h1>

            <!-- <div class="content"> -->
            <div class="products">
                <img id="products" src="../images/products.png" alt="Cutting board and jars of jam.">
                <?php require '../includes/sarah-info.php' ?>
                <div class="local-specials">
                    <div class="inside-box">
                        Local<br>Specials
                    </div>
                </div>
                <div class="wild-gathered">
                    Wild Gathered and Farm&nbsp;Fresh<br>Ingredients are My&nbspSecret.
                </div>
            </div>

            <!-- </div> -->
        </div>

        <div class="links">
            <!-- <a href="jams.php">
                <div class="box-links jams-mobile">
                    Jams & Preserves
                </div>
            </a>

            <a href="boards.php">
                <div class="box-links boards-mobile">
                    Maine Made Cutting Boards
                </div>
            </a> -->

            <div class="link-block">
                <a href="jams.php">
                    <img src="../images/jamsa.jpg" alt="">
                    <h2>Jams & Preserves</h2>
                </a>
            </div>
            <div class="link-block">
                <a href="boards.php">
                    <img src="../images/pig_board3a.jpg" alt="">
                    <h2>Maine Made Cutting Boards</h2>
                </a>
            </div>

        </div>

        <div class="content-lower">
            <div class="box-lower visit">
                <div class="heading">
                    Visit Sarah!
                </div>
                <div>Pick up my Seasonal Specials and fresh baked goodies while they last!</div>
                <br>
                <div>Tuesdays and Saturdays through September</div>
                <div>Boothbay Memorial Library with</div>
                <div>The Boothbay Crafters Group</div>
                <br>
                <div>October though December find Sarah at various festivals and holiday events.<br>
                    Follow her on
                    <a href="https://www.facebook.com/Slice-O-Country-2291668391082762/">Facebook</a>
                    to see where you can find her.
                </div>
                <br>
                <div>Available at Browns Farm Stand in Boothbay Harbor, Capers Deli & Catering.
                    Also featured at Shannon's Unshelled.</div>
                <br>

            </div>
        </div>
    </main>
    <div class="spacer20"></div>

    <?php
    require '../includes/footer1.php'
    ?>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(document).ready(function() {
            var classOff = false;
            $(window).resize(handleResize);
            handleResize();

            // $(window).resize(function() {
            function handleResize() {
                var vw = window.innerWidth;
                var vh = window.innerHeight;
                if ((vw <= 750 || vh <= 750) && classOff === false) {
                    classOff = true;
                    // $("main > .container").toggleClass("content");
                    // $("main > .container > .content").css("border", "3px solid red");
                    // $("main > .container ").css("border", "3px solid red");
                    $("main > .container > .content").css("position", "static");
                    // $("main > .container > .content > .products").css("position", "static");
                    // $("main > .container > .content > .sarah-info").css("position", "static");
                    // $("main > .container > .content > .wild-gathered ").css("position", "static");
                    // $("main > .container > .content > .local-specials").css("position", "static");
                } else if (vw > 750 && vh > 750 && classOff === true) {
                    classOff = false;
                    // $("main > .container").toggleClass("content");
                    // $("main > .container ").css("border", "3px solid green");
                    $("main > .container > .content").css("position", "relative");
                    // $("main > .container > .content > .products").css("position", "absolute");
                    // $("main > .container > .content > .sarah-info").css("position", "absolute");
                    // $("main > .container > .content > .wild-gathered ").css("position", "absolute");
                    // $("main > .container > .content > .local-specials").css("position", "absolute");
                }

                // $(".container > h1").css("border", "3px solid red");
                // $(".container > h1").css("font-size", "30px");
            };
        });
    </script> -->
    <script>
        // var tagLine = document.getElementsByClassName('header-logo__sub-title');
        // tagLine[0].style.display = "none";

        // var menuItems = document.getElementsByClassName('nav');
        // for ( var i=0; i < menuItems.length; i++ ) {
        //     menuItems[i].style.height = "50px";
        // }
    </script>
</body>

</html>