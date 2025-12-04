<?php include('includes/header-link.php') ?>
<?php include('includes/mainheader.php') ?>



<div class="top-header body-content">
  <div class="main-container d-flex justify-content-between align-items-center">
    <h2 class="page-title font-canegroni">FLOWERS</h2>
    <div class="breadcrumb font-nexalight  ">Home / Flowers</div>
  </div>
</div>


<div>
  <div class="row g-4">

    <!-- PRODUCT GRID -->
    <div class="main-container pb-5 mt-5">
   <div class="row gy-4 justify-content-center">

        <div class="col-lg-4 col-md-6">
          <div class="emotion-card">
            <a href="<?= base_url('valentinesday'); ?>">
              <img src="assets/Images/FLORIA-15.jpg" alt="">
            </a>
            <div class="label-box text-center font-nexalight">Valentine's Day</div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="emotion-card">
            <a href="<?= base_url('mothersday'); ?>">
              <img src="assets/Images/FLORIA-16.jpg" alt="">
            </a>
            <div class="label-box text-center font-nexalight">Mother's Day</div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="emotion-card">
            <a href="<?= base_url('birthday'); ?>">
              <img src="assets/Images/FLORIA-17.jpg" alt="">
<<<<<<< HEAD
          
            <div class="label-box text-center font-nexalight">Birth Day</div>  </a>
=======

              <div class="label-box text-center font-nexalight">Birth Day</div>
            </a>
>>>>>>> e7fa16e8b9111a65889ce31e59dbf4f90b7b153e
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="emotion-card">
            <a href="<?= base_url('annivarsary'); ?>">
              <img src="assets/Images/FLORIA-18.jpg" alt="">
<<<<<<< HEAD
           
            <div class="label-box text-center font-nexalight">Anniversary
            </div> </a>
=======

              <div class="label-box text-center font-nexalight">Anniversary
              </div>
            </a>
>>>>>>> e7fa16e8b9111a65889ce31e59dbf4f90b7b153e
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="emotion-card">
            <a href="<?= base_url('wedding'); ?>">
              <img src="assets/Images/FLORIA-19.jpg" alt="">
<<<<<<< HEAD
          
            <div class="label-box text-center font-nexalight">Weddings</div>  </a>
=======

              <div class="label-box text-center font-nexalight">Weddings</div>
            </a>
>>>>>>> e7fa16e8b9111a65889ce31e59dbf4f90b7b153e
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="emotion-card">
            <a href="<?= base_url('newborn'); ?>">
              <img src="assets/Images/FLORIA-20.jpg" alt="">
<<<<<<< HEAD
          
            <div class="label-box text-center font-nexalight">New Born</div>  </a>
=======

              <div class="label-box text-center font-nexalight">New Born</div>
            </a>
>>>>>>> e7fa16e8b9111a65889ce31e59dbf4f90b7b153e
          </div>
        </div>

      </div>
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
        CHOSEN AT <br> THEIR BEST

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

              <p class="font-nexalight  sub">
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
         <a href="<?= base_url('subscription'); ?>">
        <img src="<?= base_url() ?>assets/icons/FLORIA-SUB ICON-5svg.svg" alt="bg"></a>
      </div>
    </section>

    <?php include('includes/footer-link.php') ?>
    <?php include('includes/footer.php') ?>