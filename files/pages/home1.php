<?php
if (!session_id())
    session_start();
require __DIR__ . '/../includes/root.php';
$_SESSION['pagename'] = "index";
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

    <link href="../css/home1.css" media="screen" rel="stylesheet" type="text/css">
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

            <div class="content">

                <img id="products" src="../images/products.png" alt="Cutting board and jars of jam.">

                <div class="local-specials">
                    <div class="inside-box">
                        Local<br>Specials
                    </div>
                </div>

                <div class="sarah-info">
                    <div class="sarah-image">
                        <img class="sarah-round" src="../images/sarah_circle.png" alt="Sarah Brewer owner of Slice o' Country.">
                    </div>
                    <div class="sarah-text">
                        Sarah Brewer,<br> certified home&nbsp;processor
                    </div>
                </div>
                <div class="wild-gathered">
                    Wild Gathered and Farm&nbsp;Fresh<br>Ingredients&nbsp;are&nbsp;My&nbsp;Secret.
                    </Wild>
                </div>
            </div>
        </div>

        <div class="links">
            <a href="jams.php">
                <div class="box-links jams-mobile">
                    Jams & Preserves
                </div>
            </a>

            <a href="boards.php">
                <div class="box-links boards-mobile">
                    Maine Made Cutting Boards
                </div>
            </a>

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

    <script>
        var tagLine = document.getElementsByClassName('header-logo__sub-title');
        tagLine[0].style.display = "none";

        // var menuItems = document.getElementsByClassName('nav');
        // for ( var i=0; i < menuItems.length; i++ ) {
        //     menuItems[i].style.height = "50px";
        // }
    </script>
</body>

</html>