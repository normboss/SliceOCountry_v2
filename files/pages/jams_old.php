<?php
if (!session_id())
    session_start();
require __DIR__ . '/../includes/root.php';

$_SESSION['pagename'] = "boards";
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

    <link href="../css/jams.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

</head>

<body>

    <?php
    require '../includes/header1.php';
    ?>
    <main>
        <!-- <div class="spacer20"></div> -->
        <!-- <div class="spacer20"></div> -->
        <!-- <div class="spacer20"></div> -->
        <!-- <div class="spacer20"></div> -->
        <!-- <div class="content">
            <div class="box box0">
                 <img src="../images/rake 2.png">
            </div>
            <div class="box box1">
            </div>
        </div> -->
        <section class="top-section">
            <div class="top-content">

                <div class="top-box tag-line1">
                    <span>A&nbsp;Taste&nbsp;of&nbsp;Home </span>
                    <span>and&nbsp;a </span>
                    <span>Touch&nbsp;of&nbsp;Country</span>
                    <div class="spacer20"></div>
                </div>

                <div class="top-box boards-heading">JAMS and PRESERVES</div>

                <div class="top-box boothbay">
                    <div>Made in Small Batches</div>
                    <div>Packed with fresh picked goodness</div>
                </div>
                <div class="top-box sarah-pic">
                    <img src="../images/sarah_circle1.png">
                    <div class="top-box sarah-cert">
                        <div>Sarah Brewer,</div>
                        <div>certified&nbsp;home&nbsp;processor</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- </div>
        </div>
        </div> -->
        <div class="spacer20"></div>

        <div class="size-text-narrow">
            <div>Available in three sizes:</div>
            <!-- <div> 1.5 onces, 4 ounces and&nbsp;8&nbsp;ounces</div> -->
            <!-- <div class="spacer20"></div>
            <div class="spacer20"></div> -->
        </div>

        <div class="middle-section">
            <div class="middle-box size-text">
                <div>Available in three sizes:</div>
                <!-- <div> 1.5 onces, 4 ounces and&nbsp;8&nbsp;ounces</div> -->
            </div>
            <div class="middle-box large-jam">
                <!-- large -->
                <img src="../images/straw_rhubard_8oz1.jpg">
                <div class="spec-text">8 ounces</div>
                <div class="spec-text">$8.75</div>
            </div>

            <div class="middle-box small-jam">
                <!-- small -->
                <img src="../images/rhubarb.jpg">
                <div class="spec-text">1.5 ounces</div>
                <div class="spec-text">$3.50</div>
            </div>

            <div class="middle-box medium-jam">
                <!-- medium -->
                <img src="../images/4oz_raspberry.jpg">
                <div class="spec-text">4 ounces</div>
                <div class="spec-text">$5.00</div>
            </div>
        </div>

        <div class="spacer20"></div>
        <div class="jams">

            <!-- 1 -->
            <div class="board-box image">
                <img src="../images/blueberry.png">
            </div>
            <div class="board-box copy">
                <!-- <div class="logo">Slice O’ Country</div> -->
                <?php
                require '../includes/small-logo.php'
                ?>
                <div class="name">Wild Maine Blueberry Jam</div>
                <div class="spacer10"></div>
                <div class="text">
                    Wild Maine berries gathered locally and gently processed in
                    small batches make my blueberry spread delicious.
                    Great for perking up that morning toast or drizzled on top
                    of vanilla ice cream for a sweet finish to the day.
                    <br>
                    <div class="spacer10"></div>

                    <div class="spacer10"></div>
                </div>
                <div class="button-box">
                    <button class="board-button">Order from Sarah</button>
                </div>
            </div>

            <!-- 2 -->
            <div class="board-box image">
                <img src="../images/strawberry_8oz.jpg">
            </div>
            <div class="board-box copy">
                <?php
                require '../includes/small-logo.php'
                ?>
                <div class="name">Farm Fresh Strawberry Jam</div>
                <div class="spacer10"></div>
                <div class="text">
                    Farm Fresh strawberries gathered locally and gently processed
                    in small batchs make our delicious jam. Great for bringing
                    the sunshine to morning breakfast or coupled with peanut
                    butter for the best PB&J ever!
                </div>
                <div class="spacer10"></div>
                <div class="spacer10"></div>
                <div class="button-box">
                    <button class="board-button">Order from Sarah</button>
                </div>
            </div>

            <!-- 3 -->
            <div class="board-box image">
                <img src="../images/raspberry.png">
            </div>
            <div class="board-box copy">
                <?php
                require '../includes/small-logo.php'
                ?>
                <div class="name">Wild Maine Raspberry Jam</div>
                <div class="spacer10"></div>
                <div class="text">
                    Slice O’ Country Wild Maine Raspberry Jam Wild Maine
                    berries gathered locally and gently processed in small
                    batches make our beautiful red jam. Pure country summer in a jar!
                    <div class="spacer10"></div>
                    <div class="spacer10"></div>
                    <div class="button-box">
                        <button class="board-button">Order from Sarah</button>
                    </div>
                </div>
            </div>
            <!-- 4 -->
            <div class="board-box image">
                <img src="../images/rhubarb_8oz.jpg">
            </div>
            <div class="board-box copy">
                <?php
                require '../includes/small-logo.php'
                ?>
                Maine Lobster Board
                <div class="name">Heirloom Rhubarb Jam</div>
                <div class="spacer10"></div>
                <div class="text">
                    Slice O’ Country Wild Maine Raspberry Jam Wild
                    Maine berries gathered locally and gently processed
                    in small batches make our beautiful red jam.
                    Pure country summer in a jar!
                    <div class="spacer10"></div>
                    <div class="spacer10"></div>
                    <div class="button-box">
                        <button class="board-button">Order from Sarah</button>
                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div class="board-box image">
                <img src="../images/strawrhubard300.jpg">
            </div>
            <div class="board-box copy">
                <?php
                require '../includes/small-logo.php'
                ?>
                <div class="name">Strawberry Rhubarb Jam</div>
                <div class="spacer10"></div>
                <div class="text">
                    The merging of to two great flavors: Heirloom Rhubarb
                    and Farm Fresh Strawberries produces a taste that
                    brings back fond memories of grandma’s kitchen.
                    <div class="spacer10"></div>
                    <div class="button-box">
                        <button class="board-button">Order from Sarah</button>
                    </div>
                    <div class="spacer10"></div>
                </div>
            </div>

            <!-- 1 -->
            <div class="board-box image filler">
                <img src="../images/blueberry.png">
            </div>
            <div class="board-box copy filler">
                <!-- <div class="logo">Slice O’ Country</div> -->
                <?php
                require '../includes/small-logo.php'
                ?>
                <div class="name">Wild Maine Blueberry Jam</div>
                <div class="spacer10"></div>
                <div class="text">
                    Wild Maine berries gathered locally and gently processed in
                    small batches make my blueberry spread delicious.
                    Great for perking up that morning toast or drizzled on top
                    of vanilla ice cream for a sweet finish to the day.
                    <br>
                    <div class="spacer10"></div>

                    <div class="spacer10"></div>
                </div>
                <div class="button-box">
                    <button class="board-button">Order from Sarah</button>
                </div>
            </div>
        </div>

    </main>

    <?php
    require '../includes/footer1.php'
    ?>

</body>

</html>