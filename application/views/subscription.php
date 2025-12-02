<?php include('includes/header-link.php') ?>
<?php include('includes/mainheader.php') ?>
<div class="bg-sub">
  <section class="pricing-section py-5">
    <div class="container sub-container">


      <h2 class="text-center pricing-title mb-5 font-canegroni">Our Pricing Plans</h2>
      <p class="text-center pricing-sub-text font-nexalight">
        Delightful floral arrangements crafted with passion and delivered with utmost care.
      </p>
      <div class="row g-4 justify-content-center">

        <!-- Daily Plan -->
        <div class="col-md-4">
          <div class="pricing-card font-nexalight">
            <h3 class="price"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham"> 49 <span class="font-adelia">per day</span></h3>
            <h4 class="plan-title ">Daily Flower Plan</h4>
            <p>Fresh handpicked <br>flowers delivered every morning across <br> UAE.</p>
            <a href="#" class="pricing-btn">Subscribe</a>
          </div>
        </div>

        <!-- Weekly Plan -->
        <div class="col-md-4">
          <div class="pricing-card font-nexalight">
            <h3 class="price"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham"> 199 <span class="font-adelia">per week</span></h3>
            <h4 class="plan-title ">Weekly Flower Plan</h4>
            <p>Premium curated bouquets delivered once a week to homes or offices.</p>
            <a href="#" class="pricing-btn">Subscribe</a>
          </div>
        </div>

        <!-- Monthly Plan -->
        <div class="col-md-4">
          <div class="pricing-card font-nexalight">
            <h3 class="price"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham"> 499 <span class="font-adelia">per month</span></h3>
            <h4 class="plan-title ">Monthly Flower Plan</h4>
            <p>Luxury floral arrangements delivered every month across the UAE.</p>
            <a href="#" class="pricing-btn">Subscribe</a>
          </div>
        </div>

      </div>
    </div>
  </section>
</div>
<section class="season-section position-relative">

  <img src="<?= base_url() ?>assets/Images/FLORIA-23.png" class="top-flower" alt="flower">

  <div class="vertical-tag-wrap">
    <span class="tag-text font-oswaldextralight ">Seasonal <br> flower</span>
    <svg class="vertical-tag-wrap-line" xmlns="http://www.w3.org/2000/svg" width="12.875" height="220" viewBox="0 0 12.875 180">
      <line fill="none" stroke="#338E8B" stroke-miterlimit="10" x1="2.221" y1="17.431" x2="2.221" y2="220"></line>

      <path fill="#3F8171" d="M2.098,15.908c0.406-1.32,2.564-1.597,3.742-1.901
           c1.594-0.412,2.357-1.25,3.348-2.558
           c1.48-1.951,2.17-3.886,2.419-6.336
           c0.142-1.393-0.162-2.887,0.118-4.235
           c-0.28,2.665-3.648,4.36-5.069,6.397
           c-1.135,1.625-1.124,2.954-1.649,4.763
           c-0.546,1.879-1.48,1.798-2.831,2.889
           C2.185,15.081,2.272,15.167,2.098,15.908z"></path>
    </svg>
  </div>

  <div class="section-heading font-canegroni">
    CHOSEN AT <br> THEIR BEST <img class="mb-3" src="<?= base_url() ?>assets/icons/FLORIA-CLICK-ICON-1.svg" alt="" width="35px">

  </div>

  <div class="bottom-row">
    <div class="row g-0">
      <div class="col-lg-6 left-pattern">
        <div class="content-box">
          <h2 class="title font-canegroni">
            TIMES OF THE YEAR<br> WHEN
            DIFFERENT <br>FLOWERS
            BLOOM
          </h2>

          <p class="sub font-nexalight">
            The Seasons bloom with their own magic <br>
            Let their colours and moods guide your choice of flowers
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <img src="<?= base_url() ?>assets/Images/girl.png"
          class="right-img" alt="lavender">
      </div>
    </div>
  </div>
</section>


<section class="subscription-section position-relative">
  <img src="<?= base_url() ?>assets/Images/FLORIA-1.jpg"
    class="subscription-bg" alt="bg">

  <div class="subscription-badge">
    <img src="<?= base_url() ?>assets/icons/FLORIA-SUB ICON-5svg.svg" alt="bg">
  </div>
</section>

<?php include('includes/footer-link.php') ?>
<?php include('includes/footer.php') ?>