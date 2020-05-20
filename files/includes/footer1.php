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
            echo '<img src="../images/facebook.png" alt="FB">';
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
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script>
    window.onorientationchange = function() {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    };

    $(document).ready(function() {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);

        $(window).resize(handleResize);
        handleResize();

        // $(window).resize(function() {
        function handleResize() {
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        }
    });
</script>

<script>
    var elements = document.getElementsByClassName("button");

    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', buttonHandler, false);
    }

    function buttonHandler() {
        window.open("mailto:SliceOCountry@gmail.com");
        // window.location.href = "mailto:SliceOCountry@gmail.com";
    };
</script>