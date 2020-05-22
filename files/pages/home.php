<?php
if (!session_id())
    session_start();
    require __DIR__ . '/../includes/root.php';
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
    require '../includes/globalSiteTag.html';
    ?>
    <title>Slice 'O Country / Homemade jams, preserves & cutting boards</title>
    <meta name="description" content="Jams & preserves from the freshest ingredients, plus novelty Maple hard-wood cutting boards. Sarah Brewer, owner & certified home processor.">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/home.css" media="screen" rel="stylesheet" type="text/css">
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

</head>

<body>

    <?php
    require '../includes/banner.php';
    ?>
    <main>

        <div class="content">
            <div class="inner-box">
                <div class="box box0">
                    <!-- box0 -->
                </div>

                <div class="box box1">
                    <div class="tag-line">
                        <span>A&nbsp;Taste&nbsp;of&nbsp;Home </span>
                        <span>and&nbsp;a </span>
                        <span>Touch&nbsp;of&nbsp;Country</span>
                    </div>
                </div>

                <div class="box box2">
                    <img src="../images/products.png" alt="Cutting board and jars of jam." <?php echo $styleSarah; ?>>
                </div>

                <div class="box box21">
                    <div class="outside-box">
                        <div class="inside-box">
                            Local<br>Specials
                        </div>
                    </div>
                </div>
                <div class="box box3">
                    <img src="../images/sarah_circle.png" alt="Sarah Brewer owner of Slice o' Country." <?php echo $styleSarah; ?>>
                    <div class="box32">
                        <div class="small">Sarah Brewer, </div>
                        <div class="small">certified home&nbsp;processor</div>
                    </div>
                </div>
                <div class="box box31">
                    <img src="../images/sarah_circle.png" alt="Sarah Brewer" <?php echo $styleSarah; ?>>
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
    require '../includes/footer1.php'
    ?>

</body>

</html>