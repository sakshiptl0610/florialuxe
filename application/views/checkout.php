<?php include('includes/header-link.php') ?>
<?php include('includes/mainheader.php') ?>

<div class="top-header body-content">
  <div class="main-container d-flex justify-content-between align-items-center">
    <h2 class="page-title font-canegroni">CHECKOUT</h2>
    <div class="breadcrumb font-nexalight  ">Home / Checkout</div>
  </div>
</div>

<div class="checkout-container">
  <div class="coupon-box">
    <p>Have a coupon?</p>
    <a href="#" class="coupon-toggle">Click here to enter your code</a>

    <div class="coupon-input-box">
      <div class="coupon-inner">
        <input type="text" placeholder="Enter coupon code">
        <button>Apply coupon</button>
      </div>
    </div>
  </div>


  <div class="row g-5">

    <!-- LEFT SIDE – BILLING DETAILS -->
    <div class="col-md-7">
      <h3 class="checkout-title">Billing details</h3>

      <div class="checkout-field">
        <label>First name *</label>
        <input type="text">
      </div>

      <div class="checkout-field">
        <label>Last name *</label>
        <input type="text">
      </div>

      <div class="checkout-field">
        <label>Company name (optional)</label>
        <input type="text">
      </div>

      <div class="checkout-field">
        <label>Country / Region *</label>
        <select id="countrySelect">
          <option>India</option>
          <option>USA</option>
          <option>UAE</option>
          <option>Iran</option>
          <option>Iraq</option>
          <option>Ireland</option>
          <option>Italy</option>
          <option>Japan</option>
        </select>
      </div>


      <div class="checkout-field">
        <label>Street address *</label>
        <input type="text" placeholder="House number and street name">
        <input type="text" placeholder="Apartment, suite, unit, etc (optional)">
      </div>

      <div class="checkout-field">
        <label>Town / City *</label>
        <input type="text">
      </div>

      <div class="checkout-field">
        <label>State*</label>
        <select id="countrySelect">
          <option>Select your state</option>
          <option>UP</option>
          <option>...........</option>
          <option>......</option>
          <option>..........</option>

        </select>
      </div>
      <div class="checkout-field">
        <label>PIN Code *</label>
        <input type="text">
      </div>

      <div class="checkout-field">
        <label>Phone *</label>
        <input type="text">
      </div>

      <div class="checkout-field">
        <label>Email address *</label>
        <input type="email">
      </div>
    </div>

    <!-- RIGHT SIDE – SHIP TO DIFFERENT ADDRESS -->
    <div class="col-md-5">
      <h3 class="checkout-title">
        <input type="checkbox" class="me-2"> Ship to a different address?
      </h3>

      <div class="checkout-field">
        <label>Order notes (optional)</label>
        <textarea class="textarea" placeholder="Notes about your order, e.g special notes for delivery."></textarea>
      </div>
    </div>

  </div>

  <!-- ORDER SUMMARY SECTION -->
  <div class="checkout-summary mt-5">
    <h3 class="checkout-title">Your order</h3>

    <table class="summary-table">
      <tr>
        <th class="heading-td">Product</th>
        <th class="heading-td">Subtotal</th>
      </tr>
      <tr>
        <td>Moronto Florist ×1</td>
        <td>$50</td>
      </tr>
      <tr>
        <td>Dracaena ×1</td>
        <td>$30</td>
      </tr>
      <tr class="subtotal">
        <td class="heading-td">Subtotal</td>
        <td>$80</td>
      </tr>
      <tr class="shipping">
        <td class="heading-td">Shipping</td>
        <td class="shipping-options">

          <label class="ship-method">
            <input type="radio" name="ship" checked>
            Flat rate
          </label>

          <label class="ship-method">
            <input type="radio" name="ship">
            Free shipping
          </label>

          <label class="ship-method">
            <input type="radio" name="ship">
            Local pickup
          </label>

        </td>
      </tr>

      <tr class="total">
        <td class="heading-td">Total</td>
        <td class="heading-td">$80</td>
      </tr>
    </table>

    <div class="payment-box mt-4">

      <label class="pay-option">
        <input type="radio" name="pay" value="bank" checked>
        <span class="heading-td">Direct bank transfer</span>
        <p class="pay-info">
          Make your payment directly into our bank account. Please use your Order ID as the payment reference.
        </p>
      </label>

      <label class="pay-option">
        <input type="radio" name="pay" value="check">
        <span class="heading-td">Check payments</span>
        <p class="pay-info">
          Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
        </p>
      </label>

      <label class="pay-option">
        <input type="radio" name="pay" value="cod">
        <span class="heading-td">Cash on delivery</span>
        <p class="pay-info">
          Pay with cash upon delivery.
        </p>
      </label>

    </div>


    <button class="place-order-btn mt-4">Place order</button>
  </div>
</div>
<section class="subscription-section position-relative">
  <img src="<?= base_url() ?>assets/Images/FLORIA-1.jpg"
    class="subscription-bg" alt="bg">

  <div class="subscription-badge">
    <img src="<?= base_url() ?>assets/icons/FLORIA-SUB ICON-5svg.svg" alt="bg">
  </div>
</section>
<?php include('includes/footer-link.php') ?>
<?php include('includes/footer.php') ?>