<?php
$isHome = isset($is_home) ? $is_home : false;
?>

<header class="main-header" id="scrollHeader">
    <div class="header-container-scroll">
        <div class="logo-scroll">
            <a href="<?php echo base_url('home'); ?>">
                <img src="<?= base_url() ?>assets/logo/scroll-logo.svg" alt=""></a>
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
        <a href="<?php echo base_url('home'); ?>">
            <img src="assets/logo/logo.svg" class="menu-logo" alt="Floria Logo">
        </a>
        <p class="menu-text font-nexalight  ">
            Welcome to Floria, a place where all flower shops
            take on a whole new dimension of beautiful.
        </p>


        <img class="menu-signature" src="<?= base_url() ?>assets/icons/sign2.png">
        <p class="menu-small-sub font-oswaldextralight">Founder</p>

        <div class="menu-grid">
            <img src="<?= base_url() ?>assets/Images/menu-1.jpg">
            <img src="<?= base_url() ?>assets/Images/menu-2.jpg">
            <img src="<?= base_url() ?>assets/Images/menu-3.jpg">
            <img src="<?= base_url() ?>assets/Images/menu-4.jpg">
        </div>

        <ul class="menu-links font-nexalight">
            <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
            <li><a href="<?= base_url() ?>#aboutsection">About</a></li>
            <li><a href="<?php echo base_url('products'); ?>">Collection</a></li>
            <li><a href="<?php echo base_url('occasionalproduct'); ?>">Special Occasion</a></li>
            <li><a href="<?php echo base_url('contactus'); ?>">Contact</a></li>
        </ul>

        <div class="menu-icons">
            <a href="#"><img src="<?= base_url() ?>assets/icons/FLORIA-CONTACT ICON-2.svg" alt=""></a>
            <a href="#"><img src="<?= base_url() ?>assets/icons/FLORIA-CONTACT ICON-3.svg" alt=""></a>
            <a href="#"><img src="<?= base_url() ?>assets/icons/FLORIA-CONTACT ICON-4.svg" alt=""></a>
        </div>

    </div>
</div>