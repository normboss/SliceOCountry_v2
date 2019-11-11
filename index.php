<?php
if (!session_id())
    session_start();
require __DIR__ . '/files/includes/root.php';
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
    <title>Slice O' Country</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./files/css/index.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="./files/images/favicon-16x16.png">

</head>

<body>

    <?php
    //  require './files/includes/menu2.php'; 
    require './files/includes/header1.php';
    ?>
    <main>
        <!-- <div class="spacer20"></div> -->
        <!-- <div class="spacer20"></div> -->
        <div class="spacer20"></div>
        <div class="spacer20"></div>

        <div class="content">
            <div class="inner-box">
                <div class="box box0">
                    <!-- box0 -->
                </div>

                <div class="box box1">
                    <div class="title">
                        <!-- <span class="special-font">S</span>lice O&#39; Country -->
                        <!-- <?php require './files/includes/logo.php';     ?> -->
                    </div>
                    <!-- <div class="spacer20"></div> -->
                    <div class="tag-line">
                        <span>A&nbsp;Taste&nbsp;of&nbsp;Home </span>
                        <span>and&nbsp;a </span>
                        <span>Touch&nbsp;of&nbsp;Country</span>
                    </div>
                </div>

                <div class="box box2">
                    <img src="./files/images/products.png" alt="Pig cutting board and assortment of jams in different size jars.">
                </div>

                <div class="box box21">
                    <div class="outside-box">
                        <div class="inside-box">
                            Local<br>Specials
                        </div>
                    </div>
                </div>
                <div class="box box3">
                    <img src="./files/images/sarah_circle.png" alt="Sarah Brewer proprieter of Slice O' Country">
                    <div class="box32">
                        <div class="small">Sarah Brewer, </div>
                        <div class="small">certified home&nbsp;processor</div>
                    </div>
                </div>
                <div class="box box31">
                    <img src="./files/images/sarah_circle.png" alt="Sarah Brewer proprieter of Slice O' Country">
                    <div class="box32">
                        <div class="small">Sarah Brewer, </div>
                        <div class="small">certified home&nbsp;processor</div>
                    </div>
                    <div class="spacer20"></div>
                </div>
                <div class="box box4">
                    <div>Wild Gathered and Farm&nbsp;Fresh Ingredients&nbsp;are&nbsp;My&nbsp;Secret.</div>
                    <!-- <div class="small">Sarah Brewer, certified home processor</div> -->
                </div>
                <!-- <div class="box box5">
                    <div class="small">Sarah Brewer, </div>
                    <div class="small">certified home&nbsp;processor</div>
                </div> -->
            </div>
        </div>

        <!-- Lower content -->

        <div class="links">
            <a href="./files/pages/jams.php">
                <div class="box-links jams-mobile">
                    <div class="spacer20"></div>
                    Jams & Preserves
                </div>
            </a>
            <div class="spacer10"></div>
            <a href="./files/pages/boards.php">
                <div class="box-links boards-mobile">
                    <div class="spacer20"></div>
                    Maine Made Cutting Boards
                </div>
            </a>
        </div>

        <div class="content-lower">
            <div class="spacer10"></div>
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
    require './files/includes/footer1.php'
    ?>
    <div class="spacer20"></div>
    <div class="spacer20"></div>
    <div class="spacer20"></div>
    <div class="spacer20"></div>
    <div class="spacer20"></div>

</body>

</html>