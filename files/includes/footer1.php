<footer class="foot">
    <div class="foot-box foot__text">
        <?php
        require 'footer-logo.php';
        ?>

    </div>

    <div class="foot-box email stuff3">
        <!-- SliceOCountry@gmail.com -->
        <a href="mailto:SliceOCountry@gmail.com">SliceOCountry@gmail.com</a>
    </div>
    <div class="foot-box phone stuff4">
        <span>207-350-5275</span>
    </div>

    <div class="foot-box stuff-facebook">
        <span class="facebook-text">
            Like me on Facebook.
        </span>

        <a href="https://www.facebook.com/Slice-O-Country-2291668391082762/">
            <?php
            // echo __DIR__;
            if ($_SESSION['pagename'] == "index") {
                echo '<img src="./files/images/facebook.png">';
            } else {
                echo '<img src="../images/facebook.png">';
            }
            ?>
        </a>
    </div>

    <div class="foot-box alchemy">
        <a href="https://www.alchemywebdesigns.com">
            <div>
                <span class="credit-brand footer-box">Alchemy</span><span class="credit-name"> Web Designs.com</span>
            </div>

            <div class="credit-tagline footer-box">
                Making magic on the web
            </div>
        </a>
    </div>

</footer>