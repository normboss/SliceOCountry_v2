<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "contact";
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>

    <title>Slice 'O Country | Contact | Homemade jams, preserves & cutting boards</title>
    <meta name=="description" content="Contact Sarah Brewer for jams & preserves, plus novelty Maple hard-wood cutting boards.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/contact.css" media="screen" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

</head>

<body>

    <?php
    // require '../includes/banner.php';
    ?>
    <main>

        <div class="contact-container">
            <div class="form-container">
                <form method="post" class="contactform" action="https://www1.domain.com/scripts/formemail.bml" name="contactform">
                    <input type="hidden" name="my_email" value="norm.bosse0@gmail.com">
                    <label for="email">Your Email Address</label>
                    <input maxlength="80" name="email" size="40" type="text">
                    <label for="subject">Subject</label>
                    <input maxlength="80" name="subject" size="40" type="text">
                    <label for="message">Message</label>
                    <textarea cols="40" maxlength="1000" name="message" rows="5"></textarea>
                    <input type="hidden" name="required" value="email,message">
                    <input type="hidden" name="thankyou_url" value="https://www.alchemywebdesigns.com/files/pages/thankyou.php">
                    <label for="submit"></label>
                    <input type="submit" name="submit" value="Send">
                </form>

            </div>

        </div>
    </main>

    <!-- <?php 
    // require '../includes/footer.php'
     ?> -->


</body>

</html>