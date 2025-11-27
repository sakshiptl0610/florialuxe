<?php
$isHome = isset($is_home) ? $is_home : false;
?>

<header class="main-header" id="scrollHeader">
    <div class="header-container-scroll">
        <div class="logo-scroll">
            <img src="<?= base_url() ?>assets/logo/scroll-logo.svg" alt="">
        </div>

        <div class="header-container2">
            <div class="hamburger-scroll" id="hamburgerScroll">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">

    <!-- Close Button -->
    <div class="menu-close" id="closeScroll">×</div>

    <div class="menu-content">

        <img src="assets/logo/logo.svg" class="menu-logo" alt="Floria Logo">

        <p class="menu-text font-nexalight  ">
            Welcome to Floria, a place where all flower shops
            take on a whole new dimension of beautiful.
        </p>


        <img class="menu-signature" src="<?= base_url() ?>assets/icons/sign.png">
        <p class="menu-small-sub font-oswaldextralight">Founder</p>

        <div class="menu-grid">
            <img src="<?= base_url() ?>assets/Images/menu-1.jpg">
            <img src="<?= base_url() ?>assets/Images/menu-2.jpg">
            <img src="<?= base_url() ?>assets/Images/menu-3.jpg">
            <img src="<?= base_url() ?>assets/Images/menu-4.jpg">
        </div>

        <ul class="menu-links font-nexalight">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <div class="menu-icons">
            <a href="#"><img src="<?= base_url() ?>assets/icons/FLORIA-CONTACT ICON-2.svg" alt=""></a>
            <a href="#"><img src="<?= base_url() ?>assets/icons/FLORIA-CONTACT ICON-3.svg" alt=""></a>
            <a href="#"><img src="<?= base_url() ?>assets/icons/FLORIA-CONTACT ICON-4.svg" alt=""></a>
        </div>

    </div>
</div>