<?php
$styleSarah = 'style="color: black; font-size: 22px; font-family: Arial; font-weight: bold"';

$styleJams = 'style="text-align: center; display: block; font-size: 24px; 
                font-style: italic; font-family: Arial; font-weight: normal;"';
// $styleJams = '""';  

$styleJars = 'style="margin: 0 auto; width: 100%; height: auto; text-align: center; display: block; font-size: 16px; 
                font-style: normal; font-family: Arial;">';
?>

<div class="banner">
<?php
    if ( $_SESSION['pagename'] == 'home' ) {
        echo '<div class="banner-logo">';
        echo '<span class="special-font">S</span>lice O&#39; Country</span>';
        echo '</div>';
    } else {
        echo '<div class="banner-logo">';
        echo '<span class="special-font">S</span>lice O&#39; Country<br>';
        echo '<span class="sub-title">A Taste of Home and a Touch of Country</span>';
        echo '</div>';
    }
    ?>

    <div class="banner-menu">



        <div class="banner-menu-wide">
            <ul>
                <span class="menu-item"><a href="home5.php">Home</a></span>
                <span class="menu-item"><a href="boards.php">Cutting Boards</a></span>
                <span class="menu-item"><a href="jams.php">Jams & Preserves</a></span>
            </ul>
        </div>

        <div class="banner-menu-narrow">
            <ul>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                    </a>
                    <div class="dropdown-content">
                        <a href="home5.php">Home</a>
                        <a href="boards.php">Cutting Boards</a>
                        <a href="jams.php">Jams & Preserves</a>
                    </div>
                </li>
            </ul>
        </div>


    </div>

</div>