<?php include('includes/header-link.php') ?>
<?php include('includes/mainheader.php') ?>



<div class="top-header body-content">
  <div class="main-container d-flex justify-content-between align-items-center">
    <h2 class="page-title font-canegroni">FLOWERS</h2>
    <div class="breadcrumb font-nexalight  ">Home / Flowers</div>
  </div>
</div>


<div class="main-container">

  <div class="filter-area text-center pt-5 pb-4 ">
    <div class="filter-wrapper">

      <ul class="filter-bar font-oswaldextralight">
        <li class="active" data-filter="all">All</li>
        <li data-filter="fresh">Fresh</li>
        <li data-filter="seasonal">Seasonal</li>

      </ul>

      <div class="dropdown-btn">+</div>

      <div class="extra-dropdown font-oswaldextralight">
        <p data-filter="winter">Winter</p>
        <p data-filter="autumn">Autumn</p>
        <p data-filter="bouquet">Bouquet</p>
        <p data-filter="luxury">Luxury</p>
        <p data-filter="romantic">Romantic</p>
      </div>

    </div>
  </div>
  <div class="row g-4">






    <!-- PRODUCT GRID -->
    <div class="main-container pb-5">
      <div class="row g-4">
        <!-- 1 -->
        <div class="col-md-4 product fresh">
          <div class="product-box">
            <a href="<?php echo base_url('roses'); ?>">
              <img src="<?= base_url() ?>assets/Images/FLORIA-7.jpg">

              <div class="hover-card">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12.875px" height="99.375px" viewBox="0 0 12.875 99.375" enable-background="new 0 0 12.875 99.375" xml:space="preserve">
                  <line fill="none" stroke="#338E8B" stroke-miterlimit="10" x1="2.221" y1="17.431" x2="2.221" y2="97.431"></line>
                  <path fill="#3F8171" d="M2.098,15.908c0.406-1.32,2.564-1.597,3.742-1.901c1.594-0.412,2.357-1.25,3.348-2.558
			c1.48-1.951,2.17-3.886,2.419-6.336c0.142-1.393-0.162-2.887,0.118-4.235c-0.28,2.665-3.648,4.36-5.069,6.397
			c-1.135,1.625-1.124,2.954-1.649,4.763c-0.546,1.879-1.48,1.798-2.831,2.889C2.185,15.081,2.272,15.167,2.098,15.908z"></path>
                </svg>
                <h3 class="font-canegroni">Roses</h3>
                <p class="font-nexalight  category">Fresh</p>
              </div>

              <div class="price-row">
                <span class="price"> <img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">145</span>
                <span class="add-btn">Add to cart</span>
              </div>
            </a>
          </div>
        </div>

        <!-- 2 -->
        <div class="col-md-4 product seasonal">
          <div class="product-box">
            <a href="<?php echo base_url('orchids'); ?>">
              <img src="<?= base_url() ?>assets/Images/FLORIA-8.jpg">
              <div class="hover-card">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12.875px" height="99.375px" viewBox="0 0 12.875 99.375" enable-background="new 0 0 12.875 99.375" xml:space="preserve">
                  <line fill="none" stroke="#338E8B" stroke-miterlimit="10" x1="2.221" y1="17.431" x2="2.221" y2="97.431"></line>
                  <path fill="#3F8171" d="M2.098,15.908c0.406-1.32,2.564-1.597,3.742-1.901c1.594-0.412,2.357-1.25,3.348-2.558
			c1.48-1.951,2.17-3.886,2.419-6.336c0.142-1.393-0.162-2.887,0.118-4.235c-0.28,2.665-3.648,4.36-5.069,6.397
			c-1.135,1.625-1.124,2.954-1.649,4.763c-0.546,1.879-1.48,1.798-2.831,2.889C2.185,15.081,2.272,15.167,2.098,15.908z"></path>
                </svg>
                <h3 class="font-canegroni">Orchids</h3>
                <p class="font-nexalight  category">Fresh</p>
              </div>
              <div class="price-row">
                <span class="price"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">125</span>
                <span class="add-btn">Add to cart</span>
              </div>
            </a>
          </div>
        </div>

        <!-- 3 -->
        <div class="col-md-4 product seasonal">
          <div class="product-box">
            <a href="<?php echo base_url('peonies'); ?>">
              <img src="<?= base_url() ?>assets/Images/FLORIA-9.jpg">
              <div class="hover-card">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12.875px" height="99.375px" viewBox="0 0 12.875 99.375" enable-background="new 0 0 12.875 99.375" xml:space="preserve">
                  <line fill="none" stroke="#338E8B" stroke-miterlimit="10" x1="2.221" y1="17.431" x2="2.221" y2="97.431"></line>
                  <path fill="#3F8171" d="M2.098,15.908c0.406-1.32,2.564-1.597,3.742-1.901c1.594-0.412,2.357-1.25,3.348-2.558
			c1.48-1.951,2.17-3.886,2.419-6.336c0.142-1.393-0.162-2.887,0.118-4.235c-0.28,2.665-3.648,4.36-5.069,6.397
			c-1.135,1.625-1.124,2.954-1.649,4.763c-0.546,1.879-1.48,1.798-2.831,2.889C2.185,15.081,2.272,15.167,2.098,15.908z"></path>
                </svg>
                <h3 class="font-canegroni">Peonies</h3>
                <p class="font-nexalight  category">Seasonal</p>
              </div>
              <div class="price-row">
                <span class="price"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">160</span>
                <span class="add-btn">Add to cart</span>
              </div>
            </a>
          </div>
        </div>

        <!-- 4 -->
        <div class="col-md-4 product fresh">
          <div class="product-box">
            <a href="<?php echo base_url('anthurium'); ?>">
              <img src="<?= base_url() ?>assets/Images/FLORIA-10.jpg">
              <div class="hover-card">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12.875px" height="99.375px" viewBox="0 0 12.875 99.375" enable-background="new 0 0 12.875 99.375" xml:space="preserve">
                  <line fill="none" stroke="#338E8B" stroke-miterlimit="10" x1="2.221" y1="17.431" x2="2.221" y2="97.431"></line>
                  <path fill="#3F8171" d="M2.098,15.908c0.406-1.32,2.564-1.597,3.742-1.901c1.594-0.412,2.357-1.25,3.348-2.558
			c1.48-1.951,2.17-3.886,2.419-6.336c0.142-1.393-0.162-2.887,0.118-4.235c-0.28,2.665-3.648,4.36-5.069,6.397
			c-1.135,1.625-1.124,2.954-1.649,4.763c-0.546,1.879-1.48,1.798-2.831,2.889C2.185,15.081,2.272,15.167,2.098,15.908z"></path>
                </svg>
                <h3 class="font-canegroni">Anthurium</h3>
                <p class="font-nexalight  category">Seasonal</p>
              </div>

              <div class="price-row">
                <span class="price"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">180</span>
                <span class="add-btn">Add to cart</span>
              </div>
            </a>
          </div>
        </div>

        <!-- 5 -->
        <div class="col-md-4 product fresh">
          <div class="product-box">
            <a href="<?php echo base_url('paradish'); ?>">
              <img src="<?= base_url() ?>assets/Images/FLORIA-11.jpg">
              <div class="hover-card">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12.875px" height="99.375px" viewBox="0 0 12.875 99.375" enable-background="new 0 0 12.875 99.375" xml:space="preserve">
                  <line fill="none" stroke="#338E8B" stroke-miterlimit="10" x1="2.221" y1="17.431" x2="2.221" y2="97.431"></line>
                  <path fill="#3F8171" d="M2.098,15.908c0.406-1.32,2.564-1.597,3.742-1.901c1.594-0.412,2.357-1.25,3.348-2.558
			c1.48-1.951,2.17-3.886,2.419-6.336c0.142-1.393-0.162-2.887,0.118-4.235c-0.28,2.665-3.648,4.36-5.069,6.397
			c-1.135,1.625-1.124,2.954-1.649,4.763c-0.546,1.879-1.48,1.798-2.831,2.889C2.185,15.081,2.272,15.167,2.098,15.908z"></path>
                </svg>
                <h3 class="font-canegroni">Bird Of Paradish</h3>
                <p class="font-nexalight  category">Fresh</p>
              </div>

              <div class="price-row">
                <span class="price"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">100</span>
                <span class="add-btn">Add to cart</span>
              </div>
            </a>
          </div>
        </div>

        <!-- 6 -->
        <div class="col-md-4 product fresh">
          <div class="product-box">
            <a href="<?php echo base_url('leucospermum'); ?>">
              <img src="<?= base_url() ?>assets/Images/FLORIA-12.jpg">
              <div class="hover-card">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12.875px" height="99.375px" viewBox="0 0 12.875 99.375" enable-background="new 0 0 12.875 99.375" xml:space="preserve">
                  <line fill="none" stroke="#338E8B" stroke-miterlimit="10" x1="2.221" y1="17.431" x2="2.221" y2="97.431"></line>
                  <path fill="#3F8171" d="M2.098,15.908c0.406-1.32,2.564-1.597,3.742-1.901c1.594-0.412,2.357-1.25,3.348-2.558
			c1.48-1.951,2.17-3.886,2.419-6.336c0.142-1.393-0.162-2.887,0.118-4.235c-0.28,2.665-3.648,4.36-5.069,6.397
			c-1.135,1.625-1.124,2.954-1.649,4.763c-0.546,1.879-1.48,1.798-2.831,2.889C2.185,15.081,2.272,15.167,2.098,15.908z"></path>
                </svg>
                <h3 class="font-canegroni">Leuco spermum</h3>
                <p class="font-nexalight  category">Fresh</p>
              </div>

              <div class="price-row">
                <span class="price"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">95</span>
                <span class="add-btn">Add to cart</span>
              </div>
            </a>
          </div>
        </div>

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

          <p class="font-nexalight  sub font-nexalight">
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
<<<<<<< HEAD
      <a href="<?= base_url('subscription'); ?>">
        <img src="<?= base_url() ?>assets/icons/FLORIA-SUB ICON-5svg.svg" alt="bg"></a>
=======
    <img src="<?= base_url() ?>assets/icons/FLORIA-SUB ICON-5svg.svg" alt="bg">
>>>>>>> e7fa16e8b9111a65889ce31e59dbf4f90b7b153e
  </div>
</section>

<?php include('includes/footer-link.php') ?>
<?php include('includes/footer.php') ?>