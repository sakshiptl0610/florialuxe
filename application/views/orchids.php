<?php include('includes/header-link.php') ?>
<?php include('includes/mainheader.php') ?>
<div>
  <div class="top-header body-content">
    <div class="main-container d-flex justify-content-between align-items-center">
      <h2 class="page-title font-canegroni">Orchids</h2>
      <div class="breadcrumb font-nexalight  ">Home /orchids</div>
    </div>
  </div>

  <div class="main-container">
    <div class="inner-p-container">
      <div class="view-cart-box">
        <div>
          “Roses” has been added to your cart.
        </div>

        <div>
          <a href="<?php echo base_url('cart'); ?>">
            <button class="cart-btn ms-3">View cart</button></a>
        </div>
      </div>

      <div class="product-row">

        <!-- LEFT: Product Gallery -->
        <div class="product-row-inner">
          <div class="p-product-image">
            <img id="mainProductImage" src="<?= base_url() ?>assets/Images/FLORIA-8.jpg"
              class="img-fluid w-100 mb-3" alt="Product">
          </div>


          <!-- RIGHT: Product Details -->
          <div class=" product-content-box">

            <p class="font-canegroni text-color title">Orchids</p>
            <h5 class="text-color mt-3 "><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">125</h5>

            <p class="text-color font-nexalight tagline mt-3 ">
              Our orchids are sourced from top growers and known for their elegant beauty, long-lasting freshness, and vibrant colors. Each stem is carefully selected to bring a touch of luxury and sophistication to any space. Perfect for gifting or home décor, our orchids remain fresh and stunning for days.
            </p>

            <div class="quantity-wrapper d-flex align-items-center">

              <div class="qty-box mt-4">
                <span class="qty-label">Quantity</span>

                <div class="qty-number">
                  <span id="qtyValue">1</span>
                </div>

                <div class="qty-btns">
                  <div class="qty-up"><i class="fa-solid fa-chevron-up"></i></div>
                  <div class="qty-down"><i class="fa-solid fa-chevron-down"></i></div>
                </div>
              </div>

              <button type="button" id="addToCartBtn" class="cart-btn ms-3 mt-4">
                Add to cart
              </button>

            </div>




            <!-- META -->
            <div class="mt-3 text-color details">

              <p><span class="heading-td">Category:</span> Red Roses</p>
              <p>
                <span class="heading-td"> Tags:</span> Fresh
              </p>
            </div>

          </div>
        </div>
      </div>

      <!-- PRODUCT TABS -->
      <!--<div class="product-tabs-wrapper mt-5">-->

      <!-- Tabs -->
      <!--    <ul class="nav nav-tabs justify-content-center product-tabs" id="productTabs" role="tablist">-->

      <!--        <li class="nav-item" role="presentation">-->
      <!--            <button class="nav-link active"-->
      <!--                id="desc-tab"-->
      <!--                data-bs-toggle="tab"-->
      <!--                data-bs-target="#desc"-->
      <!--                type="button"-->
      <!--                role="tab">-->
      <!--                Description-->
      <!--            </button>-->
      <!--        </li>-->

      <!--        <li class="nav-item" role="presentation">-->
      <!--            <button class="nav-link"-->
      <!--                id="info-tab"-->
      <!--                data-bs-toggle="tab"-->
      <!--                data-bs-target="#info"-->
      <!--                type="button"-->
      <!--                role="tab">-->
      <!--                Additional information-->
      <!--            </button>-->
      <!--        </li>-->

      <!--        <li class="nav-item" role="presentation">-->
      <!--            <button class="nav-link"-->
      <!--                id="reviews-tab"-->
      <!--                data-bs-toggle="tab"-->
      <!--                data-bs-target="#reviews"-->
      <!--                type="button"-->
      <!--                role="tab">-->
      <!--                Reviews (0)-->
      <!--            </button>-->
      <!--        </li>-->

      <!--    </ul>-->

      <!-- Tab content -->
      <!--    <div class="tab-content mt-4">-->

      <!-- Description -->
      <!--        <div class="tab-pane fade show active text-center"-->
      <!--            id="desc"-->
      <!--            role="tabpanel"-->
      <!--            aria-labelledby="desc-tab">-->

      <!--            <p>-->
      <!--                Sit purto verear iracundia ea, cu mea expetenda gubergren.-->
      <!--                Te quis partiendo vix. Vivendo voluptatum cu vis, unum minim pertinacia vis ea.-->
      <!--            </p>-->
      <!--        </div>-->

      <!-- Additional Info -->
      <!--        <div class="tab-pane fade"-->
      <!--            id="info"-->
      <!--            role="tabpanel"-->
      <!--            aria-labelledby="info-tab">-->

      <!--            <table class="product-info-table ">-->
      <!--                <tr>-->
      <!--                    <th>Weight</th>-->
      <!--                    <td>5 kg</td>-->
      <!--                </tr>-->
      <!--                <tr>-->
      <!--                    <th>Dimensions</th>-->
      <!--                    <td>5 × 10 × 15 cm</td>-->
      <!--                </tr>-->
      <!--            </table>-->
      <!--        </div>-->

      <!-- Reviews -->
      <!--        <div class="tab-pane fade"-->
      <!--            id="reviews"-->
      <!--            role="tabpanel"-->
      <!--            aria-labelledby="reviews-tab">-->

      <!--            <div class="review-box">-->

      <!--                <h5 class="mb-1">Reviews</h5>-->
      <!--                <p class="text-muted mb-4">There are no reviews yet.</p>-->

      <!--                <h5 class="mb-3">Be the first to review “Seal”</h5>-->

      <!--                <p class="text-muted small">-->
      <!--                    Your email address will not be published. Required fields are marked *-->
      <!--                </p>-->

      <!--                <label class="fw-semibold mb-1">Your rating *</label>-->
      <!--                <div class="rating-stars mb-3">★★★★★</div>-->

      <!--                <label class="fw-semibold mb-1">Your review *</label>-->
      <!--                <textarea class="form-control review-input mb-4" rows="6"></textarea>-->

      <!--                <label class="fw-semibold mb-1">Name *</label>-->
      <!--                <input type="text" class="form-control review-line-input mb-4">-->

      <!--                <label class="fw-semibold mb-1">Email *</label>-->
      <!--                <input type="email" class="form-control review-line-input mb-4">-->

      <!--                <div class="form-check mb-3">-->
      <!--                    <input class="form-check-input mt-3" type="checkbox" id="saveInfo">-->
      <!--                    <label class="form-check-label small pt-1" for="saveInfo">-->
      <!--                        Save my name, email, and website in this browser for the next time I comment.-->
      <!--                    </label>-->
      <!--                </div>-->

      <!--                <button class="btn btn-submit-review px-4">Submit</button>-->
      <!--            </div>-->

      <!--        </div>-->

      <!--    </div>-->
      <!--</div>-->
      <div class="divide-line"></div>


      <!-- RELATED PRODUCTS -->
      <h3 class="mt-5">Related Products</h3>

      <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">

        <!-- Product Card -->
        <div class="col product-box">
          <div class="card border-0">
            <img src="<?= base_url() ?>assets/Images/FLORIA-11.jpg">
            <div class="price-row">
              <span class="price"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">145</span>
              <span class="add-btn">Add to cart</span>
            </div>
          </div>
        </div>

        <div class="col product-box">
          <div class="card border-0">
            <img src="<?= base_url() ?>assets/Images/FLORIA-9.jpg">
            <div class="price-row">
              <span class="price"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">145</span>
              <span class="add-btn">Add to cart</span>
            </div>
          </div>
        </div>
        <div class="col product-box">
          <div class="card border-0">
            <img src="<?= base_url() ?>assets/Images/FLORIA-8.jpg">
            <div class="price-row">
              <span class="price"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">145</span>
              <span class="add-btn">Add to cart</span>
            </div>
          </div>
        </div>
        <div class="col product-box">
          <div class="card border-0">
            <img src="https://roisin.qodeinteractive.com/wp-content/uploads/2019/12/main-home-shop-img-4-600x600.jpg">
            <div class="price-row">
              <span class="price"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">145</span>
              <span class="add-btn">Add to cart</span>
            </div>
          </div>
        </div>
        <!-- Repeat as needed -->
      </div>
    </div>
  </div>



  <?php include('includes/footer-link.php') ?>
  <?php include('includes/footer.php') ?>