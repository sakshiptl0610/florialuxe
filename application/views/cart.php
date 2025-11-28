<?php include('includes/header-link.php') ?>
<?php include('includes/mainheader.php') ?>
<div>
  <div class="top-header body-content">
    <div class="main-container d-flex justify-content-between align-items-center">
      <h2 class="page-title font-canegroni">CART</h2>
      <div class="breadcrumb font-nexalight  ">Home / Cart</div>
    </div>
  </div>


  <div class="container py-5 cart-page">

    <!-- Cart Table -->
    <div class="row mb-5 align-items-start">
      <div class="col-lg-6">
        <h2 class="cart-title ps-4">Product</h2>

        <!-- Item 1 -->
        <div class="d-flex align-items-center cart-item">
          <span class="remove-btn">×</span>
          <img src="img1.jpg" class="cart-img">
          <span class="product-name">Moronto Florist</span>
        </div>

        <!-- Item 2 -->
        <div class="d-flex align-items-center cart-item mt-4">
          <span class="remove-btn">×</span>
          <img src="img2.jpg" class="cart-img">
          <span class="product-name">Dracaena</span>
        </div>
      </div>

      <div class="col-lg-2 text-start">
        <h2 class="cart-title">Price</h2>
        <div class="price-item"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">50</div>
        <div class="price-item mt-5"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">30</div>
      </div>

      <div class="col-lg-3">
        <h2 class="cart-title">Quantity</h2>

        <!-- Qty 1 -->


        <div class="qty-box qty-box-w mt-4">
          <span class="qty-label">Quantity</span>

          <div class="qty-number">
            <span id="qtyValue">1</span>
          </div>

          <div class="qty-btns">
            <div class="qty-up"><i class="fa-solid fa-chevron-up"></i></div>
            <div class="qty-down"><i class="fa-solid fa-chevron-down"></i></div>
          </div>
        </div>




        <!-- Qty 2 -->


        <div class="qty-box mt-4 qty-box-w">
          <span class="qty-label ">Quantity</span>

          <div class="qty-number">
            <span id="qtyValue">1</span>
          </div>

          <div class="qty-btns">
            <div class="qty-up"><i class="fa-solid fa-chevron-up"></i></div>
            <div class="qty-down"><i class="fa-solid fa-chevron-down"></i></div>
          </div>
        </div>




      </div>

      <div class="col-lg-1">
        <h2 class="cart-title">Subtotal</h2>
        <div class="price-item"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">50</div>
        <div class="price-item mt-5"><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">90</div>
      </div>
    </div>

    <!-- Coupon + Update Cart -->
    <div class="row mt-4">


      <div class="col-lg-3 d-flex align-items-end">
        <a href="<?php echo base_url('products'); ?>">
          <button class="cart-btn ">Update cart</button></a>
      </div>
    </div>


    <!-- NEW : CART TOTALS (Perfect like reference) -->
    <div class="cart-totals-block mt-5">

      <h2 class="totals-title">Cart totals</h2>

      <table class="cart-totals-table">

        <tr class="totals-row">
          <th>Subtotal</th>
          <td><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">140</td>
        </tr>

        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>

        <tr class="totals-row align-top">
          <th>Shipping</th>

          <td>
            <label><input type="radio" checked> Flat rate</label><br>
            <label class="mt-2"><input type="radio"> Free shipping</label><br>
            <label class="mt-2"><input type="radio"> Local pickup</label>

            <p class="mt-3 shipping-to">
              Shipping to <b>njhbg, n, lkjn, 234456, Ireland.</b><br>
              <a href="#">Change address</a>
            </p>
          </td>
        </tr>

        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>

        <tr class="totals-row">
          <th>Total</th>
          <td><img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" alt="" class="dirham">140</td>
        </tr>

      </table>
      <a href="<?php echo base_url('checkout'); ?>">
        <button class="checkout-btn mt-4">Proceed to checkout</button>
      </a>
    </div>


  </div>

  <style>
    .cart-totals-block {
      margin: auto;
    }

    .totals-title {
      font-size: 36px;
      color: #0c5b47;
      font-weight: 500;
      margin-bottom: 30px;
    }

    .cart-totals-table {
      width: 100%;
      border-collapse: collapse;
    }

    .cart-totals-table th,
    .cart-totals-table td {
      padding: 18px 0;
      font-size: 20px;
      color: #0c5b47;
      vertical-align: top;
    }

    .cart-totals-table th {
      font-weight: 600;
      width: 200px;
    }

    .shipping-to {
      font-size: 18px;
      margin-top: 10px;
    }

    .checkout-btn {
      background: #fff2e7;
      padding: 14px 24px;
      border: none;
      color: #0c5b47;
      font-size: 16px;
    }

    .cart-totals-table,
    .cart-totals-table th,
    .cart-totals-table td,
    .cart-totals-block,
    .cart-totals-block * {
      text-align: left !important;
      justify-content: flex-start !important;
      align-items: flex-start !important;
    }
  </style>



  <?php include('includes/footer-link.php') ?>
  <?php include('includes/footer.php') ?>