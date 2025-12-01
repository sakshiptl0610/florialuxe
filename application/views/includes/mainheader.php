<header class="simple-main-header">
  <div class="header-container-simple">

    <div class="logo-simple">
      <a href="<?php echo base_url('home'); ?>">
        <img src="<?= base_url() ?>assets/logo/scroll-logo.svg" alt=""></a>
    </div>

    <div class="header-container2">
      <div class="shop-cart me-4" id="headerCartBtn">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17.648px" height="24.083px" viewBox="0 0 17.648 25.083" enable-background="new 0 0 17.648 25.083" xml:space="preserve" stroke="#1b745e">
          <rect x="1.294" y="8.382" fill="none" stroke-miterlimit="10" width="15" height="16" stroke="#1b745e"></rect>
          <path fill="none" stroke-miterlimit="10" d="M9.741-9.65"></path>
          <path fill="none" stroke-miterlimit="10" d="M8.793,11.224"></path>
          <path fill="none" stroke-miterlimit="10" d="M5.294,11.243V4.864c0,0-0.12-3.59,3.506-3.59 c3.541,0,3.493,3.56,3.493,3.56v6.44"></path>
        </svg>
        <span class="count-cart">0</span>
      </div>

      <div class="hamburger-simple" id="hamburgerSecond">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

  </div>
</header>

<!-- cart popup -->


<div id="cartPopup" class="cart-popup">
  <div class="cart-popup-header">
    <strong>Your Cart</strong>
    <button id="closeCartPopup" class="close-popup">✕</button>
  </div>

  <div id="cartItems" class="cart-items-box"></div>

  <div class="cart-popup-footer cart-btn">
    <a href="<?= base_url('cart') ?>" class="view-cart-btn">View Cart</a>
  </div>
</div>



<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenuSecond">

  <div class="menu-close" id="menuCloseSecond">×</div>

  <div class="menu-content">
    <a href="<?php echo base_url('home'); ?>">
      <img src="<?= base_url() ?>assets/logo/logo.svg" class="menu-logo" alt="Floria Logo">
    </a>
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
      <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
      <li><a href="<?= base_url() ?>#aboutsection">About</a></li>
      <li><a href="<?php echo base_url('products'); ?>">Collection</a></li>
      <li><a href="<?php echo base_url('occasionalproduct'); ?>">Special Occasion</a></li>
      <li><a href="<?php echo base_url('contactus'); ?>">Contact</a></li>
    </ul>

    <div class="menu-icons">
      <a href="#"><img src="<?= base_url() ?>assets/icons/FLORIA-CONTACT ICON-2.svg"></a>
      <a href="#"><img src="<?= base_url() ?>assets/icons/FLORIA-CONTACT ICON-3.svg"></a>
      <a href="#"><img src="<?= base_url() ?>assets/icons/FLORIA-CONTACT ICON-4.svg"></a>
    </div>

  </div>
</div>