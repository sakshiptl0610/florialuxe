<?php include('includes/header-link.php') ?>
<?php include('includes/mainheader.php') ?>
<div>
  <!-- Breadcrumb -->
  <div class="mb-4 breadcrumb-container">
    <div class="breadcrumb-title-page">
      <div>
        <h2 class="font-canegroni text-color">Cart</h2>
      </div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-color font-nexalight">Home</li>
          <li class="breadcrumb-item text-color font-nexalight">cart</li>
        </ol>
      </nav>
    </div>
  </div>
</div>



<div class="container py-5 cart-page">

  <!-- Cart Table -->
  <div class="row mb-5 align-items-start">
    <div class="col-lg-6">
      <h2 class="cart-title">Product</h2>

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
      <div class="price-item">$50</div>
      <div class="price-item mt-5">$30</div>
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
      <div class="price-item">$50</div>
      <div class="price-item mt-5">$90</div>
    </div>
  </div>

  <!-- Coupon + Update Cart -->
  <div class="row justify-content-between mt-4">
    <div class="col-lg-4">

      <input type="text" class="form-control coupon-input" placeholder="Coupon code">
    </div>

    <div class="col-lg-3 d-flex align-items-end">
      <button class="cart-btn">Apply coupon</button>
    </div>

    <div class="col-lg-3 d-flex align-items-end">
      <button class="cart-btn ">Update cart</button>
    </div>
  </div>


  <!-- NEW : CART TOTALS (Perfect like reference) -->
  <div class="cart-totals-block mt-5">

    <h2 class="totals-title">Cart totals</h2>

    <table class="cart-totals-table">

      <tr class="totals-row">
        <th>Subtotal</th>
        <td>$140</td>
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
        <td>$140</td>
      </tr>

    </table>

    <button class="checkout-btn mt-4">Proceed to checkout</button>

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
    font-size: 24px;
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
    border-radius: 6px;
    border: none;
    color: #0c5b47;
    font-size: 20px;
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